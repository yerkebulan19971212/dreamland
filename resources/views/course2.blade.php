<!DOCTYPE html>
<!-- saved from url=(0043)https://gscstudy.kz/country/canada?type=vuz -->
<html lang="ru"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Обучение в Канаде из Астаны и Казахстана - GSC. </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://gscstudy.kz/favicon.png">
    <link rel="stylesheet" href="{{asset('css/base_style.css')}}">

    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://ws.tildacdn.com/project836547/tilda-blocks-2.12.css?t=1616509495" type="text/css" media="all" />


</head>
<body>
@include('layout.header')

<div class="head-second-page" style="background-image: url(https://gscstudy.kz/img/universities/de68d55d91e4043c03a3e72908c607a0.jpg);margin-top:60px">
    <div class="container">
        <h1 class="second-page-title">{{$cp->program->name}} {{$cp->country->name}}</h1>
    </div>
</div>
<div class="section section--nobot">
    <div class="container">
        <div class="static-info сountry-info">
            <p style="text-align: justify;">{{$cp->description}}</p>
            <h2>Университеты {{$cp->country->name}}</h2>
        </div>
    </div>
</div>
<div class="section section--no">
    <div class="container">
        <ul class="card-list card-list--full price-list">
            @foreach($cpc as $c)
                <li>
                    <div class="card-item card-item--full way way--active" style="background-image: url({{asset($c->course->image)}});">
                        <div class="card-item__top">
                            <div class="card-item__left">
                                <div class="card-item__title">{{$c->course->name}}</div>
                                <div class="card-item__des">
                                    {{$c->course->description}}								</div>
                            </div>
                            <div class="card-item__right">
                                <div class="card-item__price">
                                    <div class="card-item__price_title">
                                        Cтоимость за год:
                                    </div>
                                    <div class="card-item__price_sum">
                                        CAD $ 21,815 									</div>
                                </div>
                                <div class="card-item__price">
                                    <div class="card-item__price_title">
                                        Программа:
                                    </div>
                                    <div class="card-item__price_sum">
                                        Pre-Master's Programs, Pathway, Бакалавриат 									</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item-bottom">
                            <a href="http://127.0.0.1:8000/coursesdetail" class="read-more">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@include('layout.footer')
</body></html>
