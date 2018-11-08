<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Policy;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.policies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policies_files = Policy::all();

        return view('about.policies', compact('policies', $policies));
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

            'policy_file' => 'required',
            'policy_file.*' => 'mimes:doc,pdf,docx,zip'

            ]);

            $policy_file = $request->policy_file;
            $policy_file_new_name = time().$policy_file->getClientOriginalName();
            $policy_file->move('policies/', $policy_file_new_name);
    
            $policy_file = Policy::create([
                'policy_file' => 'policies/' . $policy_file_new_name,
            ]);
            $policy_file->save();

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
