<!DOCTYPE html>
<html class=" mkt-kz   -no-header-shadow-page " data-react-helmet="class">
<head>
    <link rel="stylesheet" href="{{asset('css/base_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    <title>Dreamland</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link data-react-helmet="true" rel="icon" type="image/png" href="{{asset('img/1.jpeg')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.min.css')}}">
    <style>
        img:not([src]){
            visibility: visible!important;
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
                              @if(!is_null($name))
                                <div class="header_img" style="background-image:url({{asset($name->country->image)}}); position: relative">
                                    <div style="position: absolute;bottom: -31px;width: 100%;text-align: center;">
                                    <h2 class="program-cards__header-title" style="width: 350px;
    text-align: center;
    background: #fff;
    padding: 10px;
    border-radius: 11px;
    box-shadow: 0 2px 8px 0 rgb(25 25 25 / 16%);">
                                        {!! $name->country->name !!}</h2>
                                    </div>
                                </div>
                                  @else
                                  {{''}}
                                @endif
                                <div class="section-wrapper">

                                    <div class="cefcom-container ">
                                        <div class="">
                                            <blockquote class="blockquote" style="font-family: Roboto">
                                                @if(!is_null($name))
                                                    <p class="mb-0" style="font-family: Roboto">{!! $name->country->description !!}</p>
                                                @endif
                                            </blockquote>
                                        </div>
                                        <div class="cefcom-row ">
                                            @foreach($course_p as $c)
                                            <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                                <div class="ef-program-card-horizontal {{$color[$loop->index]}}" data-groups="">
                                                    <div data-clicksubregion="pg-card-image-undefined">
                                                        <a data-tracking="pg-learn-more-btn-undefined"  class="ef-program-card-horizontal__image" target="_self" rel="">
                                                            <div>
                                                                <picture>
                                                                    <img alt="EF Языковой год за рубежом" srcset="{{asset($c->program->image)}}" class="ef-responsive-image ">
                                                                </picture>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <div class="ef-program-card-horizontal__content">
                                                        <span class="ef-program-card-horizontal__title">
                                                            <h2>{!! $c->program->name !!}</h2>
                                                        </span>
                                                        <div class="ef-program-card-horizontal__diff">
                                                            <div class="ef-program-card-horizontal__diff-item">
                                                                <div>
                                                                    <span>от </span><span class="ef-icon gh-icon-calendar"></span><span>{{ $c->price }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="ef-program-card-horizontal__descr" style="display: block">
                                                            {!! $c->description  !!}
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
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
