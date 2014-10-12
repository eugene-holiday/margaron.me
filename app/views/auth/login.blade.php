@section('content')
    @if(Session::has('error'))
        {{Session::get('error')}}
    @endif
    <form method="post" class="form-signin" action="{{URL::route('doAuth')}}">

        <input type="hidden" value="{{csrf_token()}}" name="_token"/>
        <div class="form-group">
            <input type="text" name="login" class="form-control"  placeholder="Login">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control"  placeholder="Password">
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="Sign in">
        </div>

    </form>
@stop