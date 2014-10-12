@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="profile">
            <h2 class="profile-title">
                {{$profile->login}} profile
            </h2>
            <div class="profile">
                <table class="table">
                    <tr>
                        <td class="active">Login</td>
                        <td class="success">{{$profile->login}}</td>
                    </tr>
                    <tr>
                        <td class="active">Created</td>
                        <td class="success">{{$profile->created_at}}</td>
                    </tr>
                </table>
            </div>
            <div class="actions btn-group">
                <div class="pull-left">
                    <a href="{{URL::to('profile/edit')}}">
                        <button type="button submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop