<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Validator;
use App\Comment;
use App\Country;
use App\Like;
use App\Dislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        
        
    //   $post = Post::with('country','user')->where('id', '=', $post_id)->get();
    //   $likePost= Post::find($post_id);
    //   $likeCtr  = Like::where(['post_id' => $likePost->id])->count();
    //   $dislikeCtr  = DisLike::where(['post_id' => $likePost->id])->count();

        $likePost= Post::find($id);
        $likeCtr  = Like::where(['post_id' => $likePost->id])->count();
        $dislikeCtr  = DisLike::where(['post_id' => $likePost->id])->count();

      

        $comments = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.user_id')
            ->join('posts' ,'comments.post_id' ,'=', 'posts.id')
            ->select('users.name', 'comments.*')
            ->where(['posts.id' => $id])
            ->get();


            return view('post.show',['comments' => $comments , 'likePost' => 'likePost', 'likeCtr' => $likeCtr ,'dislikeCtr' => $dislikeCtr], $data);
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

      //comment code

      public function comment(Request $request, $post_id){

        $this->validate($request, [
        'comment' => 'required'
          ]);

        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post_id;
        $comment->comment = $request->input('comment');
        $comment->save();
        
        return redirect()->back()->with('response', 'Comment added successfully');
      }
  
      public function delete($id)
      {
          $comment = Comment::find($id);
          $comment->delete();
  
          //redirect
         return redirect()->back()->with('response', 'Comment added successfully');
      }


      //Like

      public function like($id){
        $loggedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id' => $loggedin_user , 'post_id' => $id])->first();
          if(empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $post_id = $id;
            $like = new Like;
            $like->user_id= $user_id;
            $like->email= $email;
            $like->post_id= $post_id;
            $like->save();
            return redirect("/posts/{$id}");
          }
  
          else{
            return redirect("/posts/{$id}");
          }
      }

      //dislike

      public function dislike($id){
        $loggedin_user = Auth::user()->id;
        $like_user = Dislike::where(['user_id' => $loggedin_user , 'post_id' => $id])->first();
          if(empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $post_id = $id;
            $like = new Dislike;
            $like->user_id= $user_id;
            $like->email= $email;
            $like->post_id= $post_id;
            $like->save();
            return redirect("/posts/{$id}");
          }
  
          else{
            return redirect("/posts/{$id}");
          }
      }
  
      

}
