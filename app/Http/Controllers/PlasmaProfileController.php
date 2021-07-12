<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\PlasmaProfile;
use App\PlasmaRequest;
use Illuminate\Http\Request;

class PlasmaProfileController extends Controller
{
    
    public function index()
    {
        $data=[];
        $data['plasmaprofiles'] = PlasmaProfile::select('id','profile_pic', 'first_name', 'last_name','blood_group','area','phone','country', 'address')->get();

        return view('plasmaprofile.index',$data);
    }

    
    public function create()
    {
        return view('plasmaprofile.create');
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            //'profile_pic' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'blood_group' => 'required',
            'area' => 'required',
            'phone' => 'required',
            'country' => 'required'
            //'address' => 'required'
   
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        $plasmaprofile = new PlasmaProfile;
        $plasmaprofile->first_name = $request->input('first_name');
        $plasmaprofile->last_name = $request->input('last_name');
        $plasmaprofile->blood_group = $request->input('blood_group');
        $plasmaprofile->phone = $request->input('phone');
        $plasmaprofile->country = $request->input('country');
        $plasmaprofile->area = $request->input('area'); 
        $plasmaprofile->address = $request->input('address');
        $plasmaprofile->user_id = auth()->user()->id; 
              
         if($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/plasmadonor/', $filename);
            $plasmaprofile->profile_pic = $filename;

        }      
        $plasmaprofile->save();

        return redirect('/plasmaprofiles');
    }

    
    public function show($id)
    {
        $data=[];
        $data = PlasmaProfile::find($id);
        $plasmarequests= PlasmaRequest::find($id);
        return view('plasmaprofile.show', compact('data', 'plasmarequests'));
    }

    
    public function edit($id)
    {
        $plasmaprofile = PlasmaProfile::find($id);
        return view('plasmaprofile.edit', compact('plasmaprofile'));
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
            
            'first_name' => 'required',
            'last_name' => 'required',
            'blood_group' => 'required',
            'area' => 'required',
            // 'address' => 'required',
            'phone' => 'required',
            'country' => 'required'

        ]);

        $plasmaprofile = PlasmaProfile::find($id);
        $plasmaprofile->first_name = $request->get('first_name');
        $plasmaprofile->last_name = $request->input('last_name');
        $plasmaprofile->blood_group = $request->input('blood_group');
        $plasmaprofile->area = $request->input('area');
        $plasmaprofile->address = $request->input('address');
        $plasmaprofile->phone = $request->input('phone');
        $plasmaprofile->country = $request->input('country');

        $plasmaprofile->user_id = auth()->user()->id;
        if($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/doctor/', $filename);
            $plasmaprofile->profile_pic = $filename;

        }           
        $plasmaprofile->save();

        return redirect('/plasmaprofiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plasmaprofile = PlasmaProfile::find($id);
        $plasmaprofile->delete();

        //redirect
        return redirect()->route('plasmaprofiles.index');
    }

    // view detail info of donor for patient

    public function donorinfo($id)
    {
        //$data=[];
        $data = PlasmaProfile::find($id);
        $plasmarequests= PlasmaRequest::find($id);
        return view('plasmaprofile.donorinfo', compact('data', 'plasmarequests'));
    }


}
