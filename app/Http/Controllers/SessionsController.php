<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
class SessionsController extends Controller
{
    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    
    public function create()
    {
        $archives = Post::SelectRaw('year(created_at)year,monthname(created_at)month,
        count(*) published ')
        
        ->groupBy('year','month')

        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
        return view('sessions.create',compact('archives'));  
    }
 
    
// public function store(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             // Authentication passed...
//             return redirect()->home();
//         }
//     }

    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))) {

            return back()->withErrors([
                'message'=> "login not successful"
            ]);
        }

        return redirect()->home();
    }



    
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
