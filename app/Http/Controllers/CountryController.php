<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Validator;

class CountryController extends Controller
{
    
    public function index()
    {
        $data = [];
        $data['countries'] = Country::select('id','name','code','created_at')->get();
        
        return view('country.index' ,$data);
        
    }

    
    public function create()
    {
        return view('country.create');
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'name' => 'required|unique:countries,name',
            'code' => 'required|unique:countries,name'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        Country::create([

            'name' => $request->input('name'),
            'code' => $request->input('code')
        ]);

        //redirect

        session()->flash('message','Country Details Added Successfully');
        session()->flash('type','success');
        return redirect()->route('countries.create');
    }

    
    public function show($id)
    {
        $data = [];
        $data['country'] = Country::with('posts')
                            ->select('id','name','code','created_at')
                            ->find($id);

        return view('country.show' ,$data);
    }

    
    public function edit($id)
    {
        $data = [];
        $data['country'] = Country::select('id','name','code','created_at')->find($id);
        
        return view('country.edit' ,$data);
    }

    
    public function update(Request $request, $id)
    {
        //validation

        $rules= [
            'name' => 'required|unique:countries,name,'.$id,
            'code' => 'required|unique:countries,code,'.$id
           
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database update

        $country = Country::find($id);

        $country->update([

            'name' => $request->input('name'),
            'code' => $request->input('code')
        ]);

        //redirect

        session()->flash('message','Country Details has been updated');
        session()->flash('type','success');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();

        //redirect

        session()->flash('message','Country Details deleted');
        session()->flash('type','danger');
        return redirect()->route('countries.index');
    }
}
