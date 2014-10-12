@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @foreach(Blog::all() as $blog)
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    {{$blog->title}}
                </h2>
            </a>
            <p class="post-subtitle">
                {{$blog->content}}
            </p>
            <p class="post-meta">Posted by <a href="#">randomwica</a> on {{$blog->created_at}}</p>
        </div>
    @endforeach

@stop