@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
    <h1>Sign In</h1>
    @include('includes.errors')
    <form action="/login" method="Post">
        {{ csrf_field() }}
    		
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
    			<button type="submit" name="submit" class="btn btn-primary">Sign In</button>
    		</div>
		</form>
</div>

@endsection