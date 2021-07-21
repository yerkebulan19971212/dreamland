<div id="t-footer" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="836547" data-tilda-page-id="10326324" data-tilda-page-alias="footer" data-tilda-formskey="e3d431961994d6b746f1ef5adaba23b5" data-tilda-lazy="yes">
    <div id="rec176355497" class="r t-rec t-rec_pt_45 t-rec_pb_45" style="padding-top:45px;padding-bottom:45px;background-color:#191919cc; " data-record-type="420" data-bg-color="#002f4d">
        <div class="t420">
            <div class="t-container t-align_left">
                <div class="t420__col t-col t-col_3">
                </div>
                <div class="t420__col t-col t-col_3">
                    <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title" style="color: #ffffff;">Наши программы</div>
                    <div class="t420__descr t-descr t-descr_xxs" field="descr" style="color: #ebebeb;color:#ebebeb;">
                        <ul>
                            @foreach($programs as $p)
                                <li><a href="{{ route('categories', ['id' => $p->id]) }}">{{$p->name}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="t420__col t-col t-col_2">
                    <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title" style="color: #ffffff;">Страны</div>
                    <div class="t420__descr t-descr t-descr_xxs" field="descr" style="color: #ebebeb;color:#ebebeb;">
                        <ul>
                            @foreach($countries as $p)
                                <li><a href="{{ route('bachelors', ['id' => $p->id]) }}">{{$p->name}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="t420__floatbeaker_lr3"></div>
                <div>
                    <div class="t420__col t-col t-col_3">
                        <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title2" style="color: #ffffff;">Важная информация</div>
                        <div class="t420__descr t-descr t-descr_xxs" field="descr2" style="color: #ebebeb;color:#ebebeb;">
                            <ul>
                                <li><a href="http://infostudy.international/polzovatelskoe-soglashenie" style="">Пользовательское соглашение</a></li>
                                <li><a href="http://infostudy.international/policy" style="">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="t420__col t-col t-col_3">
                        <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title" style="color: #ffffff;">Контакты</div>
                        <div class="t420__descr t-descr t-descr_xxs" field="descr" style="color: #ebebeb;color:#ebebeb;">
                            <ul>
                                <li><a href="tel:+77089030111">+7 708 903 01 11</a></li>
                                <li><a href="mailto:info@dreamland.kz">info@dreamland.kz</a></li>
                                <li>
                                    <a href="https://www.instagram.com/dreamlandkz"><img src="{{asset('img/icon/instagram.png')}}" alt="" style="height: 30px"></a>
                                    <a href="https://api.whatsapp.com/send/?phone=77089030111"><img src="{{asset('img/icon/whatsapp.png')}}" alt="" style="height: 30px; margin-left: 10px"></a>
                                </li>
                                <li>г. Алматы, Достык 210</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec176355498" class="r t-rec" style=" " data-animationappear="off" data-record-type="804">
        <div claass="t804">
            <div class="t804_geo" data-nosnippet>
                <noindex>
                    <div class='t_804_geo-datablock' style="display:none">
                        <div class='t_804_geo-key' field="cont">phone</div>
                        <div class='t_804_geo-default' field="text">+1 226 888 4959 (WhatsApp)</div>
                        <div class='t_804_geo-data'>
                            <div class='t_804_geo-data-0'>
                                <div class='t_804_geo-value' field="li_string__1515755680397">+7 (958) 581 56 62</div>
                                <div class='t_804_geo-geoip' field="li_geokeys__1515755680397">RU</div>
                            </div>
                            <div class='t_804_geo-data-1'>
                                <div class='t_804_geo-value' field="li_string__1515757533524">+7 (717) 269 61 99</div>
                                <div class='t_804_geo-geoip' field="li_geokeys__1515757533524">KZ</div>
                            </div>
                            <div class='t_804_geo-data-2'>
                                <div class='t_804_geo-value' field="li_string__1551697605193">+38 (067) 705-99-85</div>
                                <div class='t_804_geo-geoip' field="li_geokeys__1551697605193">UA</div>
                            </div>
                        </div>
                    </div>
                </noindex>
            </div>
        </div>
    </div>
</div>
