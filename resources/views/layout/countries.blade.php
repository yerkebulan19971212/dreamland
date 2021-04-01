@foreach($countries as $country)
<a href="{{ route('bachelors', ['id' => $country->id]) }}" class="cefcom-col age-group-card__wrapper -s-12 -m-6 -l-4">
    <div class="age-group-card">
        <div class="funneling-subtile-section">
            {{--                                                                <div class="btns-action"><span class=" icon-more"></span></div>--}}
            <div class="ef-card--teaser ">
                <div>
                    <picture><img src="{{asset($country->image)}}" alt="Языковой год за рубежом" srcset="" class="ef-responsive-image ef-card--teaser__img test"></picture>
                </div>
                <div class="ef-card--teaser__inner">
                    <div class="ef-card--teaser__content">
                        <h2 class="ef-card--teaser__title">{{$country->name}}</h2></div>
                </div>
                {{--                                                                    <div class="funneling-subtile__hover">--}}
                {{--                                                                        <div class="funneling-subtile__hover-item">--}}
                {{--                                                                            <div class="block--rich-text ">--}}
                {{--                                                                                <div class="rich-text__content">Совместите изучение языка и академических предметов. Подготовьтесь к языковым экзаменам и получите международный опыт.--}}
                {{--                                                                                </div>--}}
                {{--                                                                            </div>--}}
                {{--                                                                            <div class="funneling-subtile__btns"><a href="https://www.ef.kz/aya/" class="ef-button -secondary -filled -square" target="_self" rel="" data-clicklabel="page:page:/aya/">EF Языковой год за рубежом</a></div>--}}
                {{--                                                                        </div>--}}
                {{--                                                                    </div>--}}
            </div>
        </div>
    </div>
</a>
@endforeach
