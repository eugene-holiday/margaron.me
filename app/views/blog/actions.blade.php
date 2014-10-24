@if(Auth::check())
<div class="actions btn-group">
    <div class="pull-left">
        <a href="{{URL::route('blog.edit',[$post->id])}}">
            <button type="button submit" class="btn btn-default">
                <span class="glyphicon glyphicon-pencil"></span>
            </button>
        </a>
    </div>
    <div class="pull-left">
        {{ Form::open(array('url' => 'blog/' . $post->id, 'class' => '')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array('type' => 'button submit', 'class' => 'btn btn-default'))}}
        {{ Form::close() }}
    </div>

<!--    <span class="glyphicon glyphicon-pencil"></span>-->
<!--    <span id="delete-{{$post->id}}" class="glyphicon glyphicon-trash deleteAjax"></span>-->
</div>

<script type="text/javascript">
    $('.deleteAjax').click(function(e) {
        var id = this.id.split('-')[1];
        $.ajax({
            url: '/blog/'+id,
            type: 'POST',
            data: '_method=DELETE',
            success: function(result) {
                // Do something with the result
            }
        });
        console.log(id);
    });
</script>

@endif

