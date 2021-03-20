<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\PlasmaProfile;
use App\PlasmaRequest;
use App\User;

class PlasmaRequestController extends Controller
{
    
    public function index()
    {
        $data=[];
        $data['plasmarequests'] = PlasmaRequest::with('user')->select('id','user_id', 'plasma_profile_id', 'blood_group','location','phone','message','first_name','last_name','country','status')->get();

        return view('plasmarequest.index',$data);
    }

    
    public function create()
    {
        
        return view('plasmarequest.create');
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'location' => 'required',
            'phone' => 'required',
            'blood_group' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'message' => 'required'
   
        ];

        // $Plasmaprofile = PlasmaProfile::find($id);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        PlasmaRequest::create([

            'location' => $request->input('location'),
            'phone' => $request->input('phone'),
            'blood_group' => $request->input('blood_group'),
            'message' => $request->input('message'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'country' => $request->input('country'),
            'plasma_profile_id' => $request->input('plasma_profile_id'),
            'user_id' => auth()->user()->id
        ]);

        //redirect

        session()->flash('message','Request Added Successfully');
        session()->flash('type','success');
        return redirect()->route('plasmarequests.index');
    }

    
    public function show($id)
    {
        $data=[];
        $data = PlasmaProfile::find($id);
        

        return view('plasmarequest.create', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $plasma = PlasmaProfile::find($id);
         $user  = User:: all();
         return view('plasmarequest.create', compact('plasma', 'id','user'));
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

    public function receive(){

        $data=[];
        $data['plasmarequests'] = PlasmaRequest::with('user')->select('id','user_id', 'plasma_profile_id', 'blood_group','location','phone','message','first_name','last_name','country','status')->get();

        return view('plasmarequest.receive',$data);
    }


    
    public function Accept(Request $request)
    {
        $id = $request->id;
        $user = PlasmaRequest::find($id);
        $user->status = '1';
        $user->save();
    }

  public function Pending(Request $request)
    {
        $id = $request->id;
        $user = PlasmaRequest::find($id);
        $user->status = '0';
        $user->save();
    }


}
