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
@if (\Session::has('success'))
    <script>
        alert('Ваше сообщение успешно отправлено')
    </script>
@endif
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
                        <style>
                            .country_name strong{
                                font-family: Roboto, sans-serif ;
                                font-size: 4rem;
                                color: #fff;
                            }
                            .btn-blue{
                                color: #fff;
                                background-color: #008bd0;
                                border: 2px solid #008bd0;
                                border-radius: 100px;
                                width: 170px;
                            }
                            .program-price{
                                color: #fff;
                                font-weight: bold;
                                border-bottom: 1px solid #bda98b;
                                padding-bottom: .5rem;
                                padding-top: 1.5rem;

                            }
                            .program-price div{
                                font-family: 'Roboto';
                                font-size: 20px;
                            }
                            @media only screen and (min-width: 1025px){
                                .country_name{
                                    line-height: 5.8rem;
                                    letter-spacing: 0;
                                }
                            }
                            @media only screen and (min-width: 768px){
                                .country_name{
                                }
                            }
                            @media only screen and (min-width: 1025px){

                            }

                        </style>
                        <div style="display: block;">
                            <section id="omnidiv-program-cards" class="ef-section rendering__program-cards">
                                <div class="header_img" style="background-image:url({{asset('img/canada.jpg')}});">
                                    <div class="w-100" style="height: 100%; position: relative; background-color: #19191970">
                                    <div style="position: absolute;width: 100%;text-align: center;bottom: 20px">
                                        <div class="container ">
                                            <div class="row" style="text-align: left">
                                            <div class="col-12 col-md-6">
                                                <h2 class="country_name"><strong>{!! $cp->country->name !!}</strong></h2>
                                                <a id="freecon" type="button" href="#" class="btn btn-blue">Оставить заявку</a>
                                            </div>
                                            <div class="col-12 col-md-6 ">
                                                <div class="text-left d-flex program-price">
                                                    <div class="col-lg-5 col-md-4 col-4" >Программа</div>
                                                    <div class="col-lg-7 col-md-8 col-8">{!! $cp->program->name !!}</div>
                                                </div>
                                                <div class="text-left d-flex program-price">
                                                    <div class="col-lg-5 col-md-7 col-7" style="">Стоимость за год от</div>
                                                    <div class="col-lg-7 col-md-5 col-5">{!! $cp->price !!} $</div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="section-wrapper">
                                    <div class="cefcom-container ">
                                        <div class="cefcom-row ">
                                            <div class="row" style="font-size: 23px">
                                                <div data-tween-from="{&quot;y&quot;: 50}" class="container" style="opacity: 1;">
                                                {!! $cp->full_description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        @include('layout.form')
                        @include('layout.footer')
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script>
    $("#freecon").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#rec126338645").offset().top
        }, 2000);
    });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
