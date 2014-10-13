@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="post-preview">
            <h2 class="post-title">
                    {{$post->title}}
            </h2>
            <p class="post-subtitle">
                {{$post->content}}
            </p>
            @include('blog._post-meta')
        </div>
        @include('blog.actions')
    </div>
@stop