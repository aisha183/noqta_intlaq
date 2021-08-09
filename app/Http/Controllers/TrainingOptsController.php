<?php

namespace App\Http\Controllers;

use App\ChanceCompany;
use App\company;
use Illuminate\Http\Request;

class TrainingOptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $Chances = ChanceCompany::all ();
        $compqurys = company::all ();
        return view ('admin.TrainingOpts')->with ('Chances', $Chances)->with ('compqurys', $compqurys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        $Chances = ChanceCompany::all ($id);
        $compqurys = company::all ();
        return view ('admin.TrainingOpts')->with ('Chances', $Chances)->with ('compqurys', $compqurys);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        //
    }

    public function changeStatus(Request $request){
       $chances= ChanceCompany::find($request->id);
        $chances->status=$request->status;
        $chances->save();

    }

    public function Publish (Request $request, $id)
    {

//        dd ('sss');

        $find_av = ChanceCompany::find ($id);
        if (!$find_av) {
            return response ()->json (['status' => 0, 'message' => 'الخدمة غير متوفرة', 'style' => '']);

        }

        $find_item = ChanceCompany::where ('Chances', $id)->first ();
        if ($find_item) {
            ChanceCompany::where ('Chances', $id)->update (['status' => 1]);
        }

        return response ()->json (['status' => 1, 'message' => 'تمت العملية بنجاح', 'style' => 'on']);

    }

    public function Unpublish (Request $request, $id)
    {

//        dd ('sss');

        $find_av = ChanceCompany::find ($id);
        if (!$find_av) {
            return response ()->json (['status' => 0, 'message' => 'الخدمة غير متوفرة', 'style' => '']);

        }

        $find_item = ChanceCompany::where ('Chances', $id)->first ();
        if ($find_item) {
            ChanceCompany::where ('Chances', $id)->update (['status' => 2]);
        }

        return response ()->json (['status' => 2, 'message' => 'تمت العملية بنجاح', 'style' => 'on']);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        $result = ChanceCompany::where ('id', $id)->delete ();
        return redirect ()->back ();
    }
}
