
@if (count($errors->all()) > 0)
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	Please check the form below for errors
	@foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Success</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	{{ $message }}
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Warning</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Info</h4>
	{{ $message }}
</div>
@endif