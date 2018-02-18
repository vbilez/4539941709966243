<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/animate.css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intro-styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php if($currentSegment==$weddingpage){?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <?php }; ?>
    <?php wp_head(); ?>
</head>

<body>
<header>
    <video class="hidden-xs" autoplay loop id="video-background" poster="" muted>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video-background.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="hidden-xs-v" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand_img_lg.png"/></a>
                <!--todo : make correct brand logo mask on mobile-->
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav header-menu">
                    <li><a href="#ourteam">Про нас</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Портфоліо</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio-production">Production</a></li>
                            <li><a href="portfolio-wedding">Wedding</a></li>
                        </ul>
                    </li>
                    <li><a href="blog">Блог</a></li>
                    <li><a href="#footer">Контакти</a></li>
                    <li><a href="#brand-slider">Наші клієнти</a></li>
                </ul>
                <ul class="nav navbar-nav hidden-sm hidden-xs">
                    <li><a href="#"><i class="liberty-icon-vimeo"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-facebook"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-youtube"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-instagram"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h2 class="opacity-0 anim">
                <div class="parallelogram"><div class="parallelogram-inner-text">Save</div></div>
                <br class="visible-xs">
                <div class="parallelogram"><div class="parallelogram-inner-text">unforgetable</div></div>
            </h2>
            <div class="jumbotron-content opacity-0">
                <img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/img/zberezhemo.svg" alt="">
                <div>
                    <span class="visible-xs">Збережемо </span>вашу незабутню історію
                </div>
            </div>
            <div class="jumbotron-footer hidden-xs-h">
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-2 jumbotron-footer-list-item-num">1</div>
                    <div class="col-xs-10">
                        <div class="parallelogram">
                            <div class="parallelogram-inner-text">творчість</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-2 jumbotron-footer-list-item-num">2</div>
                    <div class="col-xs-10">
                        <div class="parallelogram">
                            <div class="parallelogram-inner-text">відповідальність</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 jumbotron-footer-list-item anim opacity-0">
                    <div class="col-xs-2 jumbotron-footer-list-item-num">3</div>
                    <div class="col-xs-10">
                        <div class="parallelogram">
                            <div class="parallelogram-inner-text">відкритість</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="viewportInf" class="btn-info" style="position: absolute; top: -120px; left: 30%; right: 30%; opacity: 0.7; background-color: transparent;">
                <p style="font-size: 12px;">width : </p>
                <p style="font-size: 12px;">height : </p>
            </div>
            <!--<button id="btn-anim-start" class="btn" style="position: fixed; left: 25px; bottom: 25px; background-color: #0b93d5">Animate</button>-->
            <!--<button id="btn-anim-reset" class="btn" style="position: fixed; bottom: 25px; left: 260px; background-color: #0b93d5">Reset</button>-->
        </div>
    </div>
    <div id="stripe" class="stripe-anim-start hidden-sm"></div>
