<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationsController extends Controller
{
    
    public function index()
    {
        // 
    }

    
    public function create()
    {
        return view('registrations.create');
    }

    
    public function store()
    {
        //validate the form
        $this->validate(request(),[
            'name'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:4', 'confirmed'],
        ]);
//create and save the user
       // $user =User::create(request(['name', 'email', 'password']));

       $user =User::create([
           'name'=>request('name'), 
           'email'=>request('email'), 
           'password'=>Hash::make(request('password'))
           ]);

        //sign in the user
        auth()->login($user);

        //redirect to the homepage
         return redirect()->home();
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
