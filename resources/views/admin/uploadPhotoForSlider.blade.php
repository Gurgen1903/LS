@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col s12 center">
            <h3>Add Photo For Slider</h3>
        </div>
    </div>
    <div class="row">
        <form action="{{url('/admin/upload-photo')}}" method="POST" class="col s2 center" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="filefield">
                </div>
                <div class="file-path-wrapper">
                    <input class=""  type="text">
                </div>
            </div>
            <div class="sendPhotoToUpload">
                <input type="submit"  class="waves-effect waves-light btn">
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col s12">
                @foreach($data as $val)
                <div class="col s2 img_for_bsSL">

                <div class="img_for_position">
                        <div class="delete_photo_slider">
                            <a href="{{url('/admin/delete-photo-slider/').'/'.$val->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                        <img src='{{asset('imgs/uploads/sliderImg/')."/".$val->img_name}}' alt="">
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection