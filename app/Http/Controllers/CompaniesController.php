<?php

namespace App\Http\Controllers;

use Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $compqurys = company::all ();
        return view ('admin.Companies')->with ('compqurys', $compqurys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
//        $compqurys = company::all();
//        return view('admin.company')->with('compqurys', $compqurys);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {

        $image = $request->UrlImg;
        $name = time () . '.' . $image->getClientOriginalExtension ();


        $Company = new company();
        $Company->name = $request['name'];
        $Company->email = $request['email'];
        $Company->sectoreWorks = $request['sectoreWorks'];
        $Company->city = $request['sectoreWorks'];
        $Company->stutusTrain = $request['stutusTrain'];
        $Company->Addresse = $request['Addresse'];
        $Company->phone = $request['phone'];
        $Company->TrainingSpecialty = $request['TrainingSpecialty'];
        $Company->noTrain = $request['noTrain'];
        $Company->about = $request['about'];
        $Company->UrlImg = $name;
        $result = $Company->save ();


        $request->UrlImg->move (public_path ('images'), $name);


        //        Storage::disk ('local')->put ($path . $name, file_get_contents ($image));
//
//        $status = Storage::disk ('local')->exists ($path . $name);


//        company::create([
//            'UrlImg' => $request->$name]
//             );

//        company::create([
//            'name'=>$request->name,
//            'email'=>$request->email,
//            'sectoreWorks'=>$request->sectoreWorks,
//            'city'=>$request->city,
//            'stutusTrain'=>$request->stutusTrain,
//            'Addresse'=>$request->Addresse,
//            'phone'=>$request->phone,
//            'TrainingSpecialty'=>$request->TrainingSpecialty,
//            'noTrain'=>$request->noTrain,
//            'about'=>$request->about,
//            'UrlImg'=>$request->$image
//        ]);
        return redirect ()->back ();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $compqurys = company::where ('id', $id)->first ();
        return view ('admin.company')->with ('compqurys', $compqurys);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {

        $data = request ()->all ();

        company::find ($id)->update ($data);

        return redirect ()->back ();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {

        $result = company::where ('id', $id)->delete ();
        return redirect ()->back ();
//        $data=company::find($id);
//          $data->delete();
//        return redirect()->back();
//            ->with('success', 'company deleted successfully');
    }
}
