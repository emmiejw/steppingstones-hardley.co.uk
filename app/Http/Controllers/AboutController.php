<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
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
        return view('about.index', compact('abouts', $abouts));
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
        $about = new About;
        $about->intro = $request->intro;
        $about->aims = $request->aims;
        $about->fees = $request->fees;
        $about->rates = $request->rates;
        $about->funding = $request->funding;
        $about->registration = $request->registration;
        $about->involvement = $request->involvement;
        $about->policies = $request->policies;
        $about->save();

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
