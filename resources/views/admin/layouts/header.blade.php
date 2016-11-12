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
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin.css') }}" />

    <title>Document</title>
</head>
<body>



<header data-base_url="{{url('/')}}">
    <ul id="staggered-list" class="side-nav fixed grey darken-4 blue-grey-text text-lighten-4 go">

        <div style="text-align:center;" id="profilepic">
            Admin
        </div>
        <li><a  class="grey-text text-lighten-2" href="{{url('/admin/add-photo')}}">Добавить фото в слайдер</a></li>
        <li><a id="links" class="pink-text lighten-2" href="{{url('/admin/category')}}">Категории</a></li>
        <li><a id="links" class="green-text text-lighten-2" href="#"><i class="fa fa-bar-chart fa-2x fa-fw"></i>Skills</a></li>
        <li><a id="links" class="yellow-text text-lighten-2" href="#"><i class="fa fa-graduation-cap fa-2x fa-fw"></i>Education</a></li>
        <li><a id="links"class="blue-text text-lighten-2" href="#"><i class="fa fa-code fa-2x fa-fw"></i>Source Codes</a></li>
    </ul>
</header>
