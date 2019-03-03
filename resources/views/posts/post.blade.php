<div class="blog-post">
            <h3 class="blog-post-title">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h3>
			<p>{{$post->body}}</p>
            <p class="blog-post-meta">
            
            {{$post->created_at->toFormattedDateString()}}<a href="#"> By {{$post->user->name}}</a></p>

</div>
