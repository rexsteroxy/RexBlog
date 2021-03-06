<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    
public function index()
    {
        //
    }

    
public function create()
    {
         
    }

    
    public function store(Post $post)
    {
        $this->validate(request(),[
            "body"=> "required|min:2"
        ]);

        Comment::create([
             "body"=> request('body'),
            "post_id"=>$post->id,
            "user_id"=>$post->user->id
    ]);
        //$post->addComments(request('body'));
       

        return back();
    }

    
    public function show($id)
    {
        //
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
