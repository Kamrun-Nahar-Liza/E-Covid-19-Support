<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Post;
use Auth;
use Validator;

class PostController extends Controller
{
    
    public function index()
    {
        $data=[];
        $data['posts'] = Post::with('country','user')->select('id','title', 'symptoms' ,'content','user_id','country_id','status')->get();

        return view('post.index', $data);
    }

    
    public function create()
    {   
        $data=[];
        $data['countries']=Country::select('id','name','code','created_at')->get();
        return view('post.create',$data);
    }

    
    public function store(Request $request)
    {
        //validation

        $rules= [
            'title' => 'required',
            'symptoms' => 'required',
            'content' => 'required',
            'status' => 'required',
            'country_id' => 'required'
   
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database insert

        Post::create([

            'title' => $request->input('title'),
            'symptoms' => $request->input('symptoms'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
            'country_id' => $request->input('country_id'),
            'user_id' => auth()->user()->id
        ]);

        //redirect

        session()->flash('message','Recovery Post Added Successfully');
        session()->flash('type','success');
        return redirect()->route('posts.create');
    }

    
    public function show($id)
    {
        $data=[];
        $data['post'] = Post::with('country','user')->select('id','title', 'symptoms' ,'content','user_id','country_id','status','created_at')->find($id);
        
        return view('post.show', $data);
    }

    
    public function edit($id)
    {
        $data=[];
        $data['post'] = Post::with('country','user')->select('id','title', 'symptoms' ,'content','user_id','country_id','status','created_at')->find($id);
        $data['countries']=Country::select('id','name','code','created_at')->get();
        return view('post.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        //validation

        $rules= [
            'title' => 'required',
            'symptoms' => 'required',
            'content' => 'required',
            'status' => 'required',
            'country_id' => 'required'
           
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //database update

        $post = Post::find($id);

        $post->update([

            'title' => $request->input('title'),
            'symptoms' => $request->input('symptoms'),
            'content' => $request->input('content'),
            'country_id' => $request->input('country_id'),
            'status' => $request->input('status')
        ]);

        //redirect

        session()->flash('message','post has been updated');
        session()->flash('type','success');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        //redirect

        session()->flash('message','Post deleted');
        session()->flash('type','danger');
        return redirect()->route('posts.index');
    }

    //search option code

    public function searchboard()
      {
          $data=[];
          return view('search.searchboard' , $data);
      }

    public function search(Request $request){
                 
        $user_id = Auth::user()->id;
        
        $keyword = $request->input('search');
        $posts = Post::where('symptoms', 'LIKE' , '%'.$keyword.'%')->get();
        return view('search.searchposts' , ['posts' => $posts]);
      }
  
      

}
