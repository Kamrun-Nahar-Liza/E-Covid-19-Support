<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\PlasmaPost;
use Auth;
use Validator;

class PlasmaPostController extends Controller
{
    
    public function index()
    {
        $data=[];
        $data['plasmaposts'] = PlasmaPost::with('country','user')
                                ->select('id','title', 'content' ,'blood_group','user_id','country_id')
                                ->get();

        return view('plasmapost.index', $data);
    }

    
    public function create()
    {   
        return view('plasmapost.create',[
            'countries' => Country::all()
        ]);
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'title' => 'required',
            'content' => 'required',
            'blood_group' => 'required',
            'country_id' => 'required'
   
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        PlasmaPost::create([

            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'blood_group' => $request->input('blood_group'),
            'country_id' => $request->input('country_id'),
            'user_id' => auth()->user()->id
        ]);

        //redirect

        session()->flash('message','Recovery Post Added Successfully');
        session()->flash('type','success');
        return redirect()->route('plasmaposts.create');
    }

    
    public function show($id)
    {
        $data=[];
        $data['plasmapost'] = PlasmaPost::with('country','user')
                                ->select('id','title', 'content' ,'blood_group','user_id','country_id','created_at')
                                ->find($id);
        
        return view('plasmapost.show', $data);
    }

    
    public function edit($id)
    {
        $data=[];
        $data['plasmapost'] = PlasmaPost::with('country','user')->select('id','title', 'content' ,'blood_group','user_id','country_id','created_at')->find($id);
        $data['countries']=Country::select('id','name','code','created_at')->get();
        return view('plasmapost.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        //validation

        $rules= [
            'title' => 'required',
            'content' => 'required',
            'blood_group' => 'required',
            'country_id' => 'required'
           
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database update

        $plasmapost = PlasmaPost::find($id);

        $plasmapost->update([

            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'country_id' => $request->input('country_id'),
            'blood_group' => $request->input('blood_group')
        ]);

        //redirect

        session()->flash('message','Plasma post has been updated');
        session()->flash('type','success');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $plasmapost = PlasmaPost::find($id);
        $plasmapost->delete();

        //redirect

        session()->flash('message','PlasmaPost deleted');
        session()->flash('type','danger');
        return redirect()->route('plasmaposts.index');
    }
}
