<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index ()
    {
        $companies = company::all ();

        return view ('website.Home')->with ('companies', $companies);
    }


    public function search (Request $request)
    {
        // Get the search value from the request
        $search = $request->input ('search');
        // Search in the title and body columns from the posts table
        $companies = company::query ()
            ->where ('sectoreWorks', 'LIKE', "%{$search}%")
            ->orWhere ('city', 'LIKE', "%{$search}%")
            ->orWhere ('stutusTrain', 'LIKE', "%{$search}%")
            ->orWhere ('TrainingSpecialty', 'LIKE', "%{$search}%")
            ->orWhere ('name', 'LIKE', "%{$search}%")
            ->get ();

        // Return the search view with the resluts compacted
        return view ('website.Home')->with ('companies', $companies);
    }
//    public function showCom(Request $request)
//    {
//        $companies=company::where('stutusTrain', 'LIKE', '%{$request->city}%')->get();
//
//        return view('website.Home')->with('companies',$companies);
//    }

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
        //
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
        //
    }

    public function getData (Request $request)
    {
        $results = company::when (request ()->has ('sectoreWorks'), function ($q) {
            $q->where ('sectoreWorks', request ('sectoreWorks'));
        })->when (request ()->has ('city'), function ($q) {
            $q->where ('city', request ('city'));
        })->when (request ()->has ('TrainingSpecialty'), function ($q) {
            $q->where ('TrainingSpecialty', request ('TrainingSpecialty'));
        })->when (request ()->has ('statuse'), function ($q) {
            $q->where ('statuse', request ('statuse'));
        })->when (count (request ()->all ()) === 0, function ($q) {
            $q->searched ();
        })->where ('profile_state', 'active')->paginate (10)->appends ([
            'sectoreWorks' => request ('service-provider'),
            'city' => request ('product'),
            'TrainingSpecialty' => request ('city'),
            'statuse' => request ('statuse'),
        ]);
//        $filters = [
//            'sectoreWorks' => Input::get('sectoreWorks'),
//            'city'  => Input::get('city'),
//            'TrainingSpecialty' => Input::get('TrainingSpecialty'),
//            'statuse'    => Input::get('stutusTrain')
//        ];
//
//        $companies = company::where(function ($query) use ($filters) {
//            if ($filters['sectoreWorke']) {
//                $query->where('sectoreWorks', '=', $filters['sectoreWorks']);
//            }
//            if ($filters['city']) {
//                $query->where('city', '=', $filters['city']);
//            }
//            if ($filters['TrainingSpecialty']) {
//                $query->where('TrainingSpecialty', '=', $filters['TrainingSpecialty']);
//            }
//            if ($filters['statuse']) {
//                $query->where('statuse', '=', $filters['statuse']);
//            }
//        })->get();

        return view ('website.Home')->with ('companies', $results);


//
//        $datas=company::all ();
//         ('datas',$datas);
    }
}
