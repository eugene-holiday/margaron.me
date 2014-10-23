@section('content')

    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>Create new page</h1>
        {{Form::open(array('route'=>array('pages.create'),'method'=>'PUT','files'=>true))}}
        {{Form::close()}}
        <form method="post" class="form" action="{{URL::route('pages.store')}}"  enctype="multipart/form-data" >
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
                <div class="editable" contenteditable="false"></div>
            </div>

            <div class="form-group">
                <input name="files[]" type="file" id="uploader" multiple>
                <div id="preview"></div>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Create">
            </div>

        </form>


        <script>
            var input = $('textarea')[1];
            $('.editable').html(input.value);

            input.oninput = function() {
                $('.editable').html(input.value);
            }

            function preview(input) {
                var preview = $('#preview').show();
                var box = $('<div class="box"></div>');
                    for (var i = 0; i < input.files.length; i++){
                        var reader = new FileReader();
                        //console.log(input.files);
                        reader.onload = function (event) {
                            currentBox = box.clone();
                            $(new Image()).attr('src', event.target.result).appendTo(currentBox);
                            currentBox.appendTo(preview);

                        }

                        reader.readAsDataURL(input.files[i]);
                    }
            }


            $("#uploader").change(function(){
                preview(this);
                //console.log(this);
            });
        </script>
    </div>
@stop