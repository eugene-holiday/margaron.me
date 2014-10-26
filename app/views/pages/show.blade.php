@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="post-preview">
            <h2 class="post-title">
                {{$page->title}}
            </h2>
            @include('pages.actions')
            <p class="post-subtitle">
                {{$page->content}}
            </p>
        </div>
    </div>
@stop