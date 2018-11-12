<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\User;
use Session;
use Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'store');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::where('is_active', 1)->orderBy('id', 'DESC')->paginate(5);
       return view('testimonials.index', compact('testimonials', $testimonials));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        return view('testimonials');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::all();
        Testimonial::create($request->all());
        Notification::send($user, new \App\Notifications\NewTestimonialPosted);
        Session::flash('created', 'Post created succesfully.');
        return redirect()->route('testimonials.index');

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
        $testimonials = Testimonial::orderBy('id', 'DESC')->paginate(5);
        return view('testimonials.edit', compact('testimonials', $testimonials));
       
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
        Testimonial::findOrFail($id)->update($request->all());
        Session::flash('updated', 'Testimonial succesfully Approved.');
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
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        Session::flash('deleted');
        return redirect()->back();
    }
}
