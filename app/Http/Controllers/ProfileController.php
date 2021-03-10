<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    
    public function index()
    {
        $data=[];
        $data['profiles'] = Profile::select('id','profile_pic', 'first_name', 'last_name','department','designation','phone','country')->get();

        return view('profile.index',$data);
    }

    
    public function create()
    {
        return view('profile.create');
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'profile_pic' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'country' => 'required'
   
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        $profile = new Profile;
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->department = $request->input('department');
        $profile->phone = $request->input('phone');
        $profile->country = $request->input('country');
        $profile->designation = $request->input('designation');  
        $profile->user_id = auth()->user()->id; 
              
         if($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/doctor/', $filename);
            $profile->profile_pic = $filename;

        }      
        $profile->save();

        return redirect('/profiles');
    }

    
    public function show($id)
    {
        $data=[];
        $data = Profile::find($id);

        return view('profile.show', compact('data'));
    }

    
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'first_name' => 'required',
            'last_name' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'country' => 'required'

        ]);

        $profile = Profile::find($id);
        $profile->first_name = $request->get('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->department = $request->input('department');
        $profile->designation = $request->input('designation');
        $profile->phone = $request->input('phone');
        $profile->country = $request->input('country');

        $profile->user_id = auth()->user()->id;
        if($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/doctor/', $filename);
            $profile->profile_pic = $filename;

        }           
        $profile->save();

        return redirect('/profiles');
    }

    
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();

        //redirect
        return redirect()->route('profiles.index');
    }
}
