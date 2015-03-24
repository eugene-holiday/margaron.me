@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>Edit {{ $post->id }} post</h1>
        <form method="post" class="form-blog" action="{{URL::route('blog.update', [$post->id])}}">
            <input name="_method" type="hidden" value="put"/>
            <input type="hidden" value="{{csrf_token()}}" name="_token"/>
            <div class="form-group">
                <input type="text" name="title" class="form-control"  placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <textarea name="intro" class="form-control"  placeholder="Intro">{{$post->intro}}</textarea>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control"  placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <div class="editable" contenteditable="false"></div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>

            <script>
                var input = $('textarea')[1];
                $('.editable').html(input.value);

                input.oninput = function() {
                    $('.editable').html(input.value);
                    $('pre code').each(function(i, block) {
                        hljs.highlightBlock(block);
                    });
                }


            </script>

        </form>
    </div>
@stop