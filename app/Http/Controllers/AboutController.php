<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Policy;
use Session;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        $policies = Policy::all();

        return view('about.index', compact(['abouts','policies', $abouts, $policies]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $policy_file = $request->policy_file;
        $policy_file_new_name = time().$policy_file->getClientOriginalName();
        $policy_file->move('policies/', $policy_file_new_name);

        $abouts = About::create([
            'intro' => $request->intro,
            'aims' => $request->aims,
            'fees' => $request->fees,
            'rates' => $request->rates,
            'funding' => $request->funding,
            'registration' => $request->registration,
            'involvement' => $request->involvement,
            'policies' => $request->policies,
        ]);

        $policies = Policy::create(['policy_file' => $request->policy_file,]);


        Session::flash('created', '"About Page" information has been added successfully.');
        return redirect()->back();
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
        $abouts = \App\About::find($id);
        return view('about.edit',compact('abouts', $abouts));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request)
    {
        $about = About::find($id);
        $about->intro = $request->get('intro');
        $about->aims = $request->get('aims');
        $about->fees = $request->get('fees');
        $about->rates = $request->get('rates');
        $about->funding = $request->get('funding');
        $about->registration = $request->get('registration');
        $about->involvement = $request->get('involvement');
        $about->policies = $request->get('policies');
        $about->policy_file = $request->get('policy_file');
        $about->save();
        
        Session::flash('updated', '"About Page" information has been updated successfully.');

        return redirect()->back();
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
