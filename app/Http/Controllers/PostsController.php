<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;


class PostsController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth')->except(['index','show']);

   }

public function index()
    {
        $posts = Post::latest();
        if ($month = request('month')){

            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')){

            $posts->whereYear('created_at', $year);
        }

            $posts = $posts->get();

        return view('/posts.index', compact('posts'));
    }

public function create()
    {


        return view('/posts.create');
    }

    
public function store()
    {
        //validate input
        $this->validate(request(),[
            "title"=>"required",
            "body"=>"required"
        ]);
        //create a new post and save to database
        Post::create([
            'title'=> request('title'),
            'body'=> request('body'),
            'user_id'=> auth()->id()
            ]);
        
        //redirect to the homepage
       return  redirect('/'); 
    }

    
public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    
public function edit($id)
    {
        //
    }

    
public function update(Request $request, $id)
    {
        //
    }

   
public function destroy($id)
    {
        //
    }
}
