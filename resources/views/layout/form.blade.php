<div id="rec126338645" class="r t-rec" style=" " data-animationappear="off" data-record-type="698">
    <div class="t-cover" id="recorddiv126338645" bgimgfield="img" style="height:700px; background-image:url('https://static.tildacdn.com/tild3131-3036-4661-b865-643464323132/-/resize/20x/bookcase-books-books.jpg');">
        <div class="t-cover__carrier" id="coverCarry126338645" data-content-cover-id="126338645" data-content-cover-bg="https://static.tildacdn.com/tild3131-3036-4661-b865-643464323132/bookcase-books-books.jpg" data-content-cover-height="700px" data-content-cover-parallax="fixed" style="height:700px; "></div>
        <div class="t-cover__filter" style="height:700px;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));background-image: linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#33000000');"></div>
        <div class="t698">
            <div class="t-container ">
                <div class="t-width t-width_8 t698__mainblock">
                    <div class="t-cover__wrapper t-valign_middle">
                        <div class="t698__mainwrapper" data-hook-content="covercontent">
                            <div class="t698__title t-title t-title_xs" style="font-size:18px;" field="title">
                                <div style="font-size:46px;margin-top: 48px;" data-customstyle="yes"> Оставьте заявку на консультацию
                                    <br />
                                </div>
                            </div>
                            <div class="t698__descr t-descr t-descr_md" style="" field="descr">
{{--                                <div style="font-size:20px;" data-customstyle="yes">Мы свяжемся с вами ближайшее время и ответим на все волнующие вас вопросы--}}
{{--                                    <br />--}}
{{--                                </div>--}}
                            </div>
                            <div>
                                <form id="form126338645" name='form126338645' role="form" action='{{ action('SupportController@sendMessage') }}' method='POST' data-formactiontype="2" data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_5 " data-success-callback="t698_onSuccess">
                                    {{csrf_field()}}
                                    <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;">Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время</div>
                                    <div class="t-form__inputsbox">
                                        <div class="t-input-group t-input-group_nm" data-input-lid="1495646567135">
                                            <div class="t-input-block">
                                                <input type="text" autocomplete="name" name="Name" class="t-input js-tilda-rule " value="" placeholder="Ваше имя" data-tilda-req="1" data-tilda-rule="name" style="color:#000000; background-color:#ffffff; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" required>
                                                <div class="t-input-error"></div>
                                            </div>
                                        </div>
                                        <div class="t-input-group t-input-group_ph" data-input-lid="1495646545048">
                                            <div class="t-input-block">
                                                <input type="tel" autocomplete="tel" name="Phone" data-phonemask-init="no" data-phonemask-id="126338645" data-phonemask-lid="1495646545048" data-phonemask-maskcountry="" class="t-input js-phonemask-input js-tilda-rule " value="" placeholder="+1(999)999-9999" data-tilda-req="1" style="color:#000000; background-color:#ffffff; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" required>
                                                <script type="text/javascript">
                                                    if (!document.getElementById('t-phonemask-script')) {
                                                        (function(d, w, o) {
                                                            var n = d.getElementsByTagName(o)[0],
                                                                s = d.createElement(o),
                                                                f = function() {
                                                                    n.parentNode.insertBefore(s, n);
                                                                };
                                                            s.type = "text/javascript";
                                                            s.async = true;
                                                            s.id = 't-phonemask-script';
                                                            s.src = "https://static.tildacdn.com/js/tilda-phone-mask-1.1.min.js";
                                                            if (w.opera == "[object Opera]") {
                                                                d.addEventListener("DOMContentLoaded", f, false);
                                                            } else {
                                                                f();
                                                            }
                                                        })(document, window, 'script');
                                                    } else {
                                                        $(document).ready(function() {
                                                            if (typeof t_form_phonemask_load == 'function') {
                                                                t_form_phonemask_load($('#rec126338645 [data-phonemask-lid=1495646545048]'));
                                                            }
                                                        });
                                                    }
                                                </script>
                                                <div class="t-input-error"></div>
                                            </div>
                                        </div>
                                        <div class="t-input-group t-input-group_em" data-input-lid="1495646533382">
                                            <div class="t-input-block">
                                                <input type="text" autocomplete="email" name="Email" class="t-input js-tilda-rule " value="" placeholder="E-mail" data-tilda-req="1" data-tilda-rule="email" style="color:#000000; background-color:#ffffff; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" required>
                                                <div class="t-input-error"></div>
                                            </div>
                                        </div>
                                        <div class="t-input-group t-input-group_tx" data-input-lid="1508592754504">
                                            <div class="t-input-block">
                                                <div class="t-text" field="li_text__1508592754504" style="color:#ffffff">
                                                    <div style="font-size:20px;color:#ffffff;" data-customstyle="yes"> Дополнительный комментарий:
                                                        <br />
                                                    </div>
                                                </div>
                                                <div class="t-input-error"></div>
                                            </div>
                                        </div>
                                        <div class="t-input-group t-input-group_ta" data-input-lid="1508592700087">
                                            <div class="t-input-block">
                                                <textarea name="description" class="t-input js-tilda-rule " style="color:#000000; background-color:#ffffff; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;height:102px" rows="3"></textarea>
                                                <div class="t-input-error"></div>
                                            </div>
                                        </div>
                                        <div class="t-form__errorbox-middle">
                                            <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                                <div class="t-form__errorbox-text t-text t-text_md">
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                                                    <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="t-form__submit">
                                            <button type="submit" class="t-submit" style="color:#ffffff;background-color:#940808;border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px;">Отправить заявку</button>
                                        </div>
                                    </div>
                                    <div class="t-form__errorbox-bottom">
                                        <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                            <div class="t-form__errorbox-text t-text t-text_md">
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
{{--                            <div class="t698__form-bottom-text t-text t-text_xs" field="text">You agree with our Terms and Conditions</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #rec126338645 .t-input__vis-ph {
            color: #000000;
        }
    </style>
<style> .t-input-block .t-input:focus ~ .t-input__vis-ph, .t-input_has-content + .t-input__vis-ph { top: 10px; font-size: 12px; }</style>
    <script>
        function t_animateInputs(recid) {
            var el = $('#rec' + recid);
            var inputs = el.find('.t-input:not(.t-inputquantity):not(.t-input-phonemask__wrap):not(.t-input-phonemask)');
            el.find('.t-input-group:not(.t-input-group_da):not(.t-input-group_uw):not(.t-input-group_ri):not(.t-input-group_rg) .t-input-block, .t-datepicker__wrapper').css({
                'position': 'relative',
                'overflow': 'hidden'
            });
            inputs.each(function() {
                $(this).addClass('t-input_pvis');
                if (typeof $(this).attr('placeholder') != 'undefined' && $(this).attr('placeholder') != '') {
                    $(this).after('<div class="t-input__vis-ph">' + $(this).attr('placeholder') + '</div>');
                }
                $(this).attr('placeholder', '');
            });
            inputs.on("blur", function() {
                if ($(this).val() != '') {
                    $(this).addClass('t-input_has-content');
                } else {
                    $(this).removeClass('t-input_has-content');
                }
            });
            if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
                el.find('textarea:not(.t-input_bbonly)').css('padding-left', '17px');
                el.find('textarea.t-input_bbonly').css('text-indent', '-3px');
            }
        }
        $(document).ready(function() {
            setTimeout(function() {
                t_animateInputs('126338645');
            }, 500);
        })
    </script>
</div>
