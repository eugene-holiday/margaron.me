@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>Edit {{ $profile->login }} profile</h1>
        <form method="post" class="form-blog" action="{{URL::to('profile/update')}}">
            <input name="_method" type="hidden" value="put"/>
            <input type="hidden" value="{{csrf_token()}}" name="_token"/>
            <div class="form-group">
                <input type="text" id="disabledInput" name="login" class="form-control"  placeholder="Login" value="{{$profile->login}}" disabled>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control"  placeholder="Password" value="{{$profile->password}}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>

        </form>
    </div>

@stop