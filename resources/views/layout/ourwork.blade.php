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
        font-family: 'Roboto';
     }
</style>
<div id="why" class="wy">
    <div class="why-choose" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container">
            <div class="why-choose-ineer">
                <ul class="our-strength ">
                    <li> <span class="counter" id="sp1" style="opacity: 1;"></span>
                        <p class="title1" id="ct1" counter_max="170">Стран по всему <br> миру</p>
                    </li>
                    <li> <span class="counter" id="sp2" style="opacity: 1;"></span>
                        <p class="title1" id="ct2" counter_max="2780">Пристижных университетов</p>
                    </li>
                    <li> <span class="counter" id="sp3" style="opacity: 1;"></span>
                        <p class="title1" id="ct3" counter_max="520">Специальностей</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div style="position: relative; padding:6rem 0px; margin-bottom: 100px;">
    <div class="container text-center" style="">
        <div>
            <h2 class="title">Как мы помогаем</h2>
            <p class="sub-title"></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/1.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 1.</h3>
                <p class="workp">Бесплатная консультация </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/2.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 2.</h3>
                <p class="workp">Заключение договора</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/3.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 3.</h3>

                <p class="workp">Поступление в университет</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/4.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 4.</h3>

                <p class="workp">Оплата SEVIS</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/5.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 5.</h3>

                <p class="workp">Подготовка кейса</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 workdiv">
                <img src="{{asset('img/steps/6.svg')}}" class="workimg" alt="">
                <h3 class="workStep">Шаг 6.</h3>

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
        color: #333456;
        margin-bottom:4.4rem;
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
        height: 80px;
        margin-bottom: 0.8rem;
    }
    .workp{
        font-family: Roboto, sans-serif;
        line-height: 1.57;
        white-space: pre-wrap;
        color:  #333456;
        font-weight: 500;
        font-size: 1.4rem;
        padding: 0px 5%;
    }
    .workStep{
        font-family: Roboto, sans-serif;
        line-height: 1.57;
        white-space: pre-wrap;
        color:  #333456;
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
        if (sp1 < 5){
            sp1 = sp1 + 1;
            document.getElementById("sp1").innerHTML = sp1;
        }
        if(sp1 == 5) {
            clearInterval(intervalId);
        }
    };
    var varName2 = function() {
        if (sp2 < 216){
            sp2 = sp2 + 1;
            document.getElementById("sp2").innerHTML = sp2;
        }
        if(sp1 == 216) {
            clearInterval(intervalId2);
        }
    }
    var varName3 = function() {
        if (sp3 <= 46){
            sp3 = sp3 + 1;
            document.getElementById("sp3").innerHTML = sp3;
        }
        if(sp3 == 46) {
            clearInterval(intervalId3);
        }
    }
    document.addEventListener('DOMContentLoaded', function(){
        $(window).scroll(function(){
            w = Math.floor( $(window).scrollTop() );
            if(w>=($('#why').offset().top - screen.height)){
                intervalId = setInterval(varName, 60);
                intervalId2 =setInterval(varName2, 10);
                intervalId3 = setInterval(varName3, 40);

            }
        })
        w = Math.floor( $(window).scrollTop() );
        if(w>=($('#why').offset().top - screen.height)){
            intervalId = setInterval(varName, 60);
            intervalId2 =setInterval(varName2, 10);
            intervalId3 = setInterval(varName3, 40);

        }
    });
</script>
