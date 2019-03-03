<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    
    public function create()
    {
        return view('sessions.create');  
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
