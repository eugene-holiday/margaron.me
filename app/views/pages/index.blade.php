@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="actions btn-group ">
            <div class="pull-left">
              <a href="{{URL::route('pages.create')}}">
                  <button type="button submit" class="btn btn-default">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
              </a>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($pages as $page)
            <div class="post-preview">
                <a href="{{URL::action('pages.show',[$page->slug])}}">
                    <h2 class="post-title">
                        /{{$page->slug}}
                    </h2>
                </a>
                @include('pages.actions')
                <p class="post-subtitle">
                    {{$page->title}}
                </p>
            </div>
        @endforeach
    </div>
@stop