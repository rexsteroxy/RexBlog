
@extends('layouts.master')

@section('content')
<div class="container">

      <div class="row">

        <div class="col-md-8 col-lg-8 col-sm-3">

	<h1>{{ $post->title }}</h1>

			{{ $post->body }}

			<div class="comments">
				<ul class=" list-group">
					  
					@foreach ($post->comments as $comment)

					<li class="list-group-item">

						<strong>
						{{ $comment->created_at->diffForHumans()}}:&nbsp

						</strong>

						{{ $comment->body }}


					</li>
					@endforeach
				</ul>
				
			</div>
		
			<div class="card">
				<div class="card-block">
					<form action="/posts/{{$post->id}}/comments" method="Post">

            		 @include('includes.errors')
            		{{ csrf_field() }}
    		
    					<div class="form-group">
                				<textarea type="text" name="body" class="form-control" placeholder="Write Here" required></textarea> 
    					</div>
    		
    					<div class="form-group">
    						<button type="submit" name="submit" class="btn btn-primary">Add Comment</button>
    					</div>
				</form>
		</div>
	</div>
</div>
	
@endsection