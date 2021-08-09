<?php

namespace App\Http\Controllers;

use App\company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $names=company::find($id);
        return view('website.Request')->with('names',$names);
    }

    function send(Request $request )
    {
        $this->validate($request, [
            'name'     =>  'required',]);
//            'email'  =>  'required|email',
//            'first_name ' =>'required',
//            'secund_name'=>'required',
//            'last_name'=>'required',
//            'phhone_no'=>'required',
//            'request_Text'=>'required',
//
//        ]);

        $data = array(
            'name'      =>  $request->first_name,
            'first_name' =>  $request->first_name,
            'secund_name' =>  $request->secund_name,
            'last_name' =>  $request->last_name,
            'phhone_no' =>  $request->phhone_no,
            'email' =>  $request->email,
            'University' =>  $request->University,
            'college' =>  $request->college,
            'Specialization' =>  $request->Specialization,
            'training_type' =>  $request->training_type,
            'Field_training' =>  $request->Field_training,
            'Experience_level' =>  $request->Experience_level,
            'request_Text' =>  $request->request_Text,

        );
        $names=company::find($request->id);
        Mail::to('da715097@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
