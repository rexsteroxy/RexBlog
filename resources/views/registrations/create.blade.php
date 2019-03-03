@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main"> 
    <h1>Register</h1>
    @include('includes.errors')
    <form  method="Post" action="/register">
    {{ csrf_field() }}
    		<div class="form-group">
    			<label for="title">Name:</label>
                <input type="text" name="name" 
                class="form-control" required placeholder="Enter your name">
    		</div>
    		<div class="form-group">
    			<label for="title">Email:</label>
                <input type="email" name="email" 
                class="form-control" required placeholder="Enter your email">
    		</div>
            <div class="form-group">
    			<label for="title">Password:</label>
                <input type="password" name="password" 
                class="form-control" required placeholder="Enter your Password">
    		</div>
            
            <div class="form-group">
    			<label for="title">Password Confirmation:</label>
                <input type="password" name="password_confirmation" 
                class="form-control" required placeholder="Confirm Password">
    		</div>
    		
    		<div class="form-group">
    			<button type="submit" name="submit" class="btn btn-primary">Register</button>
    		</div>
		</form>
</div>

@endsection