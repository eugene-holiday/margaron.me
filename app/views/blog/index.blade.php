@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @foreach($posts as $post)
    <div class="post-preview">
        <a href="{{URL::action('blog.show',[$post->id])}}">
            <h2 class="post-title">
                {{$post->title}}
            </h2>
        </a>
        @include('blog.actions')
        <p class="post-subtitle">
            {{$post->intro}}
        </p>
        @include('blog._post-meta')
    </div>
    @endforeach
</div>
    @stop