<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Session;

class StaffController extends Controller
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
        $staffs = Staff::all();
       return view('staff.index', compact('staffs', $staffs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
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
            'name' => 'required',
            'role' => 'required',
            'qualifications_1' => 'required',
            'aboutMe' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $photo = $request->photo;
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo->move('profile/', $photo_new_name);

        $staff = Staff::create([
            'name' => $request->name,
            'role' => $request->role,
            'qualifications_1' => $request->qualifications_1,
            'qualifications_2' => $request->qualifications_2,
            'qualifications_3' => $request->qualifications_3,
            'aboutMe' => $request->aboutMe,
            'photo' => 'profile/' . $photo_new_name,
        ]);

        Session::flash('created', 'Staff Member has been added successfully.');
        
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
        $staffs = Staff::find($id);
        return view('staff.edit',compact('staffs', $staffs));
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
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'qualifications_1' => 'required',
            'aboutMe' => 'required'
        ]);

        $staff = Staff::find($id);

        if($request->hasFile('photo'))
        {
            $photo = $request->photo;
            $photo_new_name = time().$photo->getClientOriginalName();
            $photo->move('profile', $photo_new_name);
            $staff->photo = 'profile/'.$featured_new_name;
        }
            $staff->name = $request->get('name');
            $staff->role = $request->get('role');
            $staff->qualifications_1 = $request->get('qualifications_1');
            $staff->qualifications_2 = $request->get('qualifications_2');
            $staff->qualifications_3 = $request->get('qualifications_3');
            $staff->aboutMe = $request->get('aboutMe');
            $staff->save();

            Session::flash('updated', 'Staff Member has been updated successfully.');

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
        $staff = Staff::findOrFail($id);
        $staff->delete();
        Session::flash('deleted', 'Staff Member has been deleted successfully.');
        return redirect()->back();
    }
}