</header>
<section class="our-team" id="ourteam">
    <!--todo : non responsive render of this section on mobile-->
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-md-12">
                <div>
                    <div class="our-team-title">
                        <div class="hidden-xs">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 1920 302.4" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#00F9F8;}
                                .st11{opacity:0.1;}
                                .st2{opacity:0.5;fill:#4D4F4E;}
                                .st3{fill:#4D4F4E;}
                            </style>
                                <g id="team-title">
                                    <g class="st11">
                                        <g>
                                            <path class="st3" d="M569,100.8h43c13.9,0,23.5,3.6,29.6,9.8c5.3,5.3,8.1,12.4,8.1,21.6c0,13.9-7.4,23.1-18.7,28l21.7,31.7h-29.1
                                            l-18.3-27.6h-11.1v27.6H569V100.8z M610.8,144.5c8.6,0,13.5-4.2,13.5-11.1c0-7.2-5.2-10.8-13.7-10.8h-16.5v21.8H610.8z"/>
                                            <path class="st3" d="M659.3,146.3c0-26.1,21.1-47.3,49.1-47.3s48.9,20.9,48.9,47.3c0,26.1-21.1,47.3-49.1,47.3
                                            S659.3,172.7,659.3,146.3z M731.6,146.3c0-13.1-9.5-24.6-23.4-24.6c-13.8,0-23,11.2-23,24.6c0,13.1,9.5,24.6,23.3,24.6
                                            C722.4,170.9,731.6,159.7,731.6,146.3z"/>
                                            <path class="st3" d="M767.4,146.3c0-26.5,20.4-47.3,48-47.3c18.6,0,30.2,8.1,38.2,19.2l-18.5,14.3c-5.2-6.5-11.3-10.5-20-10.5
                                            c-12.7,0-21.7,10.8-21.7,24.3c0,13.7,9,24.3,21.7,24.3c9.5,0,15.1-4.4,20.5-11.1l19,13.5c-8.6,11.8-20.2,20.5-40.3,20.5
                                            C788.3,193.6,767.4,173.7,767.4,146.3z"/>
                                            <path class="st3" d="M865.4,100.8h25.2v36.9l31.3-36.9h29.9l-34.5,39.1l35.6,51.9h-30.3L899.8,158l-9.2,10.3v23.5h-25.2V100.8z"
                                            />
                                            <path class="st3" d="M1014.5,184.1c-7.7,5.8-16.5,9.2-27,9.2c-18.6,0-32.5-9.8-32.5-26.5c0-11.3,6.1-19.9,18.5-25.5
                                            c-4.2-6-6-11.6-6-17.7c0-13.3,10.8-24.7,28.6-24.7c16.5,0,27,10.1,27,23.7c0,11.2-7.2,18.7-17.8,23.7l10.1,9.9
                                            c3-4.3,5.8-9.2,8.6-14.4l16.6,8.3c-3.8,6.9-7.7,13.4-12,19.2l12.2,12.1l-17,12.2L1014.5,184.1z M1001.6,170.9l-15-15.2
                                            c-4.5,2.7-6.5,6.2-6.5,10.1c0,5.3,4.4,9,10.7,9C994.5,174.8,998.1,173.2,1001.6,170.9z M1003,123.5c0-4.4-2.9-7.3-7-7.3
                                            c-4.3,0-7.3,3.3-7.3,8.3c0,3.5,1.6,6.5,4.7,10.4C999.9,132.1,1003,128.6,1003,123.5z"/>
                                            <path class="st3" d="M1051,100.8h43c13.9,0,23.5,3.6,29.6,9.8c5.3,5.3,8.1,12.4,8.1,21.6c0,13.9-7.4,23.1-18.7,28l21.7,31.7
                                            h-29.1l-18.3-27.6h-11.1v27.6H1051V100.8z M1092.9,144.5c8.6,0,13.5-4.2,13.5-11.1c0-7.2-5.2-10.8-13.7-10.8h-16.5v21.8H1092.9z"
                                            />
                                            <path class="st3" d="M1141.4,146.3c0-26.1,21.1-47.3,49.1-47.3s48.9,20.9,48.9,47.3c0,26.1-21.1,47.3-49.1,47.3
                                            S1141.4,172.7,1141.4,146.3z M1213.6,146.3c0-13.1-9.5-24.6-23.4-24.6c-13.8,0-23,11.2-23,24.6c0,13.1,9.5,24.6,23.3,24.6
                                            C1204.4,170.9,1213.6,159.7,1213.6,146.3z"/>
                                            <path class="st3" d="M1252.5,100.8h25.2v68.9h44.1v22.1h-69.3V100.8z"/>
                                            <path class="st3" d="M1332.6,100.8h25.2v68.9h44.1v22.1h-69.3V100.8z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st3" d="M872.5,104.8h1.3v8.1H885v-8.1h1.3v17.5H885v-8.2h-11.2v8.2h-1.3V104.8z"/>
                                            <path class="st3" d="M890.1,118.6c0-2.6,2.3-4.1,5.6-4.1c1.8,0,3,0.2,4.2,0.5v-0.5c0-2.6-1.6-3.9-4.2-3.9c-1.5,0-2.8,0.4-4,1
                                            l-0.5-1.1c1.4-0.7,2.8-1.1,4.5-1.1c1.7,0,3.1,0.5,4,1.4c0.9,0.8,1.3,2,1.3,3.6v7.9h-1.2v-2.1c-0.9,1.2-2.4,2.4-4.9,2.4
                                            C892.4,122.6,890.1,121.3,890.1,118.6z M900,117.6v-1.5c-1.1-0.3-2.5-0.6-4.3-0.6c-2.7,0-4.2,1.2-4.2,3c0,1.8,1.5,2.9,3.7,2.9
                                            C897.7,121.5,900,119.9,900,117.6z"/>
                                            <path class="st3" d="M905.5,109.6h1.2v11.6h7v-11.6h1.2v11.6h7v-11.6h1.2v12.7h-17.8V109.6z"/>
                                            <path class="st3" d="M926.9,118.6c0-2.6,2.3-4.1,5.6-4.1c1.8,0,3,0.2,4.2,0.5v-0.5c0-2.6-1.6-3.9-4.2-3.9c-1.5,0-2.8,0.4-4,1
                                            l-0.5-1.1c1.4-0.7,2.8-1.1,4.5-1.1c1.7,0,3.1,0.5,4,1.4c0.9,0.8,1.3,2,1.3,3.6v7.9h-1.2v-2.1c-0.9,1.2-2.4,2.4-4.9,2.4
                                            C929.2,122.6,926.9,121.3,926.9,118.6z M936.7,117.6v-1.5c-1.1-0.3-2.5-0.6-4.3-0.6c-2.7,0-4.2,1.2-4.2,3c0,1.8,1.5,2.9,3.7,2.9
                                            C934.5,121.5,936.7,119.9,936.7,117.6z"/>
                                            <path class="st3" d="M949.8,109.6h1.2v8.2l7.9-8.2h1.6l-5.6,5.6l5.7,7.1h-1.5l-5-6.2l-3.1,3.1v3.1h-1.2V109.6z"/>
                                            <path class="st3" d="M962.3,116c0-3.6,2.8-6.7,6.6-6.7c3.8,0,6.5,3,6.5,6.7c0,3.6-2.8,6.7-6.6,6.7
                                            C965.1,122.6,962.3,119.6,962.3,116z M974.1,116c0-3.1-2.4-5.5-5.2-5.5c-2.9,0-5.2,2.5-5.2,5.5c0,3.1,2.3,5.5,5.2,5.5
                                            C971.7,121.5,974.1,119,974.1,116z"/>
                                            <path class="st3" d="M979.2,109.6h1.1l5.2,7.3l5.2-7.3h1.1v12.7h-1.2v-10.6l-5.1,7l-5.1-7v10.6h-1.2V109.6z"/>
                                            <path class="st3" d="M995.4,118.6c0-2.6,2.3-4.1,5.6-4.1c1.8,0,3,0.2,4.2,0.5v-0.5c0-2.6-1.6-3.9-4.2-3.9c-1.5,0-2.8,0.4-4,1
                                            l-0.4-1.1c1.4-0.7,2.8-1.1,4.5-1.1c1.7,0,3.1,0.5,4,1.4c0.8,0.8,1.3,2,1.3,3.6v7.9h-1.2v-2.1c-0.9,1.2-2.4,2.4-4.9,2.4
                                            C997.7,122.6,995.4,121.3,995.4,118.6z M1005.2,117.6v-1.5c-1.1-0.3-2.5-0.6-4.3-0.6c-2.7,0-4.2,1.2-4.2,3c0,1.8,1.5,2.9,3.7,2.9
                                            C1003,121.5,1005.2,119.9,1005.2,117.6z"/>
                                            <path class="st3" d="M1010.8,109.6h1.2v5.7h8.5v-5.7h1.2v12.7h-1.2v-6h-8.5v6h-1.2V109.6z"/>
                                            <path class="st3" d="M1024.4,121.2h1.7c1.1-1.8,1.9-4.7,1.9-8.9v-2.7h8.5v11.6h2l-0.3,4.7h-1v-3.6h-11.6l-0.3,3.6h-1V121.2z
                                             M1035.3,121.2v-10.5h-6.1v2.3c0,3.4-0.7,6.5-1.7,8.2H1035.3z"/>
                                            <path class="st3" d="M1040.6,118.6c0-2.6,2.3-4.1,5.6-4.1c1.8,0,3,0.2,4.2,0.5v-0.5c0-2.6-1.6-3.9-4.2-3.9c-1.5,0-2.8,0.4-4,1
                                            l-0.4-1.1c1.4-0.7,2.8-1.1,4.5-1.1c1.7,0,3.1,0.5,4,1.4c0.8,0.8,1.3,2,1.3,3.6v7.9h-1.2v-2.1c-0.9,1.2-2.4,2.4-4.9,2.4
                                            C1042.9,122.6,1040.6,121.3,1040.6,118.6z M1050.4,117.6v-1.5c-1.1-0.3-2.5-0.6-4.3-0.6c-2.7,0-4.2,1.2-4.2,3
                                            c0,1.8,1.5,2.9,3.7,2.9C1048.2,121.5,1050.4,119.9,1050.4,117.6z"/>
                                            <path class="st3" d="M1055.8,109.6h1.6v2.1h-1.6V109.6z M1055.8,120.2h1.6v2.1h-1.6V120.2z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st3" d="M708.9,147.9h8.7v11.8h11.2v-11.8h8.7v31.5h-8.7v-12h-11.2v12h-8.7V147.9z"/>
                                            <path class="st3" d="M742,163.6c0-9,7.3-16.4,17-16.4s16.9,7.2,16.9,16.4c0,9-7.3,16.4-17,16.4C749.2,180,742,172.7,742,163.6z
                                             M767.1,163.6c0-4.5-3.3-8.5-8.1-8.5c-4.8,0-8,3.9-8,8.5c0,4.5,3.3,8.5,8.1,8.5C763.9,172.1,767.1,168.2,767.1,163.6z"/>
                                            <path class="st3" d="M776.6,147.9h9.2l5.5,18.2l6.1-18.3h7.5l6.1,18.3l5.5-18.2h9L815,179.6h-7.6l-6.3-18.1l-6.3,18.1h-7.6
                                            L776.6,147.9z"/>
                                            <path class="st3" d="M839.3,147.9h9.2l5.5,18.2l6.1-18.3h7.5l6.1,18.3l5.5-18.2h9l-10.5,31.7h-7.6l-6.3-18.1l-6.3,18.1h-7.6
                                            L839.3,147.9z"/>
                                            <path class="st3" d="M891.7,147.9H917v7.4h-16.7v4.8h15.1v6.9h-15.1v5h16.9v7.4h-25.6V147.9z"/>
                                            <path class="st3" d="M934.2,147.9h14.9c4.8,0,8.1,1.3,10.3,3.4c1.8,1.8,2.8,4.3,2.8,7.5c0,4.8-2.6,8-6.5,9.7l7.5,11h-10.1
                                            l-6.3-9.5h-3.8v9.5h-8.7V147.9z M948.7,163c3,0,4.7-1.4,4.7-3.8c0-2.5-1.8-3.7-4.7-3.7h-5.7v7.6H948.7z"/>
                                            <path class="st3" d="M965.5,163.6c0-9,7.3-16.4,17-16.4c9.7,0,16.9,7.2,16.9,16.4c0,9-7.3,16.4-17,16.4S965.5,172.7,965.5,163.6z
                                             M990.5,163.6c0-4.5-3.3-8.5-8.1-8.5c-4.8,0-8,3.9-8,8.5c0,4.5,3.3,8.5,8.1,8.5C987.3,172.1,990.5,168.2,990.5,163.6z"/>
                                            <path class="st3" d="M1002.9,163.6c0-9.2,7.1-16.4,16.6-16.4c6.4,0,10.4,2.8,13.2,6.7l-6.4,4.9c-1.8-2.3-3.9-3.6-6.9-3.6
                                            c-4.4,0-7.5,3.7-7.5,8.4c0,4.7,3.1,8.4,7.5,8.4c3.3,0,5.2-1.5,7.1-3.8l6.6,4.7c-3,4.1-7,7.1-13.9,7.1
                                            C1010.1,180,1002.9,173.1,1002.9,163.6z"/>
                                            <path class="st3" d="M1036.8,147.9h8.7v12.8l10.8-12.8h10.3l-11.9,13.5l12.3,18h-10.5l-7.9-11.7l-3.2,3.6v8.1h-8.7V147.9z"/>
                                            <path class="st3" d="M1088.4,176.7c-2.7,2-5.7,3.2-9.4,3.2c-6.4,0-11.2-3.4-11.2-9.2c0-3.9,2.1-6.9,6.4-8.8
                                            c-1.4-2.1-2.1-4-2.1-6.1c0-4.6,3.7-8.5,9.9-8.5c5.7,0,9.4,3.5,9.4,8.2c0,3.9-2.5,6.5-6.2,8.2l3.5,3.4c1-1.5,2-3.2,3-5l5.8,2.9
                                            c-1.3,2.4-2.7,4.6-4.1,6.7l4.2,4.2l-5.9,4.2L1088.4,176.7z M1083.9,172.1l-5.2-5.3c-1.6,0.9-2.3,2.2-2.3,3.5
                                            c0,1.8,1.5,3.1,3.7,3.1C1081.5,173.5,1082.7,172.9,1083.9,172.1z M1084.4,155.7c0-1.5-1-2.5-2.4-2.5c-1.5,0-2.5,1.1-2.5,2.9
                                            c0,1.2,0.5,2.3,1.6,3.6C1083.4,158.7,1084.4,157.5,1084.4,155.7z"/>
                                            <path class="st3" d="M1101,147.9h14.9c4.8,0,8.1,1.3,10.3,3.4c1.8,1.8,2.8,4.3,2.8,7.5c0,4.8-2.6,8-6.5,9.7l7.5,11h-10.1
                                            l-6.3-9.5h-3.8v9.5h-8.7V147.9z M1115.5,163c3,0,4.7-1.4,4.7-3.8c0-2.5-1.8-3.7-4.7-3.7h-5.7v7.6H1115.5z"/>
                                            <path class="st3" d="M1132.3,163.6c0-9,7.3-16.4,17-16.4c9.7,0,16.9,7.2,16.9,16.4c0,9-7.3,16.4-17,16.4
                                            S1132.3,172.7,1132.3,163.6z M1157.3,163.6c0-4.5-3.3-8.5-8.1-8.5c-4.8,0-8,3.9-8,8.5c0,4.5,3.3,8.5,8.1,8.5
                                            C1154.1,172.1,1157.3,168.2,1157.3,163.6z"/>
                                            <path class="st3" d="M1170.8,147.9h8.7v23.8h15.3v7.6h-24V147.9z"/>
                                            <path class="st3" d="M1198.5,147.9h8.7v23.8h15.3v7.6h-24V147.9z"/>
                                        </g>
                                    </g>
                                </g>
                        </svg>
                        </div>
                        <div class="visible-xs">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="262.7 374.3 99.3 43.3" style="enable-background:new 262.7 374.3 99.3 43.3;" xml:space="preserve">
                            <style type="text/css">
                                .st0{opacity:0.1;}
                                .st1{fill:#4D4F4E;}
                                .st2{fill:#00F9F8;}
                            </style>
                                <g id="mobile-team-title">
                                    <g class="st0">
                                        <g>
                                            <path class="st1" d="M265.7,394.7v-18.1h8.5c2.6,0,4.6,0.6,5.9,1.9c1.1,1.1,1.6,2.5,1.6,4.3c0,1.3-0.3,2.5-1,3.4
                c-0.6,0.9-1.6,1.6-2.7,2.1l4.3,6.3h-5.8l-3.6-5.5h-2.2v5.5H265.7z M270.8,385.3h3.3c0.9,0,1.5-0.2,2-0.6c0.5-0.4,0.7-0.9,0.7-1.6
                c0-0.7-0.2-1.2-0.7-1.6s-1.1-0.5-2-0.5h-3.3L270.8,385.3L270.8,385.3z"/>
                                            <path class="st1" d="M283.7,385.6c0-1.3,0.3-2.5,0.8-3.7c0.5-1.1,1.2-2.2,2-3c0.9-0.8,1.9-1.5,3.1-2s2.5-0.7,3.9-0.7
                c1.4,0,2.6,0.3,3.9,0.7s2.2,1.1,3.1,2c0.9,0.8,1.5,1.8,2,3c0.5,1.1,0.7,2.4,0.7,3.7c0,1.3-0.3,2.5-0.7,3.7c-0.5,1.1-1.2,2.2-2,3
                c-0.9,0.8-1.9,1.5-3.1,2s-2.5,0.7-3.9,0.7c-1.8,0-3.5-0.4-5-1.2c-1.5-0.8-2.6-2-3.5-3.4C284.1,388.9,283.7,387.3,283.7,385.6z
                 M288.9,385.6c0,1.3,0.4,2.5,1.3,3.4c0.9,1,2,1.4,3.3,1.4s2.5-0.5,3.3-1.4c0.9-1,1.3-2.1,1.3-3.5c0-1.3-0.4-2.5-1.3-3.4
                c-0.9-1-2-1.4-3.3-1.4c-1.3,0-2.4,0.5-3.3,1.4C289.3,383.1,288.9,384.2,288.9,385.6z"/>
                                            <path class="st1" d="M305.2,385.6c0-1.3,0.3-2.6,0.7-3.7s1.1-2.2,2-3c0.8-0.8,1.8-1.5,3-2s2.5-0.7,3.8-0.7c3.2,0,5.8,1.3,7.6,3.8
                l-3.7,2.9c-1.1-1.4-2.5-2.1-4-2.1c-1.2,0-2.3,0.5-3.1,1.4c-0.8,1-1.2,2.1-1.2,3.5c0,1.4,0.4,2.6,1.2,3.5c0.8,0.9,1.8,1.4,3.1,1.4
                c0.9,0,1.6-0.2,2.3-0.5c0.6-0.4,1.2-0.9,1.8-1.7l3.8,2.7c-0.6,0.8-1.3,1.5-1.9,2.1c-0.7,0.6-1.6,1-2.6,1.4
                c-1.1,0.4-2.2,0.5-3.5,0.5c-1.7,0-3.3-0.4-4.7-1.2s-2.5-1.9-3.4-3.4C305.6,389,305.2,387.4,305.2,385.6z"/>
                                            <path class="st1" d="M324.7,394.7v-18.1h5v7.3l6.2-7.3h5.9l-6.9,7.8l7.1,10.3h-6l-4.6-6.7l-1.8,2v4.7H324.7z"/>
                                            <path class="st1" d="M342.5,401.7c0-2.4,1.3-4.1,3.8-5.3c-0.8-1.2-1.2-2.4-1.2-3.6c0-1.5,0.5-2.7,1.6-3.7c1.1-1,2.5-1.5,4.3-1.5
                c1.7,0,3,0.5,4,1.4s1.5,2.1,1.5,3.6c0,2.1-1.2,3.7-3.7,4.9l2.1,2c0.6-0.8,1.2-1.8,1.8-3l3.4,1.7c-0.8,1.5-1.7,2.9-2.5,4l2.5,2.5
                l-3.5,2.5l-1.9-1.9c-1.7,1.2-3.5,1.9-5.6,1.9c-2,0-3.6-0.5-4.8-1.4C343.1,404.6,342.5,403.4,342.5,401.7z M347.7,401.5
                c0,0.5,0.2,1,0.6,1.3c0.4,0.4,0.9,0.5,1.6,0.5s1.4-0.3,2.2-0.8l-3.1-3.1C348.1,399.9,347.7,400.6,347.7,401.5z M349.5,393
                c0,0.6,0.3,1.3,1,2.1c0.7-0.3,1.2-0.6,1.5-1c0.3-0.4,0.5-0.8,0.5-1.3c0-0.4-0.1-0.8-0.4-1.1c-0.3-0.3-0.6-0.4-1.1-0.4
                s-0.8,0.2-1.1,0.5C349.6,392,349.5,392.5,349.5,393z"/>
                                            <path class="st1" d="M265.7,415.8V397h8.9c2.7,0,4.8,0.7,6.1,2c1.1,1.1,1.7,2.6,1.7,4.5c0,1.4-0.4,2.5-1,3.5
                c-0.7,1-1.6,1.7-2.8,2.2l4.5,6.6h-6l-3.8-5.7h-2.3v5.7H265.7z M271,406h3.4c0.9,0,1.6-0.2,2.1-0.6c0.5-0.4,0.7-1,0.7-1.7
                c0-0.7-0.3-1.3-0.7-1.6c-0.5-0.4-1.2-0.6-2.1-0.6H271L271,406L271,406z"/>
                                            <path class="st1" d="M284.4,406.4c0-1.3,0.3-2.6,0.8-3.8s1.2-2.2,2.1-3.1c0.9-0.9,2-1.6,3.2-2.1c1.3-0.5,2.6-0.8,4-0.8
                c1.4,0,2.8,0.3,4,0.8c1.2,0.5,2.3,1.2,3.2,2.1c0.9,0.9,1.6,1.9,2.1,3.1c0.5,1.2,0.8,2.5,0.8,3.8c0,1.3-0.3,2.6-0.8,3.8
                s-1.2,2.2-2.1,3.1c-0.9,0.9-2,1.6-3.2,2.1c-1.2,0.5-2.6,0.8-4,0.8c-1.9,0-3.6-0.4-5.2-1.3c-1.6-0.9-2.7-2-3.6-3.5
                C284.9,409.8,284.4,408.2,284.4,406.4z M289.8,406.4c0,1.4,0.4,2.6,1.4,3.6c0.9,1,2.1,1.5,3.4,1.5c1.4,0,2.6-0.5,3.4-1.5
                s1.3-2.2,1.3-3.6s-0.4-2.6-1.4-3.6c-0.9-1-2.1-1.5-3.5-1.5s-2.5,0.5-3.4,1.5S289.8,405,289.8,406.4z"/>
                                            <path class="st1" d="M307.4,415.8V397h5.2v14.2h9.1v4.6L307.4,415.8L307.4,415.8z"/>
                                            <path class="st1" d="M323.9,415.8V397h5.2v14.2h9.1v4.6L323.9,415.8L323.9,415.8z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st1" d="M295.2,387.9v-2.8h0.2v1.3h1.8v-1.3h0.2v2.8h-0.2v-1.3h-1.8v1.3H295.2z"/>
                                            <path class="st1" d="M298,387.3c0-0.2,0.1-0.4,0.3-0.5c0.2-0.1,0.4-0.2,0.6-0.2c0.2,0,0.4,0,0.7,0.1v-0.1c0-0.2-0.1-0.4-0.2-0.4
                c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.4,0.1-0.6,0.2l-0.1-0.2c0.3-0.1,0.5-0.2,0.7-0.2c0.3,0,0.5,0.1,0.6,0.2
                c0.1,0.1,0.2,0.3,0.2,0.6v1.2h-0.2v-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1,0-0.3,0-0.4-0.1
                c-0.1,0-0.2-0.1-0.3-0.2C298,387.6,298,387.5,298,387.3z M298.2,387.3c0,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.3,0.1,0.4,0.1
                c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.3,0.2-0.4V387c-0.2-0.1-0.4-0.1-0.7-0.1s-0.4,0-0.5,0.1
                C298.2,387.1,298.2,387.2,298.2,387.3z"/>
                                            <path class="st1" d="M300.4,387.9v-2h0.2v1.8h1.1v-1.8h0.2v1.8h1.1v-1.8h0.2v2H300.4z"/>
                                            <path class="st1" d="M303.8,387.3c0-0.2,0.1-0.4,0.3-0.5c0.2-0.1,0.4-0.2,0.6-0.2c0.2,0,0.4,0,0.7,0.1v-0.1
                c0-0.2-0.1-0.4-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.4,0.1-0.6,0.2l-0.1-0.2c0.3-0.1,0.5-0.2,0.7-0.2
                c0.3,0,0.5,0.1,0.6,0.2c0.1,0.1,0.2,0.3,0.2,0.6v1.2h-0.2v-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.1-0.4,0.1
                c-0.1,0-0.3,0-0.4-0.1c-0.1,0-0.2-0.1-0.3-0.2C303.8,387.6,303.8,387.5,303.8,387.3z M304,387.3c0,0.2,0.1,0.3,0.2,0.4
                c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.3,0.2-0.4V387c-0.2-0.1-0.4-0.1-0.7-0.1c-0.2,0-0.4,0-0.5,0.1
                C304,387.1,304,387.2,304,387.3z"/>
                                            <path class="st1" d="M307.4,387.9v-2h0.2v1.3l1.2-1.3h0.3l-0.9,0.9l0.9,1.1h-0.3l-0.8-1l-0.5,0.5v0.5L307.4,387.9L307.4,387.9z"
                                            />
                                            <path class="st1" d="M309.4,386.9c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.4-0.1
                c0.2,0,0.4,0,0.5,0.2c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.1,0.4,0.1,0.5c0,0.2,0,0.4-0.1,0.5c-0.1,0.2-0.2,0.3-0.4,0.4
                c-0.2,0.1-0.4,0.2-0.5,0.2c-0.2,0-0.3,0-0.4-0.1s-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.4C309.4,387.2,309.4,387.1,309.4,386.9
                z M309.6,386.9c0,0.3,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.3c0.2,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                c0.1-0.1,0.1-0.3,0.1-0.4c0-0.3-0.1-0.4-0.3-0.6c-0.2-0.2-0.4-0.3-0.6-0.3c-0.2,0-0.3,0-0.4,0.1c-0.1,0.1-0.2,0.2-0.3,0.3
                C309.7,386.6,309.6,386.8,309.6,386.9z"/>
                                            <path class="st1" d="M312.1,387.9v-2h0.2l0.8,1.1l0.8-1.1h0.2v2h-0.2v-1.7l-0.8,1.1l-0.8-1.1v1.7H312.1z"/>
                                            <path class="st1" d="M314.6,387.3c0-0.2,0.1-0.4,0.3-0.5s0.4-0.2,0.6-0.2c0.2,0,0.4,0,0.7,0.1v-0.1c0-0.2-0.1-0.4-0.2-0.4
                c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.4,0.1-0.6,0.2l-0.1-0.2c0.3-0.1,0.5-0.2,0.7-0.2c0.3,0,0.5,0.1,0.6,0.2
                c0.1,0.1,0.2,0.3,0.2,0.6v1.2h-0.2v-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1,0-0.3,0-0.4-0.1
                c-0.1,0-0.2-0.1-0.3-0.2C314.7,387.6,314.6,387.5,314.6,387.3z M314.9,387.3c0,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.3,0.1,0.4,0.1
                c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.3,0.2-0.4V387c-0.2-0.1-0.4-0.1-0.7-0.1s-0.4,0-0.5,0.1C315,387.1,314.9,387.2,314.9,387.3
                z"/>
                                            <path class="st1" d="M317.1,387.9v-2h0.2v0.9h1.3v-0.9h0.2v2h-0.2v-1h-1.3v1H317.1z"/>
                                            <path class="st1" d="M319.2,387.7h0.3c0.2-0.3,0.3-0.8,0.3-1.4v-0.4h1.3v1.8h0.3l0,0.7h-0.2v-0.6h-1.8l0,0.6h-0.2L319.2,387.7
                L319.2,387.7z M319.7,387.7h1.2v-1.7h-1v0.4c0,0.3,0,0.5-0.1,0.7C319.9,387.4,319.8,387.6,319.7,387.7z"/>
                                            <path class="st1" d="M321.8,387.3c0-0.2,0.1-0.4,0.3-0.5c0.2-0.1,0.4-0.2,0.6-0.2c0.2,0,0.4,0,0.7,0.1v-0.1
                c0-0.2-0.1-0.4-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.4,0.1-0.6,0.2l-0.1-0.2c0.3-0.1,0.5-0.2,0.7-0.2
                c0.3,0,0.5,0.1,0.6,0.2c0.1,0.1,0.2,0.3,0.2,0.6v1.2h-0.2v-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.1-0.4,0.1
                c-0.1,0-0.3,0-0.4-0.1c-0.1,0-0.2-0.1-0.3-0.2C321.8,387.6,321.8,387.5,321.8,387.3z M322,387.3c0,0.2,0.1,0.3,0.2,0.4
                c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.3,0.2-0.4V387c-0.2-0.1-0.4-0.1-0.7-0.1s-0.4,0-0.5,0.1
                C322.1,387.1,322,387.2,322,387.3z"/>
                                            <path class="st1" d="M324.2,386.2v-0.4h0.3v0.4H324.2z M324.2,387.9v-0.4h0.3v0.4H324.2z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st1" d="M269.3,396.9v-5h1.4v1.9h1.8V392h1.4v5h-1.4V395h-1.8v1.9H269.3z"/>
                                            <path class="st1" d="M274.5,394.4c0-0.4,0.1-0.7,0.2-1s0.3-0.6,0.6-0.8c0.2-0.2,0.5-0.4,0.9-0.5c0.3-0.1,0.7-0.2,1.1-0.2
                c0.4,0,0.7,0.1,1.1,0.2c0.3,0.1,0.6,0.3,0.9,0.5c0.2,0.2,0.4,0.5,0.5,0.8c0.1,0.3,0.2,0.7,0.2,1c0,0.4-0.1,0.7-0.2,1
                s-0.3,0.6-0.6,0.8c-0.2,0.2-0.5,0.4-0.9,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.4c-0.4-0.2-0.7-0.5-1-0.9
                C274.6,395.4,274.5,394.9,274.5,394.4z M275.9,394.4c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.5,0.4,0.9,0.4s0.7-0.1,0.9-0.4
                c0.2-0.3,0.4-0.6,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.3-0.3-0.5-0.4-0.9-0.4s-0.7,0.1-0.9,0.4C276,393.7,275.9,394.1,275.9,394.4z"/>
                                            <path class="st1" d="M280.2,392h1.5l0.9,2.9l1-2.9h1.2l1,2.9l0.9-2.9h1.4l-1.7,5h-1.2l-1-2.9l-1,2.9h-1.2L280.2,392z"/>
                                            <path class="st1" d="M290.1,392h1.5l0.9,2.9l1-2.9h1.2l1,2.9l0.9-2.9h1.4l-1.7,5H295l-1-2.9l-1,2.9h-1.2L290.1,392z"/>
                                            <path class="st1" d="M298.4,396.9v-5h4v1.2h-2.6v0.8h2.4v1.1h-2.4v0.8h2.7v1.2L298.4,396.9L298.4,396.9z"/>
                                            <path class="st1" d="M305.1,396.9v-5h2.4c0.7,0,1.3,0.2,1.6,0.5c0.3,0.3,0.4,0.7,0.4,1.2c0,0.4-0.1,0.7-0.3,0.9
                c-0.2,0.3-0.4,0.4-0.7,0.6l1.2,1.8h-1.6l-1-1.5h-0.6v1.5C306.5,396.9,305.1,396.9,305.1,396.9z M306.5,394.3h0.9
                c0.2,0,0.4-0.1,0.5-0.2c0.1-0.1,0.2-0.3,0.2-0.4s-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2h-0.9V394.3z"/>
                                            <path class="st1" d="M310,394.4c0-0.4,0.1-0.7,0.2-1c0.1-0.3,0.3-0.6,0.6-0.8c0.2-0.2,0.5-0.4,0.9-0.5c0.3-0.1,0.7-0.2,1.1-0.2
                c0.4,0,0.7,0.1,1.1,0.2c0.3,0.1,0.6,0.3,0.9,0.5c0.2,0.2,0.4,0.5,0.5,0.8s0.2,0.7,0.2,1c0,0.4-0.1,0.7-0.2,1
                c-0.1,0.3-0.3,0.6-0.6,0.8c-0.2,0.2-0.5,0.4-0.9,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.4c-0.4-0.2-0.7-0.5-1-0.9
                C310.1,395.4,310,394.9,310,394.4z M311.4,394.4c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.5,0.4,0.9,0.4s0.7-0.1,0.9-0.4
                c0.2-0.3,0.4-0.6,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.3-0.3-0.5-0.4-0.9-0.4s-0.7,0.1-0.9,0.4C311.5,393.7,311.4,394.1,311.4,394.4z"/>
                                            <path class="st1" d="M315.9,394.4c0-0.4,0.1-0.7,0.2-1c0.1-0.3,0.3-0.6,0.5-0.8c0.2-0.2,0.5-0.4,0.8-0.5c0.3-0.1,0.7-0.2,1.1-0.2
                c0.9,0,1.6,0.4,2.1,1.1l-1,0.8c-0.3-0.4-0.7-0.6-1.1-0.6c-0.4,0-0.6,0.1-0.9,0.4c-0.2,0.3-0.3,0.6-0.3,1s0.1,0.7,0.3,1
                c0.2,0.3,0.5,0.4,0.9,0.4c0.3,0,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.5-0.4l1.1,0.7c-0.2,0.2-0.4,0.4-0.5,0.6
                c-0.2,0.2-0.4,0.3-0.7,0.4c-0.3,0.1-0.6,0.2-1,0.2c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-0.9-0.9
                C316,395.4,315.9,394.9,315.9,394.4z"/>
                                            <path class="st1" d="M321.3,396.9v-5h1.4v2l1.7-2h1.6l-1.9,2.1l1.9,2.8h-1.7l-1.2-1.8l-0.5,0.6v1.3
                C322.6,396.9,321.3,396.9,321.3,396.9z"/>
                                            <path class="st1" d="M326.2,395.6c0-0.6,0.4-1.1,1-1.4c-0.2-0.3-0.3-0.6-0.3-1c0-0.4,0.1-0.7,0.4-1c0.3-0.3,0.7-0.4,1.1-0.4
                c0.4,0,0.8,0.1,1.1,0.4c0.3,0.3,0.4,0.6,0.4,1c0,0.6-0.3,1-1,1.3l0.5,0.5c0.2-0.2,0.3-0.5,0.5-0.8l0.9,0.4
                c-0.2,0.4-0.4,0.8-0.7,1.1l0.7,0.6L330,397l-0.5-0.5c-0.4,0.3-0.9,0.5-1.5,0.5c-0.5,0-1-0.1-1.3-0.4
                C326.3,396.4,326.2,396,326.2,395.6z M327.5,395.5c0,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.6-0.2
                l-0.8-0.8C327.6,395.1,327.5,395.3,327.5,395.5z M328,393.3c0,0.2,0.1,0.4,0.3,0.6c0.2-0.1,0.3-0.2,0.4-0.3
                c0.1-0.1,0.1-0.2,0.1-0.4s0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1C328.1,393,328,393.1,328,393.3z"/>
                                            <path class="st1" d="M331.4,396.9v-5h2.4c0.7,0,1.3,0.2,1.6,0.5c0.3,0.3,0.4,0.7,0.4,1.2c0,0.4-0.1,0.7-0.3,0.9
                c-0.2,0.3-0.4,0.4-0.7,0.6l1.2,1.8h-1.6l-1-1.5h-0.6v1.5C332.8,396.9,331.4,396.9,331.4,396.9z M332.8,394.3h0.9
                c0.2,0,0.4-0.1,0.5-0.2c0.1-0.1,0.2-0.3,0.2-0.4s-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2h-0.9V394.3z"/>
                                            <path class="st1" d="M336.3,394.4c0-0.4,0.1-0.7,0.2-1c0.1-0.3,0.3-0.6,0.6-0.8c0.2-0.2,0.5-0.4,0.9-0.5c0.3-0.1,0.7-0.2,1.1-0.2
                c0.4,0,0.7,0.1,1.1,0.2c0.3,0.1,0.6,0.3,0.9,0.5c0.2,0.2,0.4,0.5,0.5,0.8c0.1,0.3,0.2,0.7,0.2,1c0,0.4-0.1,0.7-0.2,1
                s-0.3,0.6-0.6,0.8c-0.2,0.2-0.5,0.4-0.9,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.4c-0.4-0.2-0.7-0.5-1-0.9
                C336.4,395.4,336.3,394.9,336.3,394.4z M337.7,394.4c0,0.4,0.1,0.7,0.4,1c0.3,0.3,0.5,0.4,0.9,0.4s0.7-0.1,0.9-0.4
                c0.2-0.3,0.4-0.6,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.3-0.3-0.5-0.4-0.9-0.4c-0.4,0-0.7,0.1-0.9,0.4
                C337.9,393.7,337.7,394.1,337.7,394.4z"/>
                                            <path class="st1" d="M342.4,396.9v-5h1.4v3.8h2.4v1.2H342.4z"/>
                                            <path class="st1" d="M346.8,396.9v-5h1.4v3.8h2.4v1.2H346.8z"/>
                                        </g>
                                    </g>
                                </g>
                        </svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="about-team-width clearfix">
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div class="wtp">
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg"/>
                                Богдан
                            </div>
                            <p>Люблю творити прекрасне, ціную в людях щирість, відкритість та доброту. Обожнюю свою роботу але понад усе сім’ю!<span style="font-weight: bold; font-size: 21px"> Вірю, що:</span> любов преможе
                                усі «стіни». <br><span style="font-weight: bold; font-size: 21px">Життєве кредо:</span><br> « Роби те що можиш, з тим що маєш й там де ти є.»</p>
                        </div>

                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div class="wtp">
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg"/>
                                Юра
                            </div>
                            <p>Люблю подорожувати, в людях ціную відповідальність, заповзятість, вміння правильно розставляти пріоритети, жертовність та самовіддачу. <span style="font-weight: bold; font-size: 21px">Вірю, що: </span>« Кожен має своє призначення, та Богом дарований план для життя. Потрібно зрозуміти їх та усіма можливими інструментами втілити
                                це в дійсність.»</p>
                        </div>
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div class="wtp">
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg"/>
                                Юрій
                            </div>
                            <p>Диктор, актор, ведучий (озвучка рекламних проектів, привітальних та жартівливих матеріалів), учасник дуету MC wedding Terti Pliatsky. Автор Youtube-каналу Storm Group, актор християнського театру «Еммануїл» "</p>
                        </div>
                        <div class="about-team col-sm-6 col-md-3 clearfix">
                            <div class="wtp">
                                <img class="about-team-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg"/>
                                Макс
                            </div>
                            <p>В Киеве Роман работал на позиции бренд-менеджера Lucky Strike в British American Tobacco. В 1998 году Роман вместе с партнером Дарко Скульским основали Radioaktive Film.

                                В 1998  Дарко и Роман основали первую в Украине продакшн компанию Radioaktive Film, которая уже 16 лет является лидером на украинском рынке.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($currentSegment==$productionpage){include('_partials/_how_we_work.php');}?>
</section>
<!--todo: fix portfolio animation window width on xs-->
<!--todo: make animation work on scroll on mobile-->
<section class="portfolio">
    <img class="feather-img feather-img-bg-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_top_bg.jpg" alt="">
    <div class="intro-title production-title opacity-0"><a href="portfolio-production">Production</a></div>
    <img class="feather-img feather-img-bg-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_bottom_bg.jpg" alt="">
    <div class="intro-title wedding-title opacity-0" style=""><a href="portfolio-wedding">Wedding</a></div>
    <img class="opacity-0" id="stroke-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_stroke.png" alt="" usemap="#strokemap">
    <span class="stroke"></span>
</section>

<?php if($currentSegment==$weddingpage){ {include('_partials/_wedding_pricing.php');}} ?>

<?php
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
//$numSegments = count($segments);
$currentSegment = $segments[1];

$currentSegment=urldecode($currentSegment);

if($currentSegment=='wedding' || $currentSegment=='production' || $currentSegment=='thankyou')
{
    if($currentSegment=='wedding')    get_template_part( 'wedding' );
    if($currentSegment=='production')    get_template_part( 'production' );

    if($currentSegment=='thankyou')   {
        //$ty=1;$mailcontent=   get_template_part( 'content' );
    }
}
else {
    if($currentSegment=="")    {}
    //else{        get_template_part( 'content' );   }

}
?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<?php if($currentSegment==$weddingpage){?>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/brandslider.js" type="text/javascript"></script>
<?php }; ?>
<!--for debug purpose-->

<?php wp_footer(); ?>
<!--todo : remove below script on production-->
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
<script src="<?php echo get_template_directory_uri(); ?>/js/intro-anims.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/send-text-input.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--todo: find out if QTransform.js matters in the project and remove if not-->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/bower_components/QTransform/QTransform.js" type="text/javascript"></script>-->
<!--todo : take away jquery.rwdImageMaps.min.js from index file-->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jQuery-rwdImageMaps/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function validateEmail(sEmail) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
</script>
<script type="text/javascript">
    function showHide() {

        /*
         var div = document.getElementById("hidden_div");
         if (div.style.display == 'none') {
         div.style.display = '';
         }
         else {
         div.style.display = 'none';
         }
         */
        if(validateEmail($('#customer-email-address').val()))
        {
            $('#emailmsg').hide();
            $('#submit-button').click();
        }
        else
        {
            $('#emailmsg').show();
        }
    }
</script>


</body>
</html>




<!--<section>-->
<!--    <div class="container-fluid">-->
<!--        <div class="wedding">-->
<!--            <div class="row">-->
<!--                <div class="hidden-xs">-->
<!--                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
<!--                            viewBox="0 352 612 82" style="enable-background:new 0 352 612 82;" xml:space="preserve">-->
<!--                            <style type="text/css">-->
<!--                                .st04{fill:#00F9F8;}-->
<!--                                .st14{opacity:0.1;}-->
<!--                                .st24{opacity:0.5;fill:#4D4F4E;enable-background:new    ;}-->
<!--                                .st34{fill:#4D4F4E;}-->
<!--                            </style>-->
<!--                            <g id="wedding-title">-->
<!--    <g>-->
<!--        <path class="st04" d="M303,374.8c0,0.2-0.2,0.4-0.5,0.4c-0.4,0-0.7-0.1-1.1-0.3c-0.6,2.7-1.7,5.4-3.1,7.8c-1.7,2.8-3.5,4.9-5.5,6.2-->
<!--            c-0.8,0.5-1.7,0.8-2.5,0.8c-2,0-3-1.2-3-3.8c0-1.6,0.6-4.5,1.9-8.5c-3.9,4-6.4,6.4-7.5,7.4c-3.6,3.3-6.4,5.1-8.4,5.5-->
<!--            c-0.5,0.1-1,0.2-1.4,0.2c-1.6,0-2.4-0.7-2.4-2.2c0-1.3,0.7-3.3,2-5.8c0.4-0.8,1.5-2.6,3.3-5.5c2.6-4.3,4-7.7,4-10.2-->
<!--            c0-2-1.1-3-3.2-3c-2.4,0-5.4,1.4-9.1,4.2c-3.2,2.5-5.6,4.9-7.3,7.3c-1.1,1.6-1.6,2.9-1.6,4c0,0.9,0.5,1.4,1.6,1.4-->
<!--            c0.4,0,0.8-0.1,1.5-0.4c0.6-0.2,1.1-0.4,1.3-0.4c0.3,0,0.5,0.1,0.5,0.3c0,0.4-0.5,0.8-1.5,1.1c-0.9,0.3-1.5,0.4-2,0.4-->
<!--            c-1.6,0-2.4-0.8-2.4-2.5c0-2.2,1.2-4.7,3.6-7.4c2.2-2.5,4.8-4.6,8-6.5s5.8-2.8,8-2.8c3.3,0,4.9,1.4,4.9,4.2c0,1.3-0.4,2.7-1.1,4.4-->
<!--            c-0.8,1.8-1.9,3.9-3.3,6.3c-1.2,2.1-2.5,4.1-3.7,6.2c-1.1,1.8-1.6,3.3-1.6,4.4c0,1,0.4,1.4,1.2,1.4c1,0,2.3-0.6,4.1-1.8-->
<!--            c4.3-3,8.9-7.4,13.8-13.3c0.3-0.4,0.7-0.9,1.3-1.6c0.4-0.3,0.8-0.5,1.2-0.5c0.3,0,0.5,0.1,0.5,0.4c0,0.2-0.1,0.4-0.3,0.8-->
<!--            c-2.8,4.9-4.2,8.9-4.2,12c0,2.1,0.6,3.2,1.7,3.2c1,0,2.2-0.9,3.8-2.6c1.3-1.4,2.3-2.7,3-3.9c1.9-3.5,2.9-6.2,2.9-8-->
<!--            c0-0.3-0.1-0.8-0.3-1.4c-0.2-0.6-0.3-1.1-0.3-1.4c0-1,0.3-1.5,1-1.5c0.4,0,0.6,0.4,0.9,1.1c0.2,0.6,0.3,1.1,0.3,1.6-->
<!--            c0,0.3,0,0.6,0,1c0.2,0.3,0.4,0.5,0.8,0.6C302.8,374.5,303,374.6,303,374.8z"/>-->
<!--        <path class="st04" d="M311.5,384.5c0,0.1,0,0.2-0.1,0.3c-0.7,1.1-1.8,2.2-3.2,3.1c-1.5,1-2.9,1.5-4.2,1.5c-1.8,0-2.7-1.1-2.7-3.4-->
<!--            c0-1.5,0.6-3.1,1.9-4.9c1.4-1.9,2.8-2.8,4.3-2.8c0.3,0,0.5,0.1,0.8,0.4s0.3,0.5,0.3,0.8c0,0.9-0.7,2-2,3.2-->
<!--            c-1.2,1.1-2.3,1.9-3.3,2.2c-0.2,0.7-0.3,1.3-0.3,1.8c0,1.2,0.5,1.8,1.6,1.8c1,0,2.1-0.4,3.4-1.2c1.1-0.7,2-1.5,2.8-2.5-->
<!--            c0.2-0.3,0.4-0.4,0.6-0.4C311.5,384.3,311.5,384.4,311.5,384.5z M307.3,379.9c0-0.4-0.2-0.5-0.5-0.5c-0.4,0-1.1,0.7-1.9,2-->
<!--            c-0.7,1.1-1.2,2-1.3,2.6c0.7-0.3,1.5-0.9,2.3-1.7C306.9,381.4,307.3,380.6,307.3,379.9z"/>-->
<!--        <path class="st04" d="M328.6,365.5c0,3.1-3.4,8.6-10.3,16.6c-0.2,1-0.3,1.9-0.3,2.8c0,2.2,0.4,3.3,1.4,3.3c0.6,0,1.5-0.7,2.6-2.1-->
<!--            c1.2-1.4,1.8-2.1,1.9-2.1s0.1,0.1,0.1,0.2c0,0.2-0.1,0.4-0.2,0.6c-1.8,2.9-3.6,4.4-5.3,4.4c-1.5,0-2.2-1.1-2.2-3.4-->
<!--            c0-0.7,0.1-1.6,0.3-2.5c-2.2,4-4.1,6-5.6,6c-0.9,0-1.3-0.5-1.3-1.5c0-1.8,0.9-3.9,2.8-6.2c1.9-2.5,3.8-3.7,5.5-3.5-->
<!--            c1-3.3,2-6.2,3.2-8.7c1.9-4,3.9-6,5.7-6C328,363.5,328.6,364.2,328.6,365.5z M317.4,380.2c0,0,0-0.1-0.1-0.2-->
<!--            c-0.1-0.1-0.2-0.1-0.5-0.1c-1.1,0-2.4,0.9-3.8,2.7c-1.3,1.8-2,3.3-2,4.5c0,0.6,0.2,1,0.6,1c0.6,0,1.4-0.6,2.5-1.9-->
<!--            c0.4-0.5,1-1.5,1.8-3C317,381.5,317.4,380.5,317.4,380.2z M326.9,365.6c0-0.6-0.3-1-0.8-1c-1.4,0-3,2.3-4.8,7-->
<!--            c-1.2,3.1-2.1,6.2-2.8,9.2C324.2,373.4,326.9,368.3,326.9,365.6z"/>-->
<!--        <path class="st04" d="M341,365.5c0,3.1-3.4,8.6-10.3,16.6c-0.2,1-0.3,1.9-0.3,2.8c0,2.2,0.4,3.3,1.4,3.3c0.6,0,1.5-0.7,2.6-2.1-->
<!--            c1.2-1.4,1.8-2.1,1.9-2.1s0.1,0.1,0.1,0.2c0,0.2-0.1,0.4-0.2,0.6c-1.8,2.9-3.6,4.4-5.3,4.4c-1.5,0-2.2-1.1-2.2-3.4-->
<!--            c0-0.7,0.1-1.6,0.3-2.5c-2.2,4-4.1,6-5.6,6c-0.9,0-1.3-0.5-1.3-1.5c0-1.8,0.9-3.9,2.8-6.2c1.9-2.5,3.8-3.7,5.5-3.5-->
<!--            c1-3.3,2-6.2,3.2-8.7c1.9-4,3.9-6,5.7-6C340.4,363.5,341,364.2,341,365.5z M329.8,380.2c0,0,0-0.1-0.1-0.2-->
<!--            c-0.1-0.1-0.2-0.1-0.5-0.1c-1.1,0-2.4,0.9-3.8,2.7c-1.3,1.8-2,3.3-2,4.5c0,0.6,0.2,1,0.6,1c0.6,0,1.4-0.6,2.5-1.9-->
<!--            c0.4-0.5,1-1.5,1.8-3C329.4,381.5,329.8,380.5,329.8,380.2z M339.3,365.6c0-0.6-0.3-1-0.8-1c-1.4,0-3,2.3-4.8,7-->
<!--            c-1.2,3.1-2.1,6.2-2.8,9.2C336.6,373.4,339.3,368.3,339.3,365.6z"/>-->
<!--        <path class="st04" d="M344.3,384.2c0,0.2-0.1,0.4-0.3,0.7c-2.6,3.5-4.8,5.2-6.7,5.2c-1.6,0-2.4-0.9-2.4-2.5c0-0.9,0.3-2,0.9-3.5-->
<!--            c0.5-1.4,1.1-2.5,1.6-3.2c0.2-0.3,0.4-0.4,0.6-0.4c0.3,0,0.5,0.1,0.7,0.4c0.2,0.2,0.3,0.5,0.3,0.7c0,0.2-0.1,0.3-0.2,0.5-->
<!--            c-1.4,2.2-2.2,4.1-2.2,5.6c0,1,0.4,1.6,1.1,1.6c0.8,0,1.8-0.4,2.8-1.4c0.7-0.6,1.5-1.4,2.3-2.5c0.7-0.9,1.1-1.4,1.1-1.4-->
<!--            C344.2,383.9,344.3,384,344.3,384.2z M341.4,376.4c0,0.4-0.1,0.7-0.4,0.9c-0.3,0.3-0.6,0.4-1,0.4c-0.7,0-1-0.4-1-1-->
<!--            c0-0.4,0.1-0.6,0.4-0.9c0.3-0.3,0.6-0.4,1-0.4C341,375.4,341.4,375.7,341.4,376.4z"/>-->
<!--        <path class="st04" d="M356.3,384c0,0.2-0.1,0.4-0.3,0.7c-1.9,3.2-4,4.8-6.1,4.8c-1.6,0-2.5-1-2.5-3.1c0-1.8,0.4-3.4,1.2-4.8-->
<!--            c-2,1.8-4.1,4.3-6.2,7.5c-0.2,0.3-0.3,0.4-0.4,0.4c-0.3,0-0.4-0.3-0.4-0.8c0-0.2,0-0.3,0.1-0.4c0.6-1.5,1.2-3.6,1.9-6.3-->
<!--            c0.1-0.5,0.2-1.1,0.4-2c0.1-0.2,0.3-0.4,0.6-0.6s0.6-0.3,0.9-0.3c0.2,0,0.3,0.1,0.3,0.3c0,0.3-0.7,2.5-2,6.6-->
<!--            c0.4-0.4,1.4-1.7,3.2-3.7c0.6-0.7,1.5-1.7,2.7-2.9c0.2-0.2,0.4-0.3,0.7-0.3c0.7,0,1,0.3,1,1c0,0.2-0.1,0.3-0.2,0.5-->
<!--            c-1.6,2.6-2.4,4.7-2.4,6.3c0,1.1,0.5,1.6,1.6,1.6c0.8,0,1.7-0.4,2.6-1.2c0.6-0.5,1.3-1.3,2-2.3c0.6-0.8,1-1.2,1-1.2-->
<!--            C356.2,383.7,356.3,383.9,356.3,384z"/>-->
<!--        <path class="st04" d="M364.5,379.7c0,0.1-0.1,0.2-0.4,0.3c-0.3,0.1-0.4,0.2-0.5,0.4c-0.2,0.6-0.3,1.4-0.5,2.2-->
<!--            c-0.4,1.5-0.9,3.7-1.5,6.6h0.2c1.5-0.1,2.3,0.3,2.3,1c0,0.2-0.1,0.3-0.2,0.3c0,0-0.2-0.1-0.4-0.2c-0.2-0.2-0.6-0.2-1.2-0.2-->
<!--            c-0.3,0-0.6,0-0.9,0c-1.1,4.3-2.4,7.6-4.1,10c-3.1,4.5-6.4,6.8-9.9,6.8c-1.4,0-2.6-0.4-3.5-1.2s-1.4-1.9-1.4-3.2-->
<!--            c0-3.1,2.2-6,6.5-8.8c3.7-2.4,7.3-3.9,10.8-4.4c0.2-1.1,0.5-2.7,1-4.9c-1.9,3.4-3.6,5.1-5.1,5.1c-0.9,0-1.3-0.5-1.3-1.5-->
<!--            c0-1.5,0.7-3.3,2.2-5.4c1.4-2.1,2.8-3.4,4.2-3.9c0.5-0.2,1-0.3,1.4-0.3c0.4,0,0.9,0.1,1.5,0.4C364.2,379,364.5,379.3,364.5,379.7z-->
<!--             M359.9,390c-1.9,0.3-4.1,1.1-6.8,2.5s-4.6,2.6-6,4c-2.2,2.1-3.2,4.1-3.2,6.2c0,1.1,0.4,2,1.1,2.7c0.7,0.7,1.6,1,2.7,1-->
<!--            c1.8,0,3.5-0.7,5.3-2.2c1.4-1.2,2.6-2.7,3.7-4.5C358.1,396.9,359.2,393.7,359.9,390z M362.5,379.8c-0.1,0-0.3,0-0.4,0-->
<!--            c-1.1,0-2.3,0.7-3.6,2.2c-1.8,2.1-2.6,3.9-2.6,5.2c0,0.6,0.2,0.9,0.6,0.9c0.6,0,1.4-0.7,2.5-2-->
<!--            C360.4,384.3,361.6,382.2,362.5,379.8z"/>-->
<!--    </g>-->
<!--    <g class="st14">-->
<!--        <g>-->
<!--            <path class="st24" d="M162.4,394.9h8.5l5.1,16.8l5.6-16.9h6.9l5.6,16.9l5.1-16.8h8.3l-9.7,29.2h-7l-5.9-16.7l-5.8,16.7h-7-->
<!--                L162.4,394.9z"/>-->
<!--            <path class="st24" d="M210.7,394.9h8v10.9H229v-10.9h8v29h-8v-11h-10.3v11h-8V394.9z"/>-->
<!--            <path class="st24" d="M252.2,394.7h7.7l12.3,29.2h-8.6l-2.1-5.2h-11.2l-2.1,5.2h-8.4L252.2,394.7z M259.3,412.5l-3.3-8.3l-3.3,8.3-->
<!--                H259.3z"/>-->
<!--            <path class="st24" d="M278.5,402h-8.7v-7h25.4v7h-8.7v22h-8V402z"/>-->
<!--            <path class="st24" d="M317.3,402h-8.7v-7H334v7h-8.7v22h-8V402z"/>-->
<!--            <path class="st24" d="M335.4,409.4c0-8.3,6.7-15.1,15.7-15.1s15.6,6.7,15.6,15.1c0,8.3-6.7,15.1-15.7,15.1-->
<!--                C342,424.5,335.4,417.8,335.4,409.4z M358.4,409.4c0-4.2-3-7.8-7.5-7.8c-4.4,0-7.3,3.6-7.3,7.8c0,4.2,3,7.8,7.4,7.8-->
<!--                C355.4,417.2,358.4,413.7,358.4,409.4z"/>-->
<!--            <path class="st24" d="M382.2,394.9h14.9c3.6,0,6.2,0.9,7.9,2.6c1.1,1.1,1.8,2.7,1.8,4.8c0,3.3-1.9,5.4-4.5,6.5-->
<!--                c3.5,1.1,5.8,3.2,5.8,7.2c0,5-4,8-11,8h-14.9V394.9z M395.2,406.5c2.5,0,3.8-0.8,3.8-2.6c0-1.6-1.2-2.5-3.6-2.5h-5.2v5.1H395.2z-->
<!--                 M396.3,417.5c2.5,0,3.9-1,3.9-2.7c0-1.6-1.2-2.6-4-2.6h-6.1v5.4H396.3z"/>-->
<!--            <path class="st24" d="M411.5,411.2v-16.3h8.2V411c0,4.2,2.1,6.2,5.4,6.2c3.2,0,5.4-1.9,5.4-6v-16.3h8.2V411-->
<!--                c0,9.4-5.4,13.5-13.6,13.5S411.5,420.3,411.5,411.2z"/>-->
<!--            <path class="st24" d="M451.7,413.1l-11-18.1h9.1l6,10.6l6-10.6h9l-11,18v11h-8.1V413.1z"/>-->
<!--        </g>-->
<!--    </g>-->
<!--    <g>-->
<!--        <g>-->
<!--            <path class="st34" d="M276.5,396.2h2.3c1.1,0,1.8,0.5,1.8,1.4c0,0.8-0.5,1.1-1,1.3c0.7,0.2,1.2,0.6,1.2,1.3c0,0.9-0.8,1.5-2,1.5-->
<!--                h-2.4L276.5,396.2L276.5,396.2z M278.7,398.8c0.8,0,1.4-0.4,1.4-1.1c0-0.6-0.5-1-1.4-1h-1.9v2.2L278.7,398.8L278.7,398.8z-->
<!--                 M278.9,401.4c1,0,1.6-0.4,1.6-1.1c0-0.7-0.6-1.1-1.7-1.1h-1.9v2.2H278.9z"/>-->
<!--            <path class="st34" d="M282.2,396.1h0.5v0.5h-0.5V396.1z M282.2,397.7h0.4v4h-0.4V397.7z"/>-->
<!--            <path class="st3" d="M283.5,401.4h0.5c0.4-0.6,0.6-1.5,0.6-2.8v-0.9h2.7v3.7h0.6l-0.1,1.5h-0.3v-1.1h-3.7l-0.1,1.1h-0.3-->
<!--                L283.5,401.4L283.5,401.4z M287,401.4v-3.3h-1.9v0.7c0,1.1-0.2,2.1-0.5,2.6H287z"/>-->
<!--            <path class="st34" d="M288.7,399.7c0-1.2,0.8-2.1,1.9-2.1c1.1,0,1.8,0.9,1.8,2.1c0,0.1,0,0.1,0,0.2h-3.4c0.1,1,0.8,1.6,1.6,1.6-->
<!--                c0.6,0,1.1-0.3,1.4-0.6l0.3,0.3c-0.4,0.4-0.9,0.8-1.7,0.8C289.6,401.9,288.7,401,288.7,399.7z M292.1,399.6-->
<!--                c-0.1-0.8-0.5-1.6-1.5-1.6c-0.8,0-1.4,0.7-1.5,1.6H292.1z"/>-->
<!--            <path class="st34" d="M293.4,399.8c0-1.1,0.9-2.1,2.1-2.1c1.2,0,2.1,1,2.1,2.1c0,1.1-0.9,2.1-2.1,2.1-->
<!--                C294.3,401.9,293.4,400.9,293.4,399.8z M297.1,399.8c0-1-0.8-1.8-1.7-1.8c-0.9,0-1.7,0.8-1.7,1.8c0,1,0.7,1.8,1.7,1.8-->
<!--                C296.4,401.5,297.1,400.7,297.1,399.8z"/>-->
<!--            <path class="st34" d="M301.2,397.7h3.4v4h-0.4v-3.7h-2.6v3.7h-0.4V397.7z"/>-->
<!--            <path class="st34" d="M306,397.7h0.4v0.9c0.4-0.5,0.9-1,1.7-1c1,0,2,0.8,2,2.1c0,1.3-1,2.1-2,2.1c-0.8,0-1.3-0.4-1.7-1v2.1H306-->
<!--                V397.7z M309.6,399.8c0-1.1-0.7-1.8-1.6-1.8c-0.8,0-1.7,0.7-1.7,1.8s0.8,1.8,1.7,1.8C308.9,401.5,309.6,400.8,309.6,399.8z"/>-->
<!--            <path class="st34" d="M311,399.8c0-1.1,0.9-2.1,2.1-2.1s2.1,1,2.1,2.1c0,1.1-0.9,2.1-2.1,2.1C311.9,401.9,311,400.9,311,399.8z-->
<!--                 M314.7,399.8c0-1-0.8-1.8-1.7-1.8c-0.9,0-1.7,0.8-1.7,1.8c0,1,0.7,1.8,1.7,1.8S314.7,400.7,314.7,399.8z"/>-->
<!--            <path class="st34" d="M316.4,397.7h3.4v4h-0.4v-3.7h-2.6v3.7h-0.4L316.4,397.7L316.4,397.7z"/>-->
<!--            <path class="st34" d="M320.9,399.8c0-1.1,0.9-2.1,2.1-2.1c1.2,0,2.1,1,2.1,2.1c0,1.1-0.9,2.1-2.1,2.1-->
<!--                C321.8,401.9,320.9,400.9,320.9,399.8z M324.7,399.8c0-1-0.8-1.8-1.7-1.8c-0.9,0-1.7,0.8-1.7,1.8c0,1,0.7,1.8,1.7,1.8-->
<!--                C323.9,401.5,324.7,400.7,324.7,399.8z"/>-->
<!--            <path class="st3" d="M325.8,401.3l0.3-0.3c0.4,0.4,0.9,0.6,1.4,0.6c0.6,0,1.1-0.4,1.1-0.8s-0.4-0.8-1.1-0.8h-0.5v-0.4h0.6-->
<!--                c0.6,0,1-0.3,1-0.8c0-0.4-0.4-0.7-1-0.7c-0.4,0-0.9,0.1-1.3,0.4l-0.2-0.3c0.4-0.3,1-0.5,1.5-0.5c0.9,0,1.4,0.4,1.4,1.1-->
<!--                c0,0.5-0.3,0.8-0.6,0.9c0.4,0.2,0.8,0.4,0.8,1c0,0.6-0.6,1.2-1.5,1.2C326.8,401.9,326.3,401.6,325.8,401.3z"/>-->
<!--            <path class="st34" d="M330.2,397.7h0.4v3.5l2.7-3.5h0.4v4h-0.4v-3.5l-2.7,3.5h-0.4V397.7z"/>-->
<!--            <path class="st34" d="M338.8,401.8h-3.6v-4h0.4v3.7h2.6v-3.7h0.4v3.7h0.6l-0.1,1.5h-0.3L338.8,401.8L338.8,401.8z"/>-->
<!--            <path class="st34" d="M340.2,396.1h0.5v0.5h-0.5V396.1z M340.3,397.7h0.4v4h-0.4V397.7z"/>-->
<!--            <path class="st34" d="M341.5,396.4h0.5v0.6h-0.5V396.4z M342.2,397.7h0.4v4h-0.4V397.7z M342.8,396.4h0.5v0.6h-0.5V396.4z"/>-->
<!--            <path class="st34" d="M344.1,397.7h0.5v0.7h-0.5V397.7z M344.1,401.1h0.5v0.7h-0.5V401.1z"/>-->
<!--        </g>-->
<!--    </g>-->
<!--    <g>-->
<!--        <g>-->
<!--            <path class="st34" d="M259.2,409.9h2.9l1.8,5.8l1.9-5.8h2.4l1.9,5.8l1.8-5.8h2.9l-3.3,10.1h-2.4l-2-5.8l-2,5.8h-2.4L259.2,409.9z"-->
<!--                />-->
<!--            <path class="st34" d="M275.9,409.9h2.8v3.8h3.6v-3.8h2.8v10h-2.8v-3.8h-3.6v3.8h-2.8V409.9z"/>-->
<!--            <path class="st34" d="M290.3,409.8h2.7l4.3,10.1h-3l-0.7-1.8h-3.9l-0.7,1.8H286L290.3,409.8z M292.8,416l-1.1-2.9l-1.1,2.9H292.8z-->
<!--                "/>-->
<!--            <path class="st34" d="M299.4,412.4h-3v-2.5h8.8v2.5h-3v7.6h-2.8L299.4,412.4L299.4,412.4z"/>-->
<!--            <path class="st34" d="M312.9,412.4h-3v-2.5h8.8v2.5h-3v7.6h-2.8L312.9,412.4L312.9,412.4z"/>-->
<!--            <path class="st34" d="M319.1,414.9c0-2.9,2.3-5.2,5.4-5.2s5.4,2.3,5.4,5.2c0,2.9-2.3,5.2-5.4,5.2S319.1,417.8,319.1,414.9z-->
<!--                 M327.1,414.9c0-1.4-1.1-2.7-2.6-2.7s-2.5,1.2-2.5,2.7c0,1.4,1.1,2.7,2.6,2.7C326,417.6,327.1,416.4,327.1,414.9z"/>-->
<!--            <path class="st34" d="M335.3,409.9h5.2c1.3,0,2.2,0.3,2.7,0.9c0.4,0.4,0.6,0.9,0.6,1.7c0,1.1-0.7,1.8-1.6,2.2c1.2,0.4,2,1.1,2,2.5-->
<!--                c0,1.7-1.4,2.8-3.8,2.8h-5.2V409.9z M339.8,413.9c0.9,0,1.3-0.3,1.3-0.9c0-0.5-0.4-0.9-1.3-0.9H338v1.8H339.8z M340.2,417.7-->
<!--                c0.9,0,1.3-0.3,1.3-1c0-0.5-0.4-0.9-1.4-0.9H338v1.8H340.2z"/>-->
<!--            <path class="st34" d="M345.5,415.5v-5.6h2.8v5.6c0,1.4,0.7,2.1,1.8,2.1s1.8-0.7,1.8-2.1v-5.6h2.8v5.6c0,3.3-1.8,4.7-4.7,4.7-->
<!--                C347.2,420.1,345.5,418.7,345.5,415.5z"/>-->
<!--            <path class="st34" d="M359.4,416.2l-3.8-6.3h3.2l2.1,3.7l2.1-3.7h3.1l-3.8,6.2v3.8h-2.8L359.4,416.2L359.4,416.2z"/>-->
<!--        </g>-->
<!--    </g>-->
<!--</g>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                <div class="visible-xs">-->
<!--                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
<!--                         viewBox="246.5 363.3 123.5 62" style="enable-background:new 246.5 363.3 123.5 62;" xml:space="preserve">-->
<!--                        <style type="text/css">-->
<!--                            .st03{fill:#00F9F8;}-->
<!--                            .st13{opacity:0.1;}-->
<!--                            .st23{opacity:0.5;fill:#4D4F4E;enable-background:new ;}-->
<!--                            .st33{fill:#4D4F4E;}-->
<!--                        </style>-->
<!--                        <g id="mobile-wedding-title">-->
<!--                            <g>-->
<!--                                <path class="st03" d="M300.1,373.4c0,0.1-0.1,0.2-0.3,0.2c-0.2,0-0.4,0-0.6-0.1c-0.4,1.5-0.9,2.9-1.7,4.2c-0.9,1.5-1.9,2.6-3,3.3-->
<!--                                    c-0.4,0.3-0.9,0.4-1.3,0.4c-1.1,0-1.6-0.7-1.6-2c0-0.9,0.4-2.4,1-4.6c-2.1,2.1-3.4,3.4-4,4c-1.9,1.8-3.4,2.7-4.5,2.9-->
<!--                                    c-0.3,0.1-0.5,0.1-0.8,0.1c-0.9,0-1.3-0.4-1.3-1.2c0-0.7,0.4-1.8,1.1-3.1c0.2-0.4,0.8-1.4,1.8-3c1.4-2.3,2.1-4.1,2.1-5.5-->
<!--                                    c0-1.1-0.6-1.6-1.7-1.6c-1.3,0-2.9,0.7-4.8,2.2c-1.7,1.3-3,2.6-3.9,3.9c-0.6,0.9-0.9,1.6-0.9,2.1c0,0.5,0.3,0.7,0.8,0.7-->
<!--                                    c0.2,0,0.4-0.1,0.8-0.2s0.6-0.2,0.7-0.2c0.2,0,0.3,0,0.3,0.1c0,0.2-0.3,0.4-0.8,0.6c-0.5,0.2-0.8,0.2-1.1,0.2-->
<!--                                    c-0.9,0-1.3-0.4-1.3-1.3c0-1.2,0.6-2.5,1.9-4c1.2-1.3,2.6-2.5,4.3-3.5c1.7-1,3.1-1.5,4.3-1.5c1.8,0,2.6,0.8,2.6,2.3-->
<!--                                    c0,0.7-0.2,1.5-0.6,2.3c-0.4,1-1,2.1-1.8,3.4c-0.7,1.1-1.3,2.2-2,3.3c-0.6,1-0.9,1.8-0.9,2.4c0,0.5,0.2,0.8,0.6,0.8-->
<!--                                    c0.5,0,1.2-0.3,2.2-1c2.3-1.6,4.8-4,7.4-7.1c0.1-0.2,0.4-0.5,0.7-0.8c0.2-0.2,0.4-0.3,0.7-0.3c0.2,0,0.3,0.1,0.3,0.2-->
<!--                                    c0,0.1-0.1,0.2-0.2,0.4c-1.5,2.6-2.2,4.8-2.2,6.4c0,1.1,0.3,1.7,0.9,1.7c0.5,0,1.2-0.4,2.1-1.4c0.7-0.8,1.2-1.4,1.6-2.1-->
<!--                                    c1-1.9,1.6-3.3,1.6-4.3c0-0.2-0.1-0.4-0.2-0.7s-0.2-0.6-0.2-0.8c0-0.5,0.2-0.8,0.5-0.8c0.2,0,0.4,0.2,0.5,0.6-->
<!--                                    c0.1,0.3,0.2,0.6,0.2,0.8c0,0.2,0,0.3,0,0.5c0.1,0.2,0.2,0.3,0.4,0.4C300,373.2,300.1,373.2,300.1,373.4z"/>-->
<!--                                <path class="st03" d="M304.7,378.6c0,0,0,0.1,0,0.1c-0.4,0.6-1,1.1-1.7,1.7c-0.8,0.5-1.6,0.8-2.2,0.8c-1,0-1.5-0.6-1.5-1.8-->
<!--                                    c0-0.8,0.4-1.7,1.1-2.6c0.7-1,1.5-1.5,2.3-1.5c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4c0,0.5-0.4,1.1-1.1,1.7-->
<!--                                    c-0.6,0.6-1.2,1-1.8,1.2c-0.1,0.4-0.2,0.7-0.2,1c0,0.6,0.3,1,0.9,1c0.5,0,1.1-0.2,1.8-0.7c0.6-0.4,1.1-0.8,1.5-1.3-->
<!--                                    C304.4,378.5,304.5,378.5,304.7,378.6C304.7,378.5,304.7,378.5,304.7,378.6z M302.4,376.1c0-0.2-0.1-0.3-0.3-0.3-->
<!--                                    c-0.2,0-0.6,0.4-1,1.1c-0.4,0.6-0.6,1.1-0.7,1.4c0.4-0.2,0.8-0.5,1.2-0.9C302.2,376.9,302.4,376.5,302.4,376.1z"/>-->
<!--                                <path class="st03" d="M313.8,368.4c0,1.6-1.8,4.6-5.5,8.9c-0.1,0.5-0.1,1.1-0.1,1.5c0,1.2,0.3,1.8,0.7,1.8c0.3,0,0.8-0.4,1.4-1.1-->
<!--                                    c0.6-0.7,1-1.1,1-1.1c0,0,0.1,0,0.1,0.1c0,0.1,0,0.2-0.1,0.3c-1,1.6-1.9,2.3-2.8,2.3c-0.8,0-1.2-0.6-1.2-1.8c0-0.4,0-0.8,0.1-1.3-->
<!--                                    c-1.2,2.1-2.2,3.2-3,3.2c-0.5,0-0.7-0.3-0.7-0.8c0-1,0.5-2.1,1.5-3.3c1.1-1.4,2-2,2.9-1.9c0.5-1.8,1.1-3.3,1.7-4.7-->
<!--                                    c1.1-2.2,2.1-3.3,3.1-3.3C313.5,367.3,313.8,367.7,313.8,368.4z M307.8,376.2C307.8,376.2,307.8,376.2,307.8,376.2-->
<!--                                    c-0.1-0.1-0.2-0.2-0.3-0.2c-0.6,0-1.3,0.5-2,1.4c-0.7,1-1.1,1.8-1.1,2.4c0,0.4,0.1,0.5,0.4,0.5c0.4,0,0.8-0.4,1.3-1.1-->
<!--                                    c0.2-0.3,0.5-0.8,1-1.6C307.6,376.9,307.8,376.4,307.8,376.2z M312.9,368.4c0-0.4-0.1-0.5-0.4-0.5c-0.8,0-1.6,1.2-2.6,3.8-->
<!--                                    c-0.6,1.7-1.1,3.3-1.5,4.9C311.5,372.6,312.9,369.9,312.9,368.4z"/>-->
<!--                                <path class="st03" d="M320.5,368.4c0,1.6-1.8,4.6-5.5,8.9c-0.1,0.5-0.1,1.1-0.1,1.5c0,1.2,0.3,1.8,0.7,1.8c0.3,0,0.8-0.4,1.4-1.1-->
<!--                                    c0.6-0.7,1-1.1,1-1.1c0,0,0.1,0,0.1,0.1c0,0.1,0,0.2-0.1,0.3c-1,1.6-1.9,2.3-2.8,2.3c-0.8,0-1.2-0.6-1.2-1.8c0-0.4,0-0.8,0.1-1.3-->
<!--                                    c-1.2,2.1-2.2,3.2-3,3.2c-0.5,0-0.7-0.3-0.7-0.8c0-1,0.5-2.1,1.5-3.3c1.1-1.4,2-2,2.9-1.9c0.5-1.8,1.1-3.3,1.7-4.7-->
<!--                                    c1.1-2.2,2.1-3.3,3.1-3.3C320.2,367.3,320.5,367.7,320.5,368.4z M314.5,376.2C314.5,376.2,314.5,376.2,314.5,376.2-->
<!--                                    c-0.1-0.1-0.2-0.2-0.3-0.2c-0.6,0-1.3,0.5-2,1.4c-0.7,1-1.1,1.8-1.1,2.4c0,0.4,0.1,0.5,0.4,0.5c0.4,0,0.8-0.4,1.3-1.1-->
<!--                                    c0.2-0.3,0.5-0.8,1-1.6C314.3,376.9,314.5,376.4,314.5,376.2z M319.6,368.4c0-0.4-0.1-0.5-0.4-0.5c-0.8,0-1.6,1.2-2.6,3.8-->
<!--                                    c-0.6,1.7-1.1,3.3-1.5,4.9C318.1,372.6,319.6,369.9,319.6,368.4z"/>-->
<!--                                <path class="st03" d="M322.3,378.4c0,0.1-0.1,0.2-0.2,0.4c-1.4,1.9-2.6,2.8-3.6,2.8c-0.9,0-1.3-0.4-1.3-1.4c0-0.5,0.2-1.1,0.5-1.9-->
<!--                                    c0.3-0.7,0.6-1.3,0.9-1.7c0.1-0.1,0.2-0.2,0.3-0.2c0.1,0,0.3,0.1,0.4,0.2s0.2,0.3,0.2,0.4c0,0.1,0,0.2-0.1,0.3-->
<!--                                    c-0.8,1.2-1.1,2.2-1.1,3c0,0.5,0.2,0.8,0.6,0.8c0.4,0,1-0.3,1.5-0.7c0.4-0.3,0.8-0.8,1.2-1.3c0.4-0.5,0.6-0.7,0.6-0.7-->
<!--                                    C322.2,378.2,322.3,378.3,322.3,378.4z M320.7,374.2c0,0.2-0.1,0.4-0.2,0.5c-0.2,0.2-0.3,0.2-0.5,0.2c-0.4,0-0.5-0.2-0.5-0.5-->
<!--                                    c0-0.2,0.1-0.4,0.2-0.5c0.2-0.2,0.3-0.2,0.5-0.2C320.5,373.7,320.7,373.8,320.7,374.2z"/>-->
<!--                                <path class="st03" d="M328.7,378.3c0,0.1,0,0.2-0.1,0.4c-1.1,1.7-2.1,2.6-3.3,2.6c-0.9,0-1.3-0.5-1.3-1.7c0-1,0.2-1.8,0.7-2.6-->
<!--                                    c-1.1,1-2.2,2.3-3.3,4c-0.1,0.1-0.2,0.2-0.2,0.2c-0.1,0-0.2-0.1-0.2-0.4c0-0.1,0-0.1,0-0.2c0.3-0.8,0.7-1.9,1-3.4-->
<!--                                    c0-0.3,0.1-0.6,0.2-1.1c0-0.1,0.2-0.2,0.3-0.3c0.2-0.1,0.3-0.2,0.5-0.2c0.1,0,0.2,0,0.2,0.1c0,0.2-0.4,1.3-1.1,3.6-->
<!--                                    c0.2-0.3,0.8-0.9,1.7-2c0.3-0.4,0.8-0.9,1.4-1.6c0.1-0.1,0.3-0.2,0.4-0.2c0.4,0,0.5,0.2,0.5,0.5c0,0.1,0,0.2-0.1,0.3-->
<!--                                    c-0.9,1.4-1.3,2.6-1.3,3.4c0,0.6,0.3,0.9,0.8,0.9c0.4,0,0.9-0.2,1.4-0.7c0.3-0.3,0.7-0.7,1.1-1.2-->
<!--                                    C328.4,378.5,328.6,378.2,328.7,378.3C328.6,378.2,328.7,378.2,328.7,378.3z"/>-->
<!--                                <path class="st03" d="M333.1,376c0,0.1-0.1,0.1-0.2,0.2c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.4-0.2,0.7-0.3,1.2c-0.2,0.8-0.4,2-0.8,3.5-->
<!--                                    h0.1c0.8,0,1.2,0.2,1.2,0.5c0,0.1,0,0.1-0.1,0.1c0,0-0.1,0-0.2-0.1c-0.1-0.1-0.4-0.1-0.7-0.1c-0.2,0-0.3,0-0.5,0-->
<!--                                    c-0.6,2.3-1.3,4.1-2.2,5.4c-1.7,2.4-3.4,3.7-5.3,3.7c-0.7,0-1.4-0.2-1.8-0.6c-0.5-0.4-0.8-1-0.8-1.7c0-1.7,1.2-3.2,3.5-4.7-->
<!--                                    c2-1.3,3.9-2.1,5.8-2.4c0.1-0.6,0.3-1.5,0.5-2.6c-1,1.8-1.9,2.7-2.7,2.7c-0.5,0-0.7-0.3-0.7-0.8c0-0.8,0.4-1.8,1.1-2.9-->
<!--                                    c0.8-1.1,1.5-1.8,2.2-2.1c0.3-0.1,0.5-0.2,0.8-0.2c0.2,0,0.5,0.1,0.8,0.2C333,375.6,333.1,375.8,333.1,376z M330.6,381.5-->
<!--                                    c-1,0.2-2.2,0.6-3.6,1.3c-1.4,0.7-2.5,1.4-3.3,2.1c-1.1,1.1-1.7,2.2-1.7,3.3c0,0.6,0.2,1.1,0.6,1.4s0.9,0.5,1.5,0.5-->
<!--                                    c1,0,1.9-0.4,2.8-1.2c0.7-0.6,1.4-1.4,2-2.4C329.7,385.2,330.3,383.5,330.6,381.5z M332,376c-0.1,0-0.1,0-0.2,0-->
<!--                                    c-0.6,0-1.2,0.4-1.9,1.2c-1,1.1-1.4,2.1-1.4,2.8c0,0.3,0.1,0.5,0.3,0.5c0.4,0,0.8-0.4,1.3-1.1C330.9,378.5,331.5,377.4,332,376z"-->
<!--                                    />-->
<!--                            </g>-->
<!--                            <g>-->
<!--                                <g class="st13">-->
<!--                                    <g>-->
<!--                                        <path class="st23" d="M251.8,373.1h6.9l4.1,13.7l4.6-13.8h5.6l4.6,13.8l4.1-13.7h6.8l-7.9,23.8h-5.7l-4.8-13.6l-4.7,13.6h-5.7-->
<!--                                            L251.8,373.1z"/>-->
<!--                                        <path class="st23" d="M291.1,396.8v-23.7h6.6v8.9h8.4v-8.9h6.6v23.7h-6.6v-9h-8.4v9L291.1,396.8L291.1,396.8z"/>-->
<!--                                        <path class="st23" d="M315,396.8L325,373h6.3l10.1,23.8h-7l-1.7-4.2h-9.1l-1.7,4.2H315z M325.4,387.5h5.3l-2.6-6.7L325.4,387.5z"-->
<!--                                            />-->
<!--                                        <path class="st23" d="M342.4,378.9v-5.8h20.8v5.8H356v17.9h-6.6v-17.9H342.4z"/>-->
<!--                                        <path class="st23" d="M252.1,405.8V401h17.1v4.7h-5.9v14.8h-5.4v-14.8H252.1z"/>-->
<!--                                        <path class="st23" d="M270.9,410.8c0-1.4,0.3-2.7,0.8-4c0.5-1.2,1.3-2.3,2.2-3.2c0.9-0.9,2-1.6,3.3-2.2c1.3-0.5,2.7-0.8,4.2-0.8-->
<!--                                            s2.9,0.3,4.2,0.8c1.3,0.5,2.4,1.2,3.3,2.1c0.9,0.9,1.6,2,2.2,3.2c0.5,1.2,0.8,2.6,0.8,4c0,1.4-0.3,2.7-0.8,4-->
<!--                                            c-0.5,1.2-1.3,2.3-2.2,3.3c-0.9,0.9-2,1.6-3.3,2.2c-1.3,0.5-2.7,0.8-4.2,0.8c-2,0-3.8-0.4-5.4-1.3c-1.6-0.9-2.9-2.1-3.8-3.7-->
<!--                                            C271.3,414.4,270.9,412.6,270.9,410.8z M276.4,410.8c0,1.4,0.5,2.7,1.4,3.7c1,1,2.1,1.6,3.6,1.6c1.5,0,2.6-0.5,3.6-1.5-->
<!--                                            c0.9-1,1.4-2.3,1.4-3.7c0-1.4-0.5-2.7-1.4-3.7c-1-1-2.1-1.6-3.6-1.6c-1.4,0-2.6,0.5-3.5,1.5-->
<!--                                            C276.9,408.1,276.4,409.3,276.4,410.8z"/>-->
<!--                                        <path class="st23" d="M302.4,420.5V401h10c2.4,0,4.1,0.6,5.3,1.7c0.8,0.8,1.3,1.9,1.3,3.2c0,2-1,3.5-3,4.4c1.3,0.4,2.2,1,2.9,1.8-->
<!--                                            c0.7,0.8,1,1.8,1,3.1c0,1.7-0.6,3-1.9,3.9c-1.3,1-3.1,1.4-5.5,1.4H302.4z M307.7,408.8h3.4c1.7,0,2.5-0.6,2.5-1.8-->
<!--                                            c0-0.5-0.2-1-0.6-1.2c-0.4-0.3-1-0.4-1.8-0.4h-3.5V408.8z M307.7,416.3h4.2c0.8,0,1.5-0.2,1.9-0.5s0.7-0.8,0.7-1.4-->
<!--                                            c0-0.5-0.2-1-0.7-1.3c-0.4-0.3-1.1-0.5-2-0.5h-4.1L307.7,416.3L307.7,416.3z"/>-->
<!--                                        <path class="st23" d="M322.1,412V401h5.5v10.8c0,1.4,0.3,2.4,1,3.1c0.6,0.7,1.5,1.1,2.6,1.1s2-0.4,2.6-1c0.6-0.7,1-1.7,1-3v-11-->
<!--                                            h5.5v10.8c0,1.6-0.2,2.9-0.6,4.1s-1.1,2.1-1.8,2.8s-1.8,1.3-2.9,1.6c-1.1,0.4-2.4,0.5-3.8,0.5c-2.9,0-5.1-0.7-6.7-2.2-->
<!--                                            C322.9,417.2,322.1,415,322.1,412z"/>-->
<!--                                        <path class="st23" d="M341.7,401h6.2l4,7.1l4-7.1h6.1l-7.4,12.1v7.4h-5.4v-7.3L341.7,401z"/>-->
<!--                                    </g>-->
<!--                                </g>-->
<!--                                <g>-->
<!--                                    <g>-->
<!--                                        <path class="st3" d="M281.1,389.4v-4.1h1.7c0.4,0,0.7,0.1,1,0.3c0.3,0.2,0.4,0.4,0.4,0.7c0,0.1,0,0.3-0.1,0.4-->
<!--                                            c0,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.2,0.1-0.3,0.1c0.6,0.2,0.9,0.5,0.9,1c0,0.4-0.1,0.6-0.4,0.8-->
<!--                                            c-0.3,0.2-0.6,0.3-1.1,0.3L281.1,389.4L281.1,389.4z M281.4,387.2h1.3c0.3,0,0.6-0.1,0.8-0.2c0.2-0.2,0.3-0.4,0.3-0.6-->
<!--                                            c0-0.2-0.1-0.4-0.3-0.5c-0.2-0.1-0.4-0.2-0.8-0.2h-1.4L281.4,387.2L281.4,387.2z M281.4,389.1h1.5c0.4,0,0.6-0.1,0.8-0.2-->
<!--                                            c0.2-0.2,0.3-0.4,0.3-0.6c0-0.3-0.1-0.4-0.3-0.6c-0.2-0.1-0.5-0.2-0.9-0.2h-1.4L281.4,389.1L281.4,389.1z"/>-->
<!--                                        <path class="st3" d="M285.2,385.7v-0.4h0.4v0.4H285.2z M285.2,389.4v-3h0.3v3H285.2z"/>-->
<!--                                        <path class="st3" d="M286.2,389.2h0.4c0.3-0.5,0.4-1.2,0.4-2.1v-0.6h2v2.7h0.5l-0.1,1.1h-0.2v-0.8h-2.7l-0.1,0.8h-0.3V389.2z-->
<!--                                             M286.9,389.2h1.8v-2.5h-1.4v0.5c0,0.4,0,0.8-0.1,1.1C287.1,388.7,287,389,286.9,389.2z"/>-->
<!--                                        <path class="st3" d="M290,387.9c0-0.2,0-0.4,0.1-0.6c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.1,0.3-0.3,0.4-0.3c0.2-0.1,0.4-0.1,0.6-0.1-->
<!--                                            c0.3,0,0.5,0.1,0.7,0.2c0.2,0.1,0.4,0.3,0.5,0.6c0.1,0.2,0.2,0.5,0.2,0.8c0,0,0,0.1,0,0.1h-2.5c0,0.4,0.2,0.6,0.4,0.9-->
<!--                                            c0.2,0.2,0.5,0.3,0.8,0.3c0.4,0,0.7-0.2,1-0.5l0.2,0.2c-0.2,0.2-0.4,0.3-0.5,0.4c-0.2,0.1-0.4,0.2-0.7,0.2c-0.2,0-0.4,0-0.5-0.1-->
<!--                                            c-0.2-0.1-0.3-0.2-0.5-0.3c-0.1-0.1-0.2-0.3-0.3-0.5C290.1,388.4,290,388.2,290,387.9z M290.3,387.8h2.2c0-0.2,0-0.3-0.1-0.4-->
<!--                                            c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.2-0.3-0.3s-0.3-0.1-0.4-0.1c-0.3,0-0.5,0.1-0.7,0.3-->
<!--                                            C290.4,387.2,290.3,387.5,290.3,387.8z"/>-->
<!--                                        <path class="st3" d="M293.4,387.9c0-0.2,0-0.4,0.1-0.6c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.1,0.3-0.3,0.5-0.4-->
<!--                                            c0.2-0.1,0.4-0.1,0.6-0.1c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.4,0.3,0.5,0.6c0.1,0.2,0.2,0.5,0.2,0.8c0,0.3-0.1,0.5-0.2,0.8-->
<!--                                            c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.1-0.5,0.2-0.8,0.2c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.4-0.2-0.5-0.4c-0.1-0.1-0.2-0.3-0.3-0.5-->
<!--                                            C293.4,388.4,293.4,388.2,293.4,387.9z M293.7,387.9c0,0.4,0.1,0.7,0.4,0.9c0.2,0.3,0.5,0.4,0.9,0.4c0.2,0,0.4-0.1,0.6-0.2-->
<!--                                            c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0.2-0.4,0.2-0.6c0-0.4-0.1-0.7-0.4-0.9c-0.3-0.3-0.5-0.4-0.9-0.4c-0.2,0-0.4,0.1-0.6,0.2-->
<!--                                            c-0.2,0.1-0.3,0.3-0.4,0.5C293.8,387.5,293.7,387.7,293.7,387.9z"/>-->
<!--                                        <path class="st3" d="M299.1,389.4v-3h2.5v3h-0.3v-2.7h-1.9v2.7H299.1z"/>-->
<!--                                        <path class="st3" d="M302.7,390.4v-3.9h0.3v0.7c0.3-0.5,0.7-0.7,1.2-0.7c0.2,0,0.4,0,0.5,0.1c0.2,0.1,0.3,0.2,0.5,0.3-->
<!--                                            c0.1,0.1,0.3,0.3,0.3,0.5c0.1,0.2,0.1,0.4,0.1,0.7c0,0.2,0,0.4-0.1,0.6s-0.2,0.4-0.3,0.5c-0.1,0.1-0.3,0.2-0.5,0.3-->
<!--                                            c-0.2,0.1-0.4,0.1-0.5,0.1c-0.5,0-0.9-0.2-1.2-0.7v1.6L302.7,390.4L302.7,390.4z M302.9,387.9c0,0.3,0.1,0.5,0.2,0.7-->
<!--                                            c0.1,0.2,0.3,0.4,0.4,0.4c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.3-0.5,0.3-0.9c0-0.2,0-0.4-0.1-0.5-->
<!--                                            c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.2-0.2-0.4-0.3c-0.1-0.1-0.3-0.1-0.4-0.1c-0.2,0-0.3,0-0.4,0.1c-0.2,0.1-0.3,0.2-0.4,0.3-->
<!--                                            c-0.1,0.1-0.2,0.3-0.3,0.4C303,387.6,302.9,387.8,302.9,387.9z"/>-->
<!--                                        <path class="st3" d="M306.3,387.9c0-0.2,0-0.4,0.1-0.6c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.1,0.3-0.3,0.5-0.4-->
<!--                                            c0.2-0.1,0.4-0.1,0.6-0.1c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.4,0.3,0.5,0.6c0.1,0.2,0.2,0.5,0.2,0.8c0,0.3-0.1,0.5-0.2,0.8-->
<!--                                            c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.1-0.5,0.2-0.8,0.2c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.4-0.2-0.5-0.4c-0.1-0.1-0.2-0.3-0.3-0.5-->
<!--                                            C306.4,388.4,306.3,388.2,306.3,387.9z M306.6,387.9c0,0.4,0.1,0.7,0.4,0.9c0.2,0.3,0.5,0.4,0.9,0.4c0.2,0,0.4-0.1,0.6-0.2-->
<!--                                            c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0.2-0.4,0.2-0.6c0-0.4-0.1-0.7-0.4-0.9c-0.3-0.3-0.5-0.4-0.9-0.4c-0.2,0-0.4,0.1-0.6,0.2-->
<!--                                            c-0.2,0.1-0.3,0.3-0.4,0.5C306.7,387.5,306.6,387.7,306.6,387.9z"/>-->
<!--                                        <path class="st3" d="M310.2,389.4v-3h2.5v3h-0.3v-2.7h-1.9v2.7H310.2z"/>-->
<!--                                        <path class="st3" d="M313.6,387.9c0-0.2,0-0.4,0.1-0.6c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.1,0.3-0.3,0.5-0.4-->
<!--                                            c0.2-0.1,0.4-0.1,0.6-0.1c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.4,0.3,0.5,0.6c0.1,0.2,0.2,0.5,0.2,0.8c0,0.3-0.1,0.5-0.2,0.8-->
<!--                                            c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.1-0.5,0.2-0.8,0.2c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.4-0.2-0.5-0.4c-0.1-0.1-0.2-0.3-0.3-0.5-->
<!--                                            C313.6,388.4,313.6,388.2,313.6,387.9z M313.9,387.9c0,0.4,0.1,0.7,0.4,0.9c0.2,0.3,0.5,0.4,0.9,0.4c0.2,0,0.4-0.1,0.6-0.2-->
<!--                                            c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0.2-0.4,0.2-0.6c0-0.4-0.1-0.7-0.4-0.9c-0.3-0.3-0.5-0.4-0.9-0.4c-0.2,0-0.4,0.1-0.6,0.2-->
<!--                                            c-0.2,0.1-0.3,0.3-0.4,0.5C313.9,387.5,313.9,387.7,313.9,387.9z"/>-->
<!--                                        <path class="st3" d="M317.2,389.1l0.2-0.2c0.3,0.3,0.7,0.4,1,0.4c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.3-0.3,0.3-0.4-->
<!--                                            c0-0.2-0.1-0.3-0.2-0.4c-0.2-0.1-0.4-0.2-0.6-0.2H318v-0.3h0.4c0.2,0,0.4-0.1,0.5-0.2c0.1-0.1,0.2-0.3,0.2-0.4-->
<!--                                            c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.3,0-0.5,0.1c-0.2,0.1-0.3,0.1-0.4,0.2l-0.2-0.2-->
<!--                                            c0.3-0.2,0.7-0.4,1.1-0.4c0.3,0,0.6,0.1,0.7,0.2c0.2,0.2,0.3,0.4,0.3,0.6c0,0.3-0.2,0.5-0.5,0.7c0.4,0.1,0.5,0.4,0.5,0.7-->
<!--                                            c0,0.3-0.1,0.4-0.3,0.6c-0.2,0.2-0.5,0.3-0.8,0.3C318,389.5,317.6,389.3,317.2,389.1z"/>-->
<!--                                        <path class="st3" d="M320.4,389.4v-3h0.3v2.6l2-2.6h0.3v3h-0.3v-2.6l-2,2.6H320.4z"/>-->
<!--                                        <path class="st3" d="M324.1,389.4v-3h0.3v2.7h1.9v-2.7h0.3v2.7h0.5l-0.1,1.1h-0.2v-0.8C326.8,389.4,324.1,389.4,324.1,389.4z"/>-->
<!--                                        <path class="st3" d="M327.8,385.7v-0.4h0.4v0.4H327.8z M327.8,389.4v-3h0.3v3H327.8z"/>-->
<!--                                        <path class="st3" d="M328.7,386v-0.5h0.4v0.5H328.7z M329.3,389.4v-3h0.3v3H329.3z M329.7,386v-0.5h0.4v0.5H329.7z"/>-->
<!--                                        <path class="st3" d="M330.6,386.9v-0.5h0.4v0.5H330.6z M330.6,389.4v-0.5h0.4v0.5H330.6z"/>-->
<!--                                    </g>-->
<!--                                </g>-->
<!--                                <g>-->
<!--                                    <g>-->
<!--                                        <path class="st3" d="M267.9,395.4h2.2l1.3,4.2l1.4-4.3h1.8l1.4,4.3l1.3-4.2h2.1l-2.5,7.4H275l-1.5-4.2l-1.5,4.2h-1.8-->
<!--                                            L267.9,395.4z"/>-->
<!--                                        <path class="st3" d="M280.1,402.7v-7.4h2v2.8h2.6v-2.8h2v7.4h-2v-2.8h-2.6v2.8H280.1z"/>-->
<!--                                        <path class="st3" d="M287.5,402.7l3.1-7.4h2l3.1,7.4h-2.2l-0.5-1.3h-2.8l-0.5,1.3H287.5z M290.7,399.8h1.7l-0.8-2.1L290.7,399.8-->
<!--                                            z"/>-->
<!--                                        <path class="st3" d="M296,397.2v-1.8h6.4v1.8h-2.2v5.5h-2v-5.5H296z"/>-->
<!--                                        <path class="st3" d="M305.8,397.2v-1.8h6.4v1.8h-2.2v5.5h-2v-5.5H305.8z"/>-->
<!--                                        <path class="st3" d="M312.9,399.1c0-0.5,0.1-1,0.3-1.5c0.2-0.5,0.5-0.9,0.8-1.2c0.4-0.4,0.8-0.6,1.3-0.8c0.5-0.2,1-0.3,1.6-0.3-->
<!--                                            s1.1,0.1,1.6,0.3s0.9,0.5,1.2,0.8c0.4,0.4,0.6,0.7,0.8,1.2c0.2,0.5,0.3,1,0.3,1.5c0,0.5-0.1,1-0.3,1.5c-0.2,0.5-0.5,0.9-0.8,1.2-->
<!--                                            c-0.4,0.3-0.8,0.6-1.2,0.8c-0.5,0.2-1,0.3-1.6,0.3c-0.7,0-1.4-0.2-2-0.5c-0.6-0.4-1.1-0.8-1.4-1.4-->
<!--                                            C313.1,400.4,312.9,399.8,312.9,399.1z M315,399.1c0,0.5,0.2,1,0.5,1.4c0.4,0.4,0.8,0.6,1.3,0.6s1-0.2,1.3-0.6-->
<!--                                            c0.4-0.4,0.5-0.9,0.5-1.4s-0.2-1-0.5-1.4c-0.4-0.4-0.8-0.6-1.4-0.6c-0.5,0-1,0.2-1.3,0.6C315.2,398,315,398.5,315,399.1z"/>-->
<!--                                        <path class="st3" d="M324.8,402.7v-7.4h3.8c0.9,0,1.6,0.2,2,0.6c0.3,0.3,0.5,0.7,0.5,1.2c0,0.8-0.4,1.3-1.1,1.7-->
<!--                                            c0.5,0.2,0.8,0.4,1.1,0.7c0.3,0.3,0.4,0.7,0.4,1.2c0,0.6-0.3,1.1-0.7,1.5c-0.5,0.4-1.2,0.5-2,0.5L324.8,402.7L324.8,402.7z-->
<!--                                             M326.8,398.3h1.3c0.6,0,1-0.2,1-0.7c0-0.2-0.1-0.4-0.2-0.5c-0.2-0.1-0.4-0.2-0.7-0.2h-1.3L326.8,398.3L326.8,398.3z-->
<!--                                             M326.8,401.1h1.6c0.3,0,0.5-0.1,0.7-0.2c0.2-0.1,0.3-0.3,0.3-0.5c0-0.2-0.1-0.4-0.3-0.5c-0.2-0.1-0.4-0.2-0.7-0.2h-1.6V401.1z"-->
<!--                                            />-->
<!--                                        <path class="st3" d="M332.2,399.5v-4.1h2.1v4.1c0,0.5,0.1,0.9,0.4,1.2s0.6,0.4,1,0.4c0.4,0,0.8-0.1,1-0.4-->
<!--                                            c0.3-0.3,0.4-0.6,0.4-1.1v-4.1h2.1v4.1c0,0.6-0.1,1.1-0.3,1.5c-0.2,0.4-0.4,0.8-0.7,1.1c-0.3,0.3-0.7,0.5-1.1,0.6-->
<!--                                            c-0.4,0.1-0.9,0.2-1.4,0.2c-1.1,0-1.9-0.3-2.5-0.8C332.5,401.5,332.2,400.6,332.2,399.5z"/>-->
<!--                                        <path class="st3" d="M339.6,395.4h2.3l1.5,2.7l1.5-2.7h2.3l-2.8,4.6v2.8h-2V400L339.6,395.4z"/>-->
<!--                                    </g>-->
<!--                                </g>-->
<!--                            </g>-->
<!--                        </g>-->
<!--                    </svg>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row wedding-promotion hidden-xs">-->
<!--            <div class=" col-sm-6 col-md-4 clearfix">-->
<!--                    <div class="wedding-img">Light-->
<!--                        <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promotion1.jpeg"/>-->
<!--                    </div>-->
<!--                    <h3>Instagram-clip</h3>-->
<!--                    <h4>в подарунок</h4>-->
<!--                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>-->
<!---->
<!--                    <button type="submit" id="submit-order0" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                </div>-->
<!--            <div class="col-sm-6 col-md-4 clearfix">-->
<!--                    <div class="wedding-img">Pro-->
<!--                        <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promoion2.jpeg"/>-->
<!--                    </div>-->
<!--                    <h3>Instagram-clip</h3>-->
<!--                    <h4>в подарунок</h4>-->
<!--                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-5 хв.<br>Виготовлення 2-4 місяці</p>-->
<!---->
<!--                    <button type="submit" id="submit-order1" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                </div>-->
<!--            <div class="col-sm-6 col-md-4 clearfix">-->
<!--                    <div class="wedding-img">Pro+-->
<!--                        <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promotion3.png"/>-->
<!--                    </div>-->
<!--                    <h3>Instagram-clip</h3>-->
<!--                    <h4>в подарунок</h4>-->
<!--                    <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>-->
<!---->
<!--                    <button type="submit" id="submit-order2" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                </div>-->
<!--        </div>-->
<!--        <div class="row wedding-promotion visible-xs">-->
<!--            <div id="accordion">-->
<!--                <div class=" col-sm-6 col-md-4 clearfix">-->
<!--                    <input type="checkbox" id="check-1">-->
<!--                    <label for="check-1">-->
<!--                        <div  class="wedding-img">-->
<!--                            Light-->
<!--                            <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promotion1.jpeg"/>-->
<!--                        </div>-->
<!--                    </label>-->
<!--                    <article>-->
<!--                        <h3>Instagram-clip</h3>-->
<!--                        <h4>в подарунок</h4>-->
<!--                        <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>-->
<!--                        <button type="submit" id="submit-order01" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                    </article>-->
<!--                </div>-->
<!--                <div class="col-sm-6 col-md-4 clearfix">-->
<!--                    <input type="checkbox" id="check-2">-->
<!--                    <label for="check-2">-->
<!--                        <div class="wedding-img">Pro<span style="padding: 14px"></span>-->
<!--                            <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promoion2.jpeg"/>-->
<!--                        </div>-->
<!--                    </label>-->
<!--                    <article>-->
<!--                        <h3>Instagram-clip</h3>-->
<!--                        <h4>в подарунок</h4>-->
<!--                        <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>-->
<!--                        <button type="submit" id="submit-order11" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                    </article>-->
<!--                </div>-->
<!--                <div class="col-sm-6 col-md-4 clearfix">-->
<!--                    <input type="checkbox" id="check-3">-->
<!--                    <label for="check-3">-->
<!--                        <div class="wedding-img">Pro+-->
<!--                            <img class="wedding-img-img img-responsive" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/wedding-promotion3.png"/>-->
<!--                        </div>-->
<!--                    </label>-->
<!--                    <article>-->
<!--                        <h3>Instagram-clip</h3>-->
<!--                        <h4>в подарунок</h4>-->
<!--                        <p>Передвесільна консультація<br>1 відеограф<br>Авторський фільм 30-40хв<br>Кліп 2-4 хв.<br>Виготовлення 2-4 місяці</p>-->
<!--                        <button type="submit" id="submit-order21" class="submit-order btn btn-primary" name="submit">Замовити</button>-->
<!--                    </article>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
