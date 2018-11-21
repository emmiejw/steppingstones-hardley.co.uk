<?php

namespace App\Http\Controllers;

use App\Mainpage;
use Session;
use Illuminate\Http\Request;

class SteppingstonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $mainpages = Mainpage::all();
       return view('mainpage.index')->with('mainpages', $mainpages);
    }

    public function create()
    {
        return view('mainpage.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'photo_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption_1' => 'required',
            
        ]);
        $photo_1 = $request->photo_1;
        $photo_1_new_name = time().$photo_1->getClientOriginalName();
        $photo_1->move('mainpage/', $photo_1_new_name);

        
        $mainpage = Mainpage::create([
            'photo_1' => 'mainpage/' . $photo_1_new_name,
            'caption_1' => $request->caption_1,
    
        ]);
        
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
        $mainpages = Mainpage::find($id);
        return view('mainpage.edit', compact('mainpages', $mainpages));
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
        $mainpage = Mainpage::find($id);
        $mainpage->caption_1 = $request->get('caption_1');
        $mainpage->save();
        
        Session::flash('updated', '"Photo Caption" has been updated successfully.');

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
        $mainpages = Mainpage::findOrFail($id);
        $mainpages->delete();
        return redirect()->route('main.index');
    }
}
