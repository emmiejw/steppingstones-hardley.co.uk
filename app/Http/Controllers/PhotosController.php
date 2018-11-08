<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoGallery;
use Session;

class PhotosController extends Controller
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
        $photos = PhotoGallery::all();
        return view('photos.index', compact('photos', $photos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $photo = $request->photo;
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo->move('photos/', $photo_new_name);

        $photo = PhotoGallery::create([
            'photo' => 'photos/' . $photo_new_name,
            'caption' => $request->caption,
        ]);

        

        Session::flash('created', 'A Photo has been added successfully.');
        
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
    public function edit()
    {
        $photos = PhotoGallery::paginate(10);
        return view('photos.edit', compact('photos', $photos));
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
        $photo = PhotoGallery::findOrFail($id);
        $photo->delete();
        Session::flash('deleted', 'Photo has been deleted successfully.');
        return redirect()->back();
    }

}
