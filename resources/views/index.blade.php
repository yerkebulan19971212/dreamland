<!DOCTYPE html>
<html class=" transparent  mkt-kz   -no-header-shadow-page " data-react-helmet="class">
<head>

    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/t.min.css')}}">
    <title>Dreamland</title>
	    <link data-react-helmet="true" rel="icon" type="image/png" href="{{asset('img/1.jpeg')}}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://ws.tildacdn.com/project836547/tilda-blocks-2.12.css?t=1616509495" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/base_style.css')}}">
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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        body{
            font-family: 'Roboto', sans-serif;
        }
        .freeconsulting{
            display: block!important;
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
                        <main data-clickregion="page" id="main-content" style="display:block">
                            <div class="funneling-siteroot-template">
                                <div class="funneling__wrapper three-row-comp-w-section-title">
                                    <section id="omnidiv-stage" class="rendering__stage" style="padding-top: 60px">
                                        <div class="hero-area -gradient-top  hero-transparent" style="background-image:url(https://image.shutterstock.com/shutterstock/photos/518625736/display_1500/stock-photo-pretty-female-girl-tourist-smiling-and-taking-selfie-in-manhattan-new-york-beautiful-young-518625736.jpg)">
                                            <div class="stage">
                                                <div class="stage__content cefcom-container">
                                                    <div class="default w-100" >
                                                        <div class="tag__wrapper"></div>
                                                        <div class="block-text">
                                                            <h1 class="block-text__title">Учись. Путешествуй. Изучай.</h1>
                                                            <div>
                                                                <p> Мы поможем сделать первый шаг к твоей мечте путем качественного и доступного образования за рубежом. </p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 d-flex justify-content-end btn_header_out" style="padding: 5px;">
                                                                    <a id="freeconsulting" type="button" class="nav-link button-consult  btn_header" href="#">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</a>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 d-flex  btn_header_out" style="padding: 5px;">
                                                                    <a id="listofcountrybutton" class="nav-link button-consult btn_header" href="#" style=" background-color: #212529">СПИСОК СТРАН</a>
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
                                                                            <span class="cefcom-card--teaser__text">{!! $p->description !!}</span>
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
									<div id="subtile-categories-wrapper" class="-with-border-top" id="age-categories-wrapper">
                                        <section id="omnidiv-age-categories" class="ef-section rendering__age-categories">
                                            <div class="cefcom-container ">
                                                <div class="cefcom-row -x-around">
                                                    <h2 class="age-categories__title">Наши страны</h2></div>
                                                <div class="cefcom-row age-categories -x-around">
                                                    @foreach($countries as $country)
                                                        <div class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">
                                                            <div class="age-group-card">
                                                                <a href="{{ route('bachelors', ['id' => $country->id]) }}" data-code="UNI" data-tracking="age:UNI" filter-name="age:UNI" data-programs="LY,ILS,BC,ETOWN,HULT" class="cefcom-card--teaser "data-clicksubregion="card-group-LY,ILS,BC,ETOWN,HULT" data-clicklabel="page:card-group-LY,ILS,BC,ETOWN,HULT:#UNI">
                                                                    <div>
                                                                        <picture>
                                                                            <!--                                                                        <source srcset="https://a.storyblok.com/f/89778/654x408/da1560e9ad/00_m.jpg, https://a.storyblok.com/f/89778/654x408/da1560e9ad/00_m.jpg 1x" media="(max-width: 768px)">-->
                                                                            <!--                                                                        <source srcset="https://a.storyblok.com/f/89778/768x516/46fa4d59aa/00.jpg, https://a.storyblok.com/f/89778/768x516/46fa4d59aa/00.jpg 1x">-->
                                                                            <img alt="Студенты и молодые люди" src="{{asset($country->image)}}" class="ef-responsive-image cefcom-card--teaser__img" width="auto" height="auto">
                                                                        </picture>
                                                                    </div>
                                                                    <div class="cefcom-card--teaser__inner">
                                                                        <div class="cefcom-card--teaser__content">
                                                                            {{--                                                                            <span class="cefcom-card--teaser__label">Программы&nbsp;для</span>--}}
                                                                            <h2 class="cefcom-card--teaser__title">
                                                                                {{$country->name}}</h2>
                                                                           
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

                                </div>
                            </div>
                        </main>

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
                                    <div class="owl-item language_item">
                                        <a>
                                            <div class="flag"><img src="{{asset('img/icon/ARIZONA.png')}}" alt=""></div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a >
                                            <div class="flag"><img src="{{asset('img/icon/ascvut.png')}}" alt=""></div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a>
                                            <div class="flag"><img src="{{asset('img/icon/cvut.png')}}" alt=""></div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a>
                                            <div class="flag"><img src="{{asset('img/icon/czu.jpg')}}" alt=""></div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a >
                                            <div class="flag"><img src="{{asset('img/icon/hebei.jpg')}}" alt=""></div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a >
                                            <div class="flag"><img src="{{asset('img/icon/mup.jpg')}}" alt=""></div>
                                            <div class="lang_name">Japanese</div>
                                        </a>
                                    </div>
                                    <div class="owl-item language_item">
                                        <a >
                                            <div class="flag"><img src="{{asset('img/icon/vse.png')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.ourwork')


            <script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
            <script src="https://static.tildacdn.com/js/lazyload-1.3.min.js" charset="utf-8"></script>
        @include('layout.form')
        @include('layout.footer')
    </main>
</div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script>
        $("#freeconsulting").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#rec126338645").offset().top
            }, 2000);
        });
        $("#freeconsulting2").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#rec126338645").offset().top
            }, 2000);
        });
        $("#listofcountrybutton").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#subtile-categories-wrapper").offset().top
            }, 2000);
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
