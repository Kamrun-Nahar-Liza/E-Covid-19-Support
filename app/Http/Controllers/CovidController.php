<?php

namespace App\Http\Controllers;

use App\Covid;
use Illuminate\Http\Request;
use Validator;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $data['covids'] = Covid::all();

        return view('covid.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('covid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validation

       $rules= [
        'infect' => 'required',
        'death' => 'required',
        'cure' => 'required',
        'test' => 'required'
    

    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    //database insert

    Covid::create([

        'infect' => $request->input('infect'),
        'death' => $request->input('death'),
        'cure' => $request->input('cure'),
        'test' => $request->input('test')
    ]);

    //redirect

    session()->flash('message','Covid Update Added');
    session()->flash('type','success');
    return redirect()->route('covid.create');
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
        $data=[];
        $data['covid'] = Covid::select('id','infect', 'cure', 'death','test')->find($id);
        
        return view('covid.edit', $data);
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
        //validation

        $rules= [
            'infect' => 'required',
        'death' => 'required',
        'cure' => 'required',
        'test' => 'required'
           
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database update

        $covid = Covid::find($id);

        $covid->update([

        'infect' => $request->input('infect'),
        'death' => $request->input('death'),
        'cure' => $request->input('cure'),
        'test' => $request->input('test')

        ]);

        //redirect

        session()->flash('message','Covid report has been updated');
        session()->flash('type','success');
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
        //
    }
}
