<section class="brand-slider" id="brand-slider">
    <span style="display:block;height:40vh;background:#000;opacity:.7;"></span>
    <div class="container-fluid">
        <div class="row"  style="margin-top: -220px;background-color: transparent ">
            <?php echo do_shortcode('[print_circle_slider_plus_lightbox]');?>
        </div>
    </div>
</section>
<footer id="footer">
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
                    <div class="col-md-4 hidden-xs">
                        <h3>Latest Facebook</h3>
                        <div class="footer-menu">
                            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Flibertyproduction%2Fvideos%2F1983199758569644%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <h3>Напишіть нам:</h3>
                            <div class="wrap">
                                <div id="emailmsg" style="display: none;clear:both;">Неправильний емейл</div>
                                <?php
                                $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                                $segments = explode('/', $urlArray);
                                //$numSegments = count($segments);
                                $currentSegment = $segments[1];

                                if($currentSegment=='thankyou'){
                                     get_template_part('content');}
                                ?>
                                <?php echo do_shortcode('[sitepoint_contact_form]');?>
                                <div id="hidden_div" style="display:none">
                                    <p>Show me when form is submitted :) </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="footer-copy">
                <div class="row">
                    <div class="footer-navigation hidden-xs">
                        <ul>
                            <li><a href="#"><img alt="Logo" class="footer-logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand_img_sm.png"></a></li>
                            <li><a href="#">Про нас</a></li>
                            <li><a href="#">Портфоліо</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Новини</a></li>
<!--                            <li><a href="#">Наші клієнти</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="row social-connect" style="display:block !important;">
                    <div class="social-button" style="display:block !important;">
                        <div class="">
                            <section class="footer-social-section" style="display:block !important;">
                                <span class="footer-social-icons-wrapper" style="display:block !important;">
                                    <a href="#" target="_blank" title="Vimeo"><i class="liberty-icon-vimeo"></i></a>
                                    <a href="#" target="_blank" title="Facebook" style="display:inline-block !important;"><i class="liberty-icon-facebook"></i></a>
                                    <a href="#" target="_blank" title="Youtube" style="display:inline-block !important;"><i class="liberty-icon-youtube"></i></a>
                                    <a href="#" target="_blank" title="Instagram"><i class="liberty-icon-instagram"></i></a>
                                </span>
                            </section>
                        </div>
                    </div>
                </div>
                <!--<div class="row">-->
                    <!--<@created by web.adv.solution-->
                <!--</div>-->
            </div>
        </div>
    </div>
</footer>