<!DOCTYPE html>
<html class=" transparent  mkt-kz   -no-header-shadow-page " data-react-helmet="class">
<head>

    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    <title>Dreamland</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://ws.tildacdn.com/project836547/tilda-blocks-2.12.css?t=1616509495" type="text/css" media="all" />
    <link data-react-helmet="true" rel="icon" type="image/png" href="https://www.ef.kz/assetscdn/WIBIwq6RdJvcD9bc8RMd/central-media/common/favicon-48.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/base_style.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('boot')}}">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>--}}
    <style>
        img:not([src]){
            visibility: visible!important;
        }
        .navbar-light .navbar-toggler{
            border-color: #fff;
        }
        .lang_prev{
            left: 0px;
        }
        .lang_next{
            right: 0px;
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        body{
            font-family: 'Roboto', sans-serif;
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
                        <main data-clickregion="page" id="main-content" style="display:block">
                            <div class="funneling-siteroot-template">
                                <div class="funneling__wrapper three-row-comp-w-section-title">
                                    <section id="omnidiv-stage" class="rendering__stage" style="padding-top: 60px">
                                        <div class="hero-area -gradient-top  hero-transparent" style="background-image:url(https://image.shutterstock.com/shutterstock/photos/518625736/display_1500/stock-photo-pretty-female-girl-tourist-smiling-and-taking-selfie-in-manhattan-new-york-beautiful-young-518625736.jpg)">
                                            <div class="stage">
                                                <div class="stage__content cefcom-container">
                                                    <div class="default w-100" style="padding: 40px;border-radius: 12px;">
                                                        <div class="tag__wrapper"></div>
                                                        <div class="block-text">
                                                            <h1 class="block-text__title">Учись. Путешествуй. Изучай.</h1>
                                                            <div>
                                                                <p> Мы поможем сделать первый шаг к твоей мечте путем качественного и доступного образования за рубежом. </p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 d-flex justify-content-end btn_header_out" style="padding: 5px;">
                                                                    <a class="nav-link button-consult  btn_header" href="#">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</a>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 d-flex  btn_header_out" style="padding: 5px;">
                                                                    <a class="nav-link button-consult btn_header" href="#" style=" background-color: #212529">СПИСОК СТРАН</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="-with-border-top" id="age-categories-wrapper">
                                        <section id="omnidiv-age-categories" class="ef-section rendering__age-categories">
                                            <div class="cefcom-container ">
                                                <div class="cefcom-row -x-center">
                                                    <h2 class="age-categories__title">Наши программы</h2></div>
                                                <div class="cefcom-row age-categories -x-center">
                                                    @foreach($programs as $p)
                                                        <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">
                                                            <div class="age-group-card">
                                                                <a href="{{ route('categories', ['id' => $p->id]) }}" data-code="UNI" data-tracking="age:UNI" filter-name="age:UNI" data-programs="LY,ILS,BC,ETOWN,HULT" class="cefcom-card--teaser "data-clicksubregion="card-group-LY,ILS,BC,ETOWN,HULT" data-clicklabel="page:card-group-LY,ILS,BC,ETOWN,HULT:#UNI">
                                                                    <div>
                                                                        <picture>
                                                                            <!--                                                                        <source srcset="https://a.storyblok.com/f/89778/654x408/da1560e9ad/00_m.jpg, https://a.storyblok.com/f/89778/654x408/da1560e9ad/00_m.jpg 1x" media="(max-width: 768px)">-->
                                                                            <!--                                                                        <source srcset="https://a.storyblok.com/f/89778/768x516/46fa4d59aa/00.jpg, https://a.storyblok.com/f/89778/768x516/46fa4d59aa/00.jpg 1x">-->
                                                                            <img alt="Студенты и молодые люди" src="{{asset($p->image)}}" class="ef-responsive-image cefcom-card--teaser__img" width="auto" height="auto">
                                                                        </picture>
                                                                    </div>
                                                                    <div class="cefcom-card--teaser__inner">
                                                                        <div class="cefcom-card--teaser__content">
{{--                                                                            <span class="cefcom-card--teaser__label">Программы&nbsp;для</span>--}}
                                                                            <h2 class="cefcom-card--teaser__title">
                                                                                {{$p->name}}</h2>
                                                                            <span class="cefcom-card--teaser__text">Foundation</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="" id="subtile-categories-wrapper" style="padding-bottom:50px ">
                                        <section id="omnidiv-funneling-smalltiles-1" class="ef-section rendering__funneling-sub-tiles">
                                            <div class="cefcom-container ">
                                                <h2 class="ef-section-title">Наши страны</h2>
                                                <div class="cefcom-row age-categories -x-around">
                                                    @include('layout.countries')
{{--                                                    <a href="{{ route('bachelors') }}" class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture><img src="{{asset('img/usa.jpg')}}" alt="Языковой год за рубежом" srcset="" class="ef-responsive-image ef-card--teaser__img test"></picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">США</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content">Совместите изучение языка и академических предметов. Подготовьтесь к языковым экзаменам и получите международный опыт.--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.ef.kz/aya/" class="ef-button -secondary -filled -square" target="_self" rel="" data-clicklabel="page:page:/aya/">EF Языковой год за рубежом</a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture>--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/654x408/113611d7f6/sub-tile-ia_00_m.png, https://a.storyblok.com/f/61891/654x408/113611d7f6/sub-tile-ia_00_m.png 1x" media="(max-width: 768px)">-->--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/606x408/ef4c4f71f0/sub-tile-ia_00.png, https://a.storyblok.com/f/61891/606x408/ef4c4f71f0/sub-tile-ia_00.png 1x"><img alt="Международные &lt;span class=&quot;g-line-break&quot;&gt;&lt;/span&gt;школьные дипломы" srcset="https://a.storyblok.com/f/61891/606x408/ef4c4f71f0/sub-tile-ia_00.png 1024w, https://a.storyblok.com/f/61891/654x408/113611d7f6/sub-tile-ia_00_m.png 640w, https://a.storyblok.com/f/61891/654x408/113611d7f6/sub-tile-ia_00_m.png 320w" class="ef-responsive-image ef-card&#45;&#45;teaser__img test"></picture>-->--}}
{{--                                                                            <img src="{{asset('img/kip.png')}}" alt="">--}}
{{--                                                                        </picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">Кипр</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content">Получи свой диплом IB или A-Level от EF Academy - Международные школы-пансионы – и открой себе дорогу в топовые университеты мира. </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.efacademy.com/ru/" class="ef-button -secondary -filled -square" target="_blank" rel="noopener" data-clicklabel="page:page:https://www.efacademy.com/ru/">EF Academy<span class="ef-icon -new-window"></span></a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture>--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/654x408/a4c7dc092d/sub-tile-university-abroad_00_m.png, https://a.storyblok.com/f/61891/654x408/a4c7dc092d/sub-tile-university-abroad_00_m.png 1x" media="(max-width: 768px)">-->--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/608x408/7c2e3707b8/sub-tile-university-abroad_00.png, https://a.storyblok.com/f/61891/608x408/7c2e3707b8/sub-tile-university-abroad_00.png 1x"><img alt="Вузы за рубежом" srcset="https://a.storyblok.com/f/61891/608x408/7c2e3707b8/sub-tile-university-abroad_00.png 1024w, https://a.storyblok.com/f/61891/654x408/a4c7dc092d/sub-tile-university-abroad_00_m.png 640w, https://a.storyblok.com/f/61891/654x408/a4c7dc092d/sub-tile-university-abroad_00_m.png 320w" class="ef-responsive-image ef-card&#45;&#45;teaser__img test">-->--}}
{{--                                                                            <img src="{{asset('img/Spain.jpg')}}" alt="">--}}
{{--                                                                        </picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">Испания</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content">Воплоти свою мечту обучения за рубежом в реальность с нашими программами предуниверситетской подготовки, бакалавриата, магистратуры и MBA</div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.ef.kz/pg/university-abroad/?noshow=LY,ILS,ILP&amp;code=ALL" class="ef-button -secondary -filled -square" target="_self" rel="" data-clicklabel="page:page:/pg/university-abroad/?noshow=LY,ILS,ILP&amp;code=ALL">Все программы</a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture>--}}
{{--                                                                            <source srcset="https://a.storyblok.com/f/61891/654x408/fe2b257597/sub-tile-online_00_m.jpg, https://a.storyblok.com/f/61891/654x408/fe2b257597/sub-tile-online_00_m.jpg 1x" media="(max-width: 768px)">--}}
{{--                                                                            <source srcset="https://a.storyblok.com/f/61891/608x408/fcef4cf260/sub-tile-online_00.jpg, https://a.storyblok.com/f/61891/608x408/fcef4cf260/sub-tile-online_00.jpg 1x"><img alt="Изучение языка онлайн" srcset="https://a.storyblok.com/f/61891/608x408/fcef4cf260/sub-tile-online_00.jpg 1024w, https://a.storyblok.com/f/61891/654x408/fe2b257597/sub-tile-online_00_m.jpg 640w, https://a.storyblok.com/f/61891/654x408/fe2b257597/sub-tile-online_00_m.jpg 320w" class="ef-responsive-image ef-card--teaser__img test">--}}
{{--                                                                            <img src="{{asset('img/cheh.jpg')}}" alt="">--}}
{{--                                                                        </picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">Чехия</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content"> Получай уроки английского языка от профессиональных учителей со всего мира, в любое время в самой большой онлайн школе в мире EF English Live. </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://englishlive.ef.com/ru-ru/" class="ef-button -secondary -filled -square" target="_blank" rel="noopener" data-clicklabel="page:page:https://englishlive.ef.com/ru-ru/">EF English Live<span class="ef-icon -new-window"></span></a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture>--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg, https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg 1x" media="(max-width: 768px)">-->--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/608x408/e2e7ec9349/sub-tile-corporate_00.jpg, https://a.storyblok.com/f/61891/608x408/e2e7ec9349/sub-tile-corporate_00.jpg 1x"><img alt="Обучение языкам для бизнеса и госорганизаций" srcset="https://a.storyblok.com/f/61891/608x408/e2e7ec9349/sub-tile-corporate_00.jpg 1024w, https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg 640w, https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg 320w" class="ef-responsive-image ef-card&#45;&#45;teaser__img test">-->--}}
{{--                                                                            <img src="{{asset('img/china.jpg')}}" alt="">--}}
{{--                                                                        </picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">Китай</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content">Ориентированные курсы для компаний и государств с гарантированными результатами.</div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.ef.kz/corporate/" class="ef-button -secondary -filled -square" target="_self" rel="" data-clicklabel="page:page:/corporate/">EF Обучение языкам</a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="http://127.0.0.1:8000/" class="-s-12 -m-6 -l-4">--}}
{{--                                                    <div class="cefcom-col age-group-card__wrapper ">--}}
{{--                                                        <div class="age-group-card">--}}
{{--                                                            <div class="funneling-subtile-section">--}}
{{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
{{--                                                                <div class="ef-card--teaser ">--}}
{{--                                                                    <div>--}}
{{--                                                                        <picture>--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg, https://a.storyblok.com/f/61891/654x408/cc4e437ab7/sub-tile-corporate_00_m.jpg 1x" media="(max-width: 768px)">-->--}}
{{--                                                                            <!--                                                                            <source srcset="https://a.storyblok.com/f/61891/608x408/e2e7ec9349/sub-tile-corporate_00.jpg, https://a.storyblok.com/f/61891/608x408/e2e7ec9349/sub-tile-corporate_00.jpg 1x">-->--}}
{{--                                                                            <!--                                                                            <img alt="Обучение языкам для бизнеса и госорганизаций" srcset="" class="ef-responsive-image ef-card&#45;&#45;teaser__img test">-->--}}
{{--                                                                            <img src="{{asset('img/canada.jpg')}}" alt="">--}}
{{--                                                                        </picture>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="ef-card--teaser__inner">--}}
{{--                                                                        <div class="ef-card--teaser__content">--}}
{{--                                                                            <h2 class="ef-card--teaser__title">Канада</h2></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="funneling-subtile__hover">--}}
{{--                                                                        <div class="funneling-subtile__hover-item">--}}
{{--                                                                            <div class="block--rich-text ">--}}
{{--                                                                                <div class="rich-text__content">Ориентированные курсы для компаний и государств с гарантированными результатами.</div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.ef.kz/corporate/" class="ef-button -secondary -filled -square" target="_self" rel="" data-clicklabel="page:page:/corporate/">EF Обучение языкам</a></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    </a>--}}
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <div style="display:none">
                            <section id="omnidiv-program-cards" class="ef-section rendering__program-cards">
                                <div class="program-cards-top">
                                    <div class="cefcom-container ">
                                        <div class="cefcom-row ">
                                            <div class="cefcom-col -sm-12 -m-12"><span class="link-back">Назад</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cefcom-container ">
                                    <div class="cefcom-row program-cards__header-row">
                                        <div class="cefcom-col -sm-12 -m-12 program-cards__header-col">
                                            <div class="program-cards__header">
                                                <p class="program-cards__header-label"></p>
                                                <h2 class="program-cards__header-title"></h2></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-wrapper">
                                    <div class="cefcom-container ">
                                        <div class="cefcom-row ">
                                            <div class="cefcom-col  program-card-wrapper -s-12 -m-12 card-no-border -l-12">
                                                <div class="not-sure-card ">
                                                    <div class="not-sure-card__item">
                                                        <h2 class="not-sure-card__title">Заказать бесплатную каталог</h2><a href="https://www.ef.kz/cp/brochure/" data-code="ALL" data-tracking="ALL" filter-name="age:mask:clear" class="not-sure-card__btn"><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div style="display:none">
                            <section id="omnidiv-available-programs" class="ef-section rendering__available-programs">
                                <div class="cefcom-container ">
                                    <div class="cefcom-row ">
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-ly" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/aya/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/327x107/89bf373f0f/00_m.jpeg, https://a.storyblok.com/f/89778/327x107/89bf373f0f/00_m.jpeg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/316x219/de50fbfeee/00.jpeg, https://a.storyblok.com/f/89778/316x219/de50fbfeee/00.jpeg 1x"><img alt="EF Языковой год за рубежом" srcset="https://a.storyblok.com/f/89778/316x219/de50fbfeee/00.jpeg 1024w, https://a.storyblok.com/f/89778/327x107/89bf373f0f/00_m.jpeg 640w, https://a.storyblok.com/f/89778/327x107/89bf373f0f/00_m.jpeg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2> EF Языковой год за рубежом </h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>6+ <span>месяцев</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Совместите изучение языка и академических предметов. Подготовьтесь к языковым экзаменам и получите международный опыт.
</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/aya/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.ef.kz/cp/brochure/ly/" class="ef-program-card-horizontal__btns-btn" target="_self" rel=""><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-ily" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/ils-youth/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/327x107/bd5298d870/ily_eu_m.jpg, https://a.storyblok.com/f/89778/327x107/bd5298d870/ily_eu_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/316x219/f5075c035e/ily_eu.jpg, https://a.storyblok.com/f/89778/316x219/f5075c035e/ily_eu.jpg 1x"><img alt="EF Языковые курсы за рубежом" srcset="https://a.storyblok.com/f/89778/316x219/f5075c035e/ily_eu.jpg 1024w, https://a.storyblok.com/f/89778/327x107/bd5298d870/ily_eu_m.jpg 640w, https://a.storyblok.com/f/89778/327x107/bd5298d870/ily_eu_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF Языковые курсы за рубежом</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>От 2 до 24 <span>недель</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Изучайте язык, выбрав индивидуальный курс с гибкой длительностью или all-inclusive языковой лагерь с сопровождением лидера EF.</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/ils-youth/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.ef.kz/cp/brochure/ils/" class="ef-program-card-horizontal__btns-btn" target="_self" rel=""><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-ils" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/327x107/5f8133d97f/00_m.jpeg, https://a.storyblok.com/f/89778/327x107/5f8133d97f/00_m.jpeg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/316x219/edb51b0bed/00.jpeg, https://a.storyblok.com/f/89778/316x219/edb51b0bed/00.jpeg 1x"><img alt="EF Языковые курсы за рубежом" srcset="https://a.storyblok.com/f/89778/316x219/edb51b0bed/00.jpeg 1024w, https://a.storyblok.com/f/89778/327x107/5f8133d97f/00_m.jpeg 640w, https://a.storyblok.com/f/89778/327x107/5f8133d97f/00_m.jpeg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF Языковые курсы за рубежом</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>От 2 до 24 <span>недель</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Изучение языка в одной из школ EF. Выбор из 10 языков в 50 направлениях, занятия начинаются каждый понедельник.</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.ef.kz/cp/brochure/ils/" class="ef-program-card-horizontal__btns-btn" target="_self" rel=""><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-ilp" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/ils-25/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/654x216/65a6b29165/00_m.jpg, https://a.storyblok.com/f/89778/654x216/65a6b29165/00_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/632x438/382417619a/00.jpg, https://a.storyblok.com/f/89778/632x438/382417619a/00.jpg 1x">
                                                                <img alt="EF Языковые курсы за рубежом" srcset="https://a.storyblok.com/f/89778/632x438/382417619a/00.jpg 1024w, https://a.storyblok.com/f/89778/654x216/65a6b29165/00_m.jpg 640w, https://a.storyblok.com/f/89778/654x216/65a6b29165/00_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF Языковые курсы за рубежом</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>От 1 до 24 <span>недель</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Добейтесь повышения в карьере после прохождения нашего курса за рубежом. Подберем языковую программу в любой сфере.  Отдельные курсы для специалистов.</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/ils/ils-25/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.ef.kz/cp/brochure/ils/" class="ef-program-card-horizontal__btns-btn" target="_self" rel=""><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-ia" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.efacademy.com/ru/" class="ef-program-card-horizontal__image" target="_blank" rel="noopener">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/702x300/b7a4b5f7f9/00_m.jpg, https://a.storyblok.com/f/89778/702x300/b7a4b5f7f9/00_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/690x480/4c2e93ffac/00.jpg, https://a.storyblok.com/f/89778/690x480/4c2e93ffac/00.jpg 1x"><img alt="Халыкаралык пансион-мектептер" srcset="https://a.storyblok.com/f/89778/690x480/4c2e93ffac/00.jpg 1024w, https://a.storyblok.com/f/89778/702x300/b7a4b5f7f9/00_m.jpg 640w, https://a.storyblok.com/f/89778/702x300/b7a4b5f7f9/00_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>Халыкаралык пансион-мектептер</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>1 жастан 5 жаска дейин</span></div>
                                                        </div>
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-cap"></span><span><span>Улкен мектептин дипломы</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">75 мемлекеттин окушыларымен бирге окыныз. Халыкаралык диплом алып оте жаксы вуздарга тусу мумкиндигин пайдаланыныз</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.efacademy.com/ru/" class="ef-program-card-horizontal__btns-btn -solid" target="_blank" rel="noopener"><span>Узнать подробнее<span class="ef-icon -new-window -white"></span></span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.efacademy.com/ru/brochure-request/" class="ef-program-card-horizontal__btns-btn" target="_blank" rel="noopener"><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-bc" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/upa/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/327x107/d0f4fe0364/00_m.jpeg, https://a.storyblok.com/f/89778/327x107/d0f4fe0364/00_m.jpeg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/316x220/1d6d58db91/00.jpeg, https://a.storyblok.com/f/89778/316x220/1d6d58db91/00.jpeg 1x"><img alt="EF Предуниверситетская подготовка" srcset="https://a.storyblok.com/f/89778/316x220/1d6d58db91/00.jpeg 1024w, https://a.storyblok.com/f/89778/327x107/d0f4fe0364/00_m.jpeg 640w, https://a.storyblok.com/f/89778/327x107/d0f4fe0364/00_m.jpeg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF Предуниверситетская подготовка</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-calendar"></span><span>6/9 <span>месяцев</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Зачисление в университеты в англо-говорящих странах с комплексной подготовкой за рубежом. </span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/upa/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.ef.kz/cp/brochure/bc/" class="ef-program-card-horizontal__btns-btn" target="_self" rel=""><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-loc" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/corporate/" class="ef-program-card-horizontal__image" target="_self" rel="">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/654x270/9e99783557/00_m.jpg, https://a.storyblok.com/f/89778/654x270/9e99783557/00_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/690x480/92507e269c/00.jpg, https://a.storyblok.com/f/89778/690x480/92507e269c/00.jpg 1x"><img alt="EF Обучение языкам" srcset="https://a.storyblok.com/f/89778/690x480/92507e269c/00.jpg 1024w, https://a.storyblok.com/f/89778/654x270/9e99783557/00_m.jpg 640w, https://a.storyblok.com/f/89778/654x270/9e99783557/00_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF Обучение языкам</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-man"></span><span><span>для бизнеса и госорганизаций</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Специальная языковая подготовка для частных компаний и правительственных организаций, которая гарантирует результат.</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.ef.kz/corporate/" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span>Узнать подробнее</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-etown" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://englishlive.ef.com/ru-ru/" class="ef-program-card-horizontal__image" target="_blank" rel="noopener">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/654x270/6b459056aa/00_m.jpg, https://a.storyblok.com/f/89778/654x270/6b459056aa/00_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/692x480/621561057f/00.jpg, https://a.storyblok.com/f/89778/692x480/621561057f/00.jpg 1x"><img alt="EF English Live" srcset="https://a.storyblok.com/f/89778/692x480/621561057f/00.jpg 1024w, https://a.storyblok.com/f/89778/654x270/6b459056aa/00_m.jpg 640w, https://a.storyblok.com/f/89778/654x270/6b459056aa/00_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>EF English Live</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-desktop_computer"></span><span><span>онлайн</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Онлайн обучение всегда доступно, при&nbsp;любом&nbsp;уровне&nbsp;языка. EF English Live является крупнейшей интернет-школой в мире</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://englishlive.ef.com/ru-ru/" class="ef-program-card-horizontal__btns-btn -solid" target="_blank" rel="noopener"><span>Узнать подробнее<span class="ef-icon -new-window -white"></span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-hult" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined">
                                                    <a data-tracking="pg-learn-more-btn-undefined" href="https://www.hult.edu/" class="ef-program-card-horizontal__image" target="_blank" rel="noopener">
                                                        <div>
                                                            <picture>
                                                                <source srcset="https://a.storyblok.com/f/89778/654x270/d7c3f87fec/00_m.jpg, https://a.storyblok.com/f/89778/654x270/d7c3f87fec/00_m.jpg 1x" media="(max-width: 768px)">
                                                                <source srcset="https://a.storyblok.com/f/89778/692x480/8ebd4b7ef4/00.jpg, https://a.storyblok.com/f/89778/692x480/8ebd4b7ef4/00.jpg 1x"><img alt="Hult International Business School" srcset="https://a.storyblok.com/f/89778/692x480/8ebd4b7ef4/00.jpg 1024w, https://a.storyblok.com/f/89778/654x270/d7c3f87fec/00_m.jpg 640w, https://a.storyblok.com/f/89778/654x270/d7c3f87fec/00_m.jpg 320w" class="ef-responsive-image "></picture>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>Hult International Business School</h2></span>
                                                    <div class="ef-program-card-horizontal__diff">
                                                        <div class="ef-program-card-horizontal__diff-item">
                                                            <div><span class="ef-icon gh-icon-cap"></span><span><span>Бакалавриат, Магистратура, MBA и Executive MBA</span></span>
                                                            </div>
                                                        </div>
                                                    </div><span class="ef-program-card-horizontal__descr">Получите степень бакалавра, магистра или MBA в международной бизнес-школе HULT с кампусами по всему миру.</span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" href="https://www.hult.edu/" class="ef-program-card-horizontal__btns-btn -solid" target="_blank" rel="noopener"><span>Узнать подробнее<span class="ef-icon -new-window -white"></span></span></a><a data-tracking="pg-free-brochure-btn-undefined" href="https://www.hult.edu/en/brochure/" class="ef-program-card-horizontal__btns-btn" target="_blank" rel="noopener"><span>Бесплатный каталог</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cefcom-col program-card-wrapper -s-12 -m-6 -l-12">
                                            <div class="ef-program-card-horizontal prog-null" data-groups="">
                                                <div data-clicksubregion="pg-card-image-undefined"></div>
                                                <div class="ef-program-card-horizontal__content"><span class="ef-program-card-horizontal__title"><h2>Заказать бесплатную каталог</h2></span>
                                                    <div class="ef-program-card-horizontal__btns" data-clicksubregion="pg-card-ctas-undefined"><a data-tracking="pg-learn-more-btn-undefined" class="ef-program-card-horizontal__btns-btn -solid" target="_self" rel=""><span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="gatsby-announcer" style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0" aria-live="assertive" aria-atomic="true"></div>
            </div>
            <div class="language">
                <h2 class="age-categories__title">Наши партнеры</h2>

            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="language_slider_container">

                                <!-- Language Slider -->

                                <div class="owl-carousel owl-theme language_slider">

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/ARIZONA.png')}}" alt=""></div>
{{--                                            <div class="lang_name">Ukrainian</div>--}}
                                        </a>
                                    </div>

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/ascvut.png')}}" alt=""></div>
{{--                                            <div class="lang_name">Japanese</div>--}}
                                        </a>
                                    </div>

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/cvut.png')}}" alt=""></div>
{{--                                            <div class="lang_name">Lithuanian</div>--}}
                                        </a>
                                    </div>

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/czu.jpg')}}" alt=""></div>
{{--                                            <div class="lang_name">Swedish</div>--}}
                                        </a>
                                    </div>
                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/hebei.jpg')}}" alt=""></div>
{{--                                            <div class="lang_name">Ukrainian</div>--}}
                                        </a>
                                    </div>

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/mup.jpg')}}" alt=""></div>
                                            <div class="lang_name">Japanese</div>
                                        </a>
                                    </div>

                                    <!-- Flag -->
                                    <div class="owl-item language_item">
                                        <a href="#">
                                            <div class="flag"><img src="{{asset('img/icon/vse.png')}}" alt=""></div>
{{--                                            <div class="lang_name">Japanese</div>--}}
                                        </a>
                                    </div>

{{--                                    <!-- Flag -->--}}
{{--                                    <div class="owl-item language_item">--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="flag"><img src="{{asset('images/Japanese.svg')}}" alt=""></div>--}}
{{--                                            <div class="lang_name">Japanese</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <!-- Flag -->--}}
{{--                                    <div class="owl-item language_item">--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="flag"><img src="{{asset('images/Japanese.svg')}}" alt=""></div>--}}
{{--                                            <div class="lang_name">Japanese</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}


                                </div>

                                <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
{{--            <script src="https://static.tildacdn.com/js/tilda-scripts-2.8.min.js"></script>--}}
{{--            <script src="https://ws.tildacdn.com/project836547/tilda-blocks-2.7.js?t=1616509495"></script>--}}
            <script src="https://static.tildacdn.com/js/lazyload-1.3.min.js" charset="utf-8"></script>
        @include('layout.form')
        @include('layout.footer')
    </main>
</div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
