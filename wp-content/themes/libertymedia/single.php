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
<?php get_header(); ?>
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
<?php get_template_part( 'content' ); ?>
<?php get_footer(); ?>
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
<script type="text/javascript">
    function showHide() {
        var div = document.getElementById("hidden_div");
        if (div.style.display == 'none') {
            div.style.display = '';
        }
        else {
            div.style.display = 'none';
        }
    }
</script>
</body>
</html>


