<?php

include_once 'lib/ReCaptcha.php';
$recapch = new ReCaptcha();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Radio</title>
    <meta name="theme-color" content="#161719">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
</head>
<body>
<main>
    <div class="top-item">
        <div class="container">
            <header>
                <div class="row flex-md-nowrap justify-content-between align-items-center header-item">
                    <div class="col-md-6 col-lg-4 col-sm-6"><a class="header-logo text-dark" href="#">
                            <svg class="icon">
                                <use xlink:href="./img/sprites/sprite.svg#sms-logo"></use>
                            </svg></a></div>
                    <div class="col-md-6 col-lg-5 col-sm-6 d-flex justify-content-end align-items-center">
                        <div class="info">
                            <div class="phone-info">0542 655 345, 050 307 1271</div><a class="mail-info" href="mailto:fmvsumah@gmail.com">fmvsumah@gmail.com</a>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <section class="banner">
            <div class="container">
                <div class="banner-items">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="banner-title">Потрібна найдешевша, найшвидша та найефективніша реклама ?</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4"><a class="get-advertising" href="#" data-toggle="modal" data-target="#advertising-modal">Замовити рекламу на радіо</a></div>
                    </div>
                    <div class="banner-avatar-header">
                        <div class="banner-avatar first-position"><img class="img-fluid" src="./img/header-image-1.jpg"></div>
                        <div class="banner-avatar second-position"><img class="img-fluid" src="./img/header-image-3.jpg"></div>
                        <div class="banner-avatar third-position"><img class="img-fluid" src="./img/header-image-2.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop" style="background-image: url('./img/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle" style="background-image: url('./img/wave-mid.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom" style="background-image: url('./img/wave-bot.png')"></div>
            </div>
        </div>
    </div>
    <section class="price-table">
        <div class="container">
            <h4 class="price-table--title">ТОВ  “Суми медіа сервіс” до ваших послуг !!!<br>Реклама на найпопулярніших ФМ-станціях в Сумах</h4>
            <p>Вартість 1 сек. реклами в грн.,  без ПДВ</p>
            <div class="price-table-items">
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/roks_logo.png"></div>
                    <div class="price-table__frequency">89,1 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                </div>
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/kraina-logo.png"></div>
                    <div class="price-table__frequency">100,8 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                </div>
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/melodia_logo.png"></div>
                    <div class="price-table__frequency">101,4 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                </div>
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/hitfm_logo.png"></div>
                    <div class="price-table__frequency">103,4 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">5,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">6,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">5,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">6,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">5,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">2,0<span>грн./1сек.</span></div>
                    </div>
                </div>
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/relax_logo.png"></div>
                    <div class="price-table__frequency">105,1 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">3,5<span>грн./1сек.</span></div>
                    </div>
                </div>
                <div class="price-table-item">
                    <div class="price-table__logo"><img class="img-fluid" src="./img/rusradio_logo.png"></div>
                    <div class="price-table__frequency">105,6 МГц</div>
                    <div class="price-table__price">
                        <div class="time">6:59 - 10:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">10:59 - 12:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">12:59 - 15:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">15:59 - 17:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">17:59 - 19:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                    <div class="price-table__price">
                        <div class="time">19:59 - 6:59</div>
                        <div class="price">4,0<span>грн./1сек.</span></div>
                    </div>
                </div>
            </div>
            <ul>
                <li>- розміщення ролика першим або останнім в блоці + 25 %</li>
                <li>- розміщення ролика у фіксованому блоці + 10% (у грудні +20%)</li>
                <li>- сезонна націнка у період  15.11 – 31.12 - +20%</li>
            </ul>
        </div>
    </section>
    <section class="price-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="price-info-item">
                        <h3 class="price-info--title">Виготовлення рекламної аудіопродукції</h3>
                        <div class="price-info-table">
                            <div class="price-info-table--items">
                                <div class="price-info-table--header">Категорія складності</div>
                                <div class="price-info-table--header">Вартість, грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">Сценарій, текст</div>
                                <div class="price">від 50 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">I категорія – дикторський голос без музики</div>
                                <div class="price">від 200 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">II категорія – дикторський голос з музикою</div>
                                <div class="price">від 250 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">III категорія – 2-3 голоси, ефекти</div>
                                <div class="price">від 300 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">IV категорія – оригінальный ігровий (розробка авторського сце.priceрію, 2-3 голоси, ефекти)</div>
                                <div class="price">від 350 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">V категорія – оригінальний пісенний ролик</div>
                                <div class="price">від 1 000 грн.</div>
                            </div>
                            <div class="price-info-table--item">
                                <div class="category">Зміни, редакція готового ролику</div>
                                <div class="price">від 80 грн.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advertising-radio">
        <div class="container">
            <div class="advertising-radio-item row">
                <div class="col-md-6 col-lg-5">
                    <div class="advertising-radio--title mb-2 mb-md-0">Будемо раді співпраці з вами !!!</div>
                </div>
                <div class="col-md-6 col-lg-4"><a class="get-advertising mb-0" href="#" data-toggle="modal" data-target="#advertising-modal">Замовити рекламу на радіо</a></div>
            </div>
        </div>
    </section>
    <section class="our-works">
        <div class="container">
            <div class="our-works--title">Деякі наші роботи:</div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="our-work halloween">
                                <div class="our-work-info"><img src="./img/example1.jpg">
                                    <div class="our-work-name">Євробазар - Halloween 2018</div>
                                </div>
                                <div class="our-work-audio">
                                    <audio class="player" controls="">
                                        <source src="./audio/ria_7271_Євробазар_Halloween_2018.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our-work advertising">
                                <div class="our-work-info"><img src="./img/example2.jpg">
                                    <div class="our-work-name">Світ саун - реклама магазину</div>
                                </div>
                                <div class="our-work-audio">
                                    <audio class="player" controls="">
                                        <source src="./audio/ria_7444_Світ_саун-12_18_джингл.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our-work scanmix">
                                <div class="our-work-info"><img src="./img/example4.jpg">
                                    <div class="our-work-name">Scanmix - реклама магазину</div>
                                </div>
                                <div class="our-work-audio">
                                    <audio class="player" controls="">
                                        <source src="./audio/ria_7766_Сканмикс_диалог_32_грн.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our-work eurofinance">
                                <div class="our-work-info"><img src="./img/example5.jpg">
                                    <div class="our-work-name">Єврофінанс - реклама ломбарду</div>
                                </div>
                                <div class="our-work-audio">
                                    <audio class="player" controls="">
                                        <source src="./audio/ria_8123_Єврофінанс_04-06_07_19_Чорновола.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="our-work old-fortress"><img class="img-fluid" src="./img/example3_2.jpg">
                        <div class="our-work-info"><img src="./img/example3_1.jpg">
                            <div class="our-work-name">Стара Фортеця - реклама фестивалю</div>
                        </div>
                        <div class="our-work-audio">
                            <audio class="player" controls="">
                                <source src="./audio/ria_7982_Стара_Фортеця_2019.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="our-work fresh-wind">
                        <div class="our-work-info"><img src="./img/example6.jpg">
                            <div class="our-work-name">Свіжий вітер - магазин меблів</div>
                        </div>
                        <div class="our-work-audio">
                            <audio class="player" controls="">
                                <source src="./audio/ria_8160_СВ_джингл_до_15_08_19.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="our-work mrs">
                        <div class="our-work-info"><img src="./img/example7.jpg">
                            <div class="our-work-name">Пані - реклама магазину</div>
                        </div>
                        <div class="our-work-audio">
                            <audio class="player" controls="">
                                <source src="./audio/ria_8173_Пані 07_19_Інту.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="our-work polymin">
                        <div class="our-work-info"><img src="./img/example8.jpg">
                            <div class="our-work-name">Полімін - реклама магазину</div>
                        </div>
                        <div class="our-work-audio">
                            <audio class="player" controls="">
                                <source src="./audio/ria_8175_Полімін_Суми_1.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4"><a class="footer-logo" href="#">
                    <svg class="icon">
                        <use xlink:href="./img/sprites/sprite.svg#sms-logo"></use>
                    </svg></a>
                <div class="footer-info"><img src="./img/img-manager.jpg">
                    <div class="footer-info__head-info">Владимир Бойко<span>Керівник рекламної служби</span></div>
                </div>
                <div class="footer-info__phone">тел.: 0542 655 345</div>
                <div class="footer-info__phone">моб.: 050 307 1271</div>
                <div class="footer-info__email">e-mail: fmvsumah@gmail.com</div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="get-advertising-form">
                    <div class="get-advertising-form--title">Замовити рекламу на радіо:</div>
                    <form action="/" method="post" name="form-modal">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <input class="form-control" name="phone" value="<?= isset($_POST['phone'])? $_POST['phone'] : ''  ?>"
                                       type="text" placeholder="Телефон" required>
                                <input class="form-control" name="email" value="<?= isset($_POST['email'])? $_POST['email'] : ''  ?>"
                                       type="email" placeholder="E-mail" required>
                                <input class="form-control" name="compani" value="<?= isset($_POST['compani'])? $_POST['compani'] : ''  ?>"
                                       type="text" placeholder="Ім'я або назва компанії" required>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <textarea class="form-control" name="message" placeholder="Ваше замовлення" rows="5" required><?= isset($_POST['message'])? $_POST['message'] : ''  ?></textarea>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-4">
                                <div class="g-recaptcha" data-theme="dark" data-sitekey="<?= $recapch->html ?>"></div>
                              <div style="display: none" class="error set-message"></div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                                <button class="get-advertising-form__btn" type="submit">Відправити замовлення</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy-info">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p>Copyright  &copy; 2019 ТОВ  “Суми медіа сервіс”. All Rights Reserved.</p>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <div class="website-development">Разробка сайта –<a href="http://beatom.net/" target="_tblank"><img src="./img/beatom-logo.png"></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="advertising-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog advertising-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <svg class="icon">
                        <use xlink:href="./img/sprites/sprite.svg#close-icon"></use>
                    </svg>
                </button>
                <div class="get-advertising-form">
                    <div class="get-advertising-form--title">Замовити рекламу на радіо:</div>
                    <form action="/" method="post" name="form-footer">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <input class="form-control" name="phone" value="<?= isset($_POST['phone'])? $_POST['phone'] : ''  ?>"
                                       type="text" placeholder="Телефон" required>
                                <input class="form-control" name="email" value="<?= isset($_POST['email'])? $_POST['email'] : ''  ?>"
                                       type="email" placeholder="E-mail" required>
                                <input class="form-control" name="compani" value="<?= isset($_POST['compani'])? $_POST['compani'] : ''  ?>"
                                       type="text" placeholder="Ім'я або назва компанії" required>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <textarea class="form-control" name="message" placeholder="Ваше замовлення" rows="5" required><?= isset($_POST['message'])? $_POST['message'] : ''  ?></textarea>
                            </div>

                            <div class="col-md-12 col-lg-12 mb-4">
                                <div class="g-recaptcha" data-sitekey="<?= $recapch->html ?>"></div>
                              <div style="display: none;" class="error set-message"></div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                                <button class="get-advertising-form__btn" type="submit">Відправити замовлення</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/main-libs.min.js"></script>
<script>const players = Plyr.setup('.player');</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
    jQuery(document).ready(function($) {
        $('[name="form-modal"], [name="form-footer"]').submit(function (e) {
            e.preventDefault();
            var form = $(this).serialize();
            $.ajax({
                url: '/ajax.php',
                type: "post",
                data: {
                    form: form,
                    action: 'send-form'
                },
                beforeSend: function (data) {},
                success: function(data){
                    if(data.ok == false){
                        $('.set-message').show();
                        $('.set-message').html(data.message);
                    }
                    else {
                        $('[name="form-modal"], [name="form-footer"]').html(data.message);
                    }
                }
            });
        });
    });
</script>


</body>
</html>