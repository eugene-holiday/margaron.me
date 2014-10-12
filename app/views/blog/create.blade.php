@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>Create new post</h1>
        <form method="post" class="form-blog" action="{{URL::route('blog.store')}}">

            <input type="hidden" value="{{csrf_token()}}" name="_token"/>
            <div class="form-group">
                <input type="text" name="title" class="form-control"  placeholder="Title">
            </div>
            <div class="form-group">
                <textarea name="intro" class="form-control"  placeholder="Intro"></textarea>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control"  placeholder="Content"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Create">
            </div>

        </form>
    </div>
@stop