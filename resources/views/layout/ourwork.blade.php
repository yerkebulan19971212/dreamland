<style>
    .wy{
        background-image: url("https://static.365info.kz/uploads/2019/10/5846674553e5c00e15e982a93744f3c2.jpg");
        background-position: top;
        background-size: cover;
    }
    .why-choose{

        position: relative;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #06060678;
    }
    .why-choose-ineer{
        width: 100%;
        float: left;

    }
    .our-strength, .our-strength li{
        list-style: none;
    }
    .our-strength {
        padding: 0;
    }

    .our-strength li{
        float: left;
        width: 33%;
        display: inline-block;
        color: #fff;
        text-align: center;
        border-right: none;
    }
    @media screen and (max-width: 425px){
        .our-strength li{
            float: none;
            width: 100%;
            padding-top: 50px;
        }
        .why-choose{
           height:  500px;
        }
    }
    .why-choose-ineer ul.our-strength li span {
        padding-bottom: 20px;
        font-size: 60px;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .title1{
        display: block;
        font-size: 19px;
        padding-top: 15px;
        padding-bottom: 12px;
        font-weight: 500;
        line-height: 1.3;
     }
</style>
<div id="why" class="wy">
    <div class="why-choose" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container">
            <div class="why-choose-ineer">
                <ul class="our-strength ">
                    <li> <span class="counter" id="sp1" style="opacity: 1;"></span>
                        <p class="title1" id="ct1" counter_max="170">Актуальных<br>специальностей</p>
                    </li>
                    <li> <span class="counter" id="sp2" style="opacity: 1;"></span>
                        <p class="title1" id="ct2" counter_max="2780">Востребованных<br>выпускников</p>
                    </li>
                    <li> <span class="counter" id="sp3" style="opacity: 1;"></span>
                        <p class="title1" id="ct3" counter_max="520">Успешно защитили<br>диссертацию</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div style="position: relative; padding:6rem 0px; margin-bottom: 100px;">
{{--    <img src="{{asset('img/header-bg-19-_-blue-without-uni-logos-19.svg')}}" class="iAUbAw" alt="">--}}
    <div class="container text-center" style="">
        <div>
            <h2 class="title">Lorem ipsum dolor sit amet, consectetur.</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, nisi nostrum obcaecati odio repellendus sequi tempora voluptatibus. Ab, commodi tempore?</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Бесплатная консультация </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Заключение договора</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Поступление в университет</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Оплата SEVIS</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Подготовка кейса</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/icon/hebei.jpg')}}" class="workimg" alt="">
                <p class="workp">Получение визы</p>
            </div>
        </div>
    </div>
</div>
<style>
    .iAUbAw {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        z-index: -1;
        border: none;
    }
    .title{
        font-size: 2.4rem;
        font-family: Roboto, sans-serif;
        line-height: 1;
        white-space: pre-wrap;
        font-weight: 800;
        color: #000;
        margin-bottom:1.4rem;
        max-width: 84rem;
    }
    .sub-title{
        font-weight: 400;
        font-family: Roboto, sans-serif;
        font-size: 1.2rem;
        line-height: 1;
        max-width: 84rem;
        white-space: pre-wrap;
        text-align: center;
        color: #000;
    }
    .workimg{
        width: 31px;
        margin-bottom: 0.8rem;
    }
    .workp{
        font-family: Roboto, sans-serif;
        line-height: 1.57;
        white-space: pre-wrap;
        color: #000000;
        font-weight: 500;
        font-size: 1rem;
        padding: 0px 5%;
    }
    .workdiv{
        padding: 2rem 0px 0px;
        margin-bottom: 3rem;
    }
</style>
<script>



    var sp1 = 0;
    var sp2 = 0;
    var sp3 = 0;

    var intervalId = null;
    var intervalId2 = null;
    var intervalId3 = null;
    var varCounter = 0;
    var varName = function(){
        if (sp1 < 171){
            sp1 = sp1 + 1;
            document.getElementById("sp1").innerHTML = sp1;
        }
        if(sp1 == 170) {
            clearInterval(intervalId);
        }
    };
    var varName2 = function() {
        if (sp2 < 570){
            sp2 = sp2 + 1;
            document.getElementById("sp2").innerHTML = sp2;
        }
        if(sp1 == 171) {
            clearInterval(intervalId2);
        }
    }
    var varName3 = function() {
        if (sp3 <= 320){
            sp3 = sp3 + 1;
            document.getElementById("sp3").innerHTML = sp3;
        }
        if(sp1 == 171) {
            clearInterval(intervalId3);
        }
    }
    document.addEventListener('DOMContentLoaded', function(){
        $(window).scroll(function(){
            w = Math.floor( $(window).scrollTop() );
            if(w>=($('#why').offset().top - screen.height)){
                intervalId = setInterval(varName, 30);
                intervalId2 =setInterval(varName2, 10);
                intervalId3 = setInterval(varName3, 30);

            }
        })
        w = Math.floor( $(window).scrollTop() );
        if(w>=($('#why').offset().top - screen.height)){
            intervalId = setInterval(varName, 30);
            intervalId2 =setInterval(varName2, 20);
            intervalId3 = setInterval(varName3, 30);

        }
    });
</script>
