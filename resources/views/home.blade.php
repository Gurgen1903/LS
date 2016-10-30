@extends('main')
@section('content')
    <div class="slider_bx_home">
        <ul class="bxslider">
            @foreach($data as $val)
                <li><img src='{{asset('imgs/uploads/sliderImg/')."/".$val->img_name}}' alt=""></li>
            @endforeach
        </ul>
    </div>


@endsection