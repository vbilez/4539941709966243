<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/animate.css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/send-text-input.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand_img.png"/>
                    <img class="visible-xs" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand_img_xs.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav header-menu">
                    <li><a href="#">Про нас <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#">Портфоліо <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="#">Контакти <i class="fa fa-angle-down"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav social-header hidden-sm hidden-xs">
                    <li><a href="#"><i class="base-default base-vimeo"></i></a></li>
                    <li><a href="#"><i class="base-default base-facebook"></i></a></li>
                    <li><a href="#"><i class="base-default base-youtube"></i></a></li>
                    <li><a href="#"><i class="base-default base-instagram"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h2 class="opacity-0 anim"><div class="parallelogram"><div class="parallelogram-inner-text">Привіт у</div></div><div class="parallelogram"><div class="parallelogram-inner-text"> Ліберті!</div></div> </h2>
            <p class="opacity-0">Розкажіть нам свою <br class="visible-xs">історію і ми зробимо <br class="visible-xs"> так, щоб ви її<br class="visible-xs"> запам'ятали на довго!</p>
            <div class="jumbotron-footer">
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-4 jumbotron-footer-list-item-num">1</div>
                    <div class="col-xs-8 parallelogram">
                        <div class="parallelogram-inner-text">унікальність</div>
                    </div>
                </div>
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-4 jumbotron-footer-list-item-num">2</div>
                    <div class="col-xs-8 parallelogram">
                        <div class="parallelogram-inner-text">концепція для вас</div>
                    </div>
                </div>
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-4 jumbotron-footer-list-item-num">3</div>
                    <div class="col-xs-8 parallelogram">
                        <div class="parallelogram-inner-text">підтримка та<br class="visible-xs"> партнерство</div>
                    </div>
                </div>
            </div>
            <div id="viewportInf" class="btn-info" style="position: absolute; top: 0; left: 30%; right: 30%; opacity: 0.7; background-color: transparent;">
                <p style="font-size: 12px;">width : </p>
                <p style="font-size: 12px;">height : </p>
            </div>
            <!--<button id="btn-anim-start" class="btn" style="position: fixed; left: 25px; bottom: 25px; background-color: #0b93d5">Animate</button>-->
            <!--<button id="btn-anim-reset" class="btn" style="position: fixed; bottom: 25px; left: 260px; background-color: #0b93d5">Reset</button>-->
        </div>
    </div>
    <div id="stripe" class="stripe-anim-start"></div>
</header>
<section class="our-team">
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-md-12">
                <div>
                    <div class="our-team-title">
                        <h4>Наша команда:</h4>
                        <h1>Rock & Roll</h1>
                        <h3>How we Rock & Roll</h3>
                    </div>
                </div>
                <div class="">
                    <div class="about-team-width clearfix">
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div>
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png"/>
                                <h3>Богдан</h3>
                            </div>
                            <p>Люблю творити прекрасне, ціную в людях щирість, відкритість та доброту. Обожнюю свою роботу але понад усе сім’ю! Вірю, що: любов преможе
                            усі «стіни».
                            Життєве кредо:
                            « Роби те що можиш, з тим що маєш й там де ти є.»</p>
                        </div>
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div>
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png"/>
                                <h3>Юра</h3>
                            </div>
                            <p>Люблю подорожувати, в людях ціную відповідальність, заповзятість, вміння правильно розставляти пріоритети, жертовність та самовіддачу. Вірю, що: « Кожен має своє призначення, та Богом дарований план для життя. Потрібно зрозуміти їх та усіма можливими інструментами втілити
                                це в дійсність.»</p>
                        </div>
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div>
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png"/>
                                <h3>Василь</h3>
                            </div>
                            <p>В Киеве Роман работал на позиции бренд-менеджера Lucky Strike в British American Tobacco. В 1998 году Роман вместе с партнером Дарко Скульским основали Radioaktive Film.

                                В 1998  Дарко и Роман основали первую в Украине продакшн компанию Radioaktive Film, которая уже 16 лет является лидером на украинском рынке.
                            </p>
                        </div>
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div>
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png"/>
                                <h3>Макс</h3>
                            </div>

                            <p>В Киеве Роман работал на позиции бренд-менеджера Lucky Strike в British American Tobacco. В 1998 году Роман вместе с партнером Дарко Скульским основали Radioaktive Film.

                                В 1998  Дарко и Роман основали первую в Украине продакшн компанию Radioaktive Film, которая уже 16 лет является лидером на украинском рынке.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 our-team-title-two">
                <h4>Як ми працюємо:</h4>
                <h1>How we work</h1>
                <h3>How we work</h3>
            </div>
            <div class="col-md-12 about-team-width-bottom clearfix">
                <div class="about-team-we-work2 clearfix">
                    <div class="col-md-4">
                        <img class="about-team-we-work img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-team1.jpeg"/>
                    </div>
                    <div class="col-md-8">
                        <h4>Розробка ідеї</h4>
                        <p>орієнтування на потреби клієнта, визначення цілей та аудиторії, генерування ідеї.</p>
                    </div>
                </div>

                <div class="about-team-we-work2 clearfix">
                    <div class="col-md-8">
                        <h4>Пре-продакшн</h4>
                        <p>пошук локацій, розробка сценарію, зображення за ключовими кадрами</p>
                    </div>
                    <div class="col-md-4">
                        <img class="about-team-we-work img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-team2.jpeg"/>
                    </div>
                </div>
                <div class="about-team-we-work2 clearfix">
                    <div class="col-md-4">
                        <img class="about-team-we-work img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-team3.jpeg"/>
                    </div>
                    <div class="col-md-8">
                        <h4>Продакшн</h4>
                        <p>зйомка вашого відео, професійний звукозапис</p>
                    </div>
                </div>
                <div class="about-team-we-work2 clearfix">
                    <div class="col-md-8">
                        <h4>Пост-продакшн</h4>
                        <p>монтаж/обробка/кольорокорекція відео, анімація, звук і т.д.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="about-team-we-work img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-team4.jpeg"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="wedding">
            <div class="row">
                <div class="wedding-title">Wedding</div>
                <div class="price-promotion">
                    <h1>What to buy</h1>
                    <h4>Відео пропозиції:</h4>
                    <h3>What to buy</h3>
                </div>
            </div>
            <div class="row wedding-promotion">
                <div class=" col-sm-6 col-md-4 clearfix">
                    <div class="wedding-img">Light
                        <img class="wedding-img-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/wedding-promotion1.jpeg"/>
                    </div>
                    <h3>Instagram-clip</h3>
                    <h4>в подарунок</h4>
                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>
                    <div class="wedding-img">300$</div>
                    <button type="submit" id="submit-order0" class="submit-order btn btn-primary" name="submit">Замовити</button>
                </div>
                <div class="col-sm-6 col-md-4 clearfix">
                    <div class="wedding-img">Pro
                        <img class="wedding-img-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/wedding-promoion2.jpeg"/>
                    </div>
                    <h3>Instagram-clip</h3>
                    <h4>в подарунок</h4>
                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>
                    <div class="wedding-img">500$</div>
                    <button type="submit" id="submit-order1" class="submit-order btn btn-primary" name="submit">Замовити</button>
                </div>
                <div class="col-sm-6 col-md-4 clearfix">
                    <div class="wedding-img">Pro+
                        <img class="wedding-img-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/wedding-promotion3.png"/>
                    </div>
                    <h3>Instagram-clip</h3>
                    <h4>в подарунок</h4>
                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>
                    <div class="wedding-img">800$</div>
                    <button type="submit" id="submit-order2" class="submit-order btn btn-primary" name="submit">Замовити</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brand-slider">
    <span style="display:block;height:40vh;background:#000;opacity:.7;"></span>
    <div class="container-fluid">
        <div class="row">

        </div>
    </div>
