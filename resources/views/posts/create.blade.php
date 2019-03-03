@extends('layouts.master')

@section('content')

<div class="container">

      <div class="row">

        <div class="col-md-8 col-lg-8 col-sm-3">

          <h1 class="text-black">Create a Post</h1><br>	
		<form action="/post" method="Post">
             @include('includes.errors')
            {{ csrf_field() }}
    		<div class="form-group">
    			<label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Enter your blog title">
    		</div>
    		<div class="form-group">
                <label for="body">Body:</label>
                <textarea type="text" name="body" class="form-control" placeholder="Write Here" ></textarea> 
    		</div>
    		
    		<div class="form-group">
    			<button type="submit" name="submit" class="btn btn-primary">Publish</button>
    		</div>
		</form>


        </div>


@endsection
