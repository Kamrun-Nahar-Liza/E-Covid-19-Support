<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\PlasmaPost;
use App\PlasmaComment;
use Auth;
use DB;
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

                        $comments = DB::table('users')
                                ->join('plasma_comments', 'users.id', '=', 'plasma_comments.user_id')
                                ->join('plasma_posts' ,'plasma_comments.plasma_post_id' ,'=', 'plasma_posts.id')
                                ->select('users.name', 'plasma_comments.*')
                                ->where(['plasma_posts.id' => $id])
                                ->get();
        
        return view('plasmapost.show',['comments' => $comments], $data);
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


    //plasma post comment

    public function comment(Request $request, $plasma_post_id)
    
    {
        $this->validate($request, [
        'plasma_comment' => 'required'
          ]);

        $comment = new PlasmaComment;
        $comment->user_id = Auth::user()->id;
        $comment->plasma_post_id = $plasma_post_id;
        $comment->plasma_comment = $request->input('plasma_comment');
        $comment->save();
        
        return redirect()->back()->with('response', 'Comment added successfully');

      }
  
      public function delete($id)
      {
          $comment = PlasmaComment::find($id);
          $comment->delete();
  
          //redirect
         return redirect()->back()->with('response', 'Comment added successfully');
      }


}