</section>
<footer>
    <div class="footer_grid">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-op">
                    <div class="col-md-4">
                        <h3>Контакти:</h3>
                        <div class="footer-text">
                            <a class="cellphone" href="tel:+38 063 275 28 61">+38 063 275 28 61</a><br>
                            <a class="cellphone" href="tel:+38 067 159 19 42">+38 067 159 19 42</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Latest Twitter</h3>
                        <div class="footer-menu">
                            <iframe style="border: none;">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <h3>Напишіть нам:</h3>
                            <div class="wrap">
                                <div class="mat-div">
                                    <label for="customer-email-address" class="mat-label">Email:</label>
                                    <input type="text" class="mat-input" id="customer-email-address">
                                </div>
                                <div class="mat-div">
                                    <label for="customer-name" class="mat-label">Повідомлення:</label>
                                    <input type="text" class="mat-input" id="customer-name">
                                </div>
                                <button class="submit-send-email">Надіслати:</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="footer-copy">
                <div class="row">
                    <div class="footer-navigation">
                        <ul>
                            <li><a href="#"><img alt="Logo" class="footer-logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand_img_sm.png"></a></li>
                            <li><a href="#">Про нас</a></li>
                            <li><a href="#">Портфоліо</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Новини</a></li>
                            <li><a href="#">Наші клієнти</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row social-connect" style="display:block !important">
                    <div class="social-button" style="display:block !important">
                        <div class="">
                            <section class="footer-social-section">
                                <span class="footer-social-icons-wrapper">
                                    <a href="#" target="_blank" title="Vimeo" style="display:inline-block !important"><i class="base-default base-vimeo"></i></a>
                                    <a href="#" target="_blank" title="Facebook" style="display:inline-block !important"><i class="base-default base-facebook"></i></a>
                                    <a href="#" target="_blank" title="Youtube" style="display:inline-block !important"><i class="base-default base-youtube"></i></a>
                                    <a href="#" target="_blank" title="Instagram" style="display:inline-block !important"><i class="base-default base-instagram"></i></a>
                                </span>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @created by web.adv.solution
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<!--for debug purpose-->
<script>
    $(document).ready(function () {
        $('#viewportInf p:first-child').append(function () {
            return $(window).width();
        })
        $('#viewportInf p:last-child').append(function () {
            return $(window).height();
        })
    });
</script>
<!--//for debug purpose-->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/anims.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/send-text-input.js" type="text/javascript"></script>
</body>
</html>


