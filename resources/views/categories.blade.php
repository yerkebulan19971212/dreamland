<!DOCTYPE html>
<!-- saved from url=(0022)https://www.ef.kz/#UNI -->
<html class=" mkt-kz   -no-header-shadow-page " data-react-helmet="class">

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/base_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    <title>Dreamland</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://ws.tildacdn.com/project836547/tilda-blocks-2.12.css?t=1616509495" type="text/css" media="all" />
    <link data-react-helmet="true" rel="icon" type="image/png" href="https://www.ef.kz/assetscdn/WIBIwq6RdJvcD9bc8RMd/central-media/common/favicon-48.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--    <link rel="stylesheet" href="{{asset('boot')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">

    <style>
        img:not([src]){
            visibility: visible!important;
        }
        .navbar-light .navbar-toggler{
            border-color: #fff;
        }
    </style>
</head>

<body class="--site-container-small message-banner-visible">
<div id="funneling-root" class="funneling-site main-wrapper">
    <main id="omnidiv-funneling-site">
        <div id="___gatsby">
            <div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
                <div id="app" data-info-date="1-26-2021-3-42-23 PM">
                    <div class="wrapper">
                        <div id="cefcom-globalheader" data-clickregion="global-header" data-version="1.1.6" class="cefcom-global-header-wrapper">
                            <div data-clicksubregion="topbar" class="cefcom-top-bar --react" style="padding-right:0px;margin-right:0px">
                                <div class="cefcom-top-bar__wrapper">
                                    @include('layout.header')
                                </div>
                            </div>
                        </div>
                        <div style="display: block;">
                            <section id="omnidiv-program-cards" class="ef-section rendering__program-cards">
                                <div class="header_img" style="background-image:url({{asset($name->program->image)}}); position: relative">
                                    <div style="position: absolute;bottom: -31px;width: 100%;text-align: center;">
                                        <h2 class="program-cards__header-title" style="width: 350px;
    text-align: center;
    background: #fff;
    padding: 10px;
    border-radius: 11px;
    box-shadow: 0 2px 8px 0 rgb(25 25 25 / 16%);">{{$name->program->name}}</h2>
                                    </div>
                                </div>
                                <div class="section-wrapper">
                                    <div class="cefcom-container ">
                                        <div class="cefcom-row ">
                                            @foreach($course_p as $c)
                                            <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                                <div class="ef-program-card-horizontal prog-ly" data-groups="">
                                                    <div data-clicksubregion="pg-card-image-undefined">
                                                        <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/aya/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                            <div>
                                                                <picture>
                                                                    <img alt="EF Языковой год за рубежом" srcset="{{asset($c->country->image)}}" class="ef-responsive-image ">
                                                                </picture>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="ef-program-card-horizontal__content">
                                                        <span class="ef-program-card-horizontal__title">
                                                            <h2>{{$c->country->name}}</h2>
                                                        </span>
                                                        <div class="ef-program-card-horizontal__diff">
                                                            <div class="ef-program-card-horizontal__diff-item">
                                                                <div>
                                                                    <span class="ef-icon gh-icon-calendar"></span><span>6+ <span>месяцев</span></span>
                                                                </div>
                                                            </div>
                                                        </div><span class="ef-program-card-horizontal__descr">
                                                            {{$c->description}}
                                                        </span>
                                                        <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined">
                                                            <a data-tracking="pg-learn-more-btn-undefined" href="{{route('courses', ['progid' => $c->program->id, 'conid'=>$c->country->id])}}" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel="">
                                                                <span>Узнать подробнее</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @include('layout.footer')
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>

</html>
