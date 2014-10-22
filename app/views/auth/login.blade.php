@section('content')
    @if(Session::has('error'))
        {{Session::get('error')}}
    @endif

    {{Form::open(['route'=>'doAuth', 'class'=>'form-signin'])}}
        <!--<form method="post" class="form-signin" action="{{URL::route('doAuth')}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token"/>-->

        <div class="form-group">
            {{Form::input('text','login',null, ['placeholder'=>'Login', 'class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::input('password','password',null, ['placeholder'=>'Password', 'class'=>'form-control'])}}
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
            {{Form::submit('Sign in', ['class'=>'btn btn-default'])}}
        </div>

    {{Form::close()}}
@stop