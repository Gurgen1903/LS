<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('js/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" />

    <title>Document</title>
</head>
<body>
<div class="cont">
    <div class="row logo_header_margin">
        <div class="logo_header col s12 center">
            <img src="{{url('imgs/logo_header.png')}}" alt="">
        </div>
    </div>

    <div class="row header_home">
        <div class="meny_header_own col s12">
            <ul class="left_header_menu ">
                <li><a href="#"> Search</a></li>
                <li class="dropdown">
                    <a href="#"class="dropbtn" >USD</a>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li class="dropdown"><a href="#" >English</a></li>

            </ul>
            <ul class="center_header_menu ">
                <div class="border_top_header_center">
                    <li><a href="#">Man</a></li>
                    <li><a href="#">Woman</a></li>
                    <li class=""><a href="#">Children</a></li>
                    <li class=""><a href="#">Sale</a></li>
                    <li class=""><a href="#">Shoes</a></li>
                </div>
            </ul>
            <ul class="right_header_menu ">
                <li><a href="sass.html">Sign In</a></li>
                <li><a href="badges.html">Cart</a></li>
                <li class=""><a href="#">Wish list</a></li>
            </ul>
        </div>
    </div>
        <ul class="bxslider">
            <li><img src="{{url('/imgs/sliderImg/1.png' )}}"/></li>
            <li><img src="{{url('/imgs/sliderImg/3.png' )}}" /></li>
            <li><img src="{{url('/imgs/sliderImg/9.png' )}}" /></li>
            <li><img src="{{url('/imgs/sliderImg/16.png' )}}"/></li>
            <li><img src="{{url('/imgs/sliderImg/17.png' )}}"/></li>
        </ul>


</div>
<script src="{{ url('js/jquery-1.11.2.min.js') }}"></script>

<script src="{{ url('materialize/js/materialize.min.js') }}"></script>
<script src="{{ url('js/bxslider/jquery.bxslider.js') }}"></script>


<script src="{{ url('js/script.js') }}"></script>
</body>
</html>