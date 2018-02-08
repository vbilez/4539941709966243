<header>
    <?php


       $menu_items=(array) wp_get_nav_menu_items('header-menu');

       $c= count($menu_items);
        $i=0;
        if($i+1 <= $c ){ $item1= $menu_items[$i]->title;$url1= $menu_items[$i]->url; } else {$item1='Про нас';$url1='#';};
        $i=1;
        if($i+1 <= $c ){ $item2= $menu_items[$i]->title;$url2= $menu_items[$i]->url; } else {$item2='Портфоліо';$url2='#';};
        $i=2;
        if($i+1 <= $c ){ $item3= $menu_items[$i]->title;$url3= $menu_items[$i]->url; } else {$item3='Контакти';$url3='#';};
        $i=3;
        if($i+1 <= $c ){ $item4= $menu_items[$i]->title;$url4= $menu_items[$i]->url; } else {$item4='Dropdown';$url4='#';};
        $i=4;
        if($i+1 <= $c ){ $item5= $menu_items[$i]->title;$url5= $menu_items[$i]->url; } else {$item5='Wedding';$url5=get_home_url().'/portfolio-wedding';};
        $i=5;
        if($i+1 <= $c ){ $item6= $menu_items[$i]->title;$url6= $menu_items[$i]->url; } else {$item6='Production';$url6=get_home_url().'/portfolio-production';};
        $i=6;
        if($i+1 <= $c ){ $item7= $menu_items[$i]->title;$url7= $menu_items[$i]->url; } else {$item7='Production';$url7=get_home_url().'/somethingelse';};

    ?>
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
                    <li><a href="<?=$url1?>"><?=$item1?> <i class="fa fa-angle-down"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$item2?> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=$url3?> "><?=$item3?><m/a></li>
                            <li><a href="<?=$url4?>"><?=$item4?></a></li>

                        </ul>
                    </li>
                    <li><a href="<?=$url5?>"><?=$item5?> <i class="fa fa-angle-down"></i></a></li>

                    <li><a href="<?=$url6?>"><?=$item6?> <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="<?=$url7?>"><?=$item7?> <i class="fa fa-angle-down"></i></a></li>

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
