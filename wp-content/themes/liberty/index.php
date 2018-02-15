<?php
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
//$numSegments = count($segments);
$currentSegment = $segments[1];
$idseg = $segments[2];
$seg3=$segments[3];

$currentSegment=urldecode($currentSegment);
?>
<?php
  if($currentSegment==''){
          
    
    ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/animate.css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intro-styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intro-styles-header-menu-overrides.css">
</head>
<body>
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
                Liberty
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav header-menu">
                <li><a href="#">Про нас</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Портфоліо</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Production</a></li>
                        <li><a href="#">Wedding</a></li>
                    </ul>
                </li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Контакти</a></li>
                <li><a href="#">Наші клієнти</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<img class="feather-img opacity-0 feather-img-bg-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_top_bg.jpg" alt="">
<div class="intro-title production-title opacity-0"><a href="productionpage">Production</a></div>
<img class="feather-img opacity-0 feather-img-bg-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_bottom_bg.jpg" alt="">
<div class="intro-title wedding-title opacity-0" style=""><a href="weddingpage">Wedding</a></div>
<img class="opacity-0" id="stroke-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/feather_stroke.png" alt="" usemap="#strokemap">
<map name="strokemap">
    <area id="top-feather-area" href="111" coords="5,4,152,19,356,99,583,229,771,407,964,669,1104,978,308,1788,181,1610,68,1299,12,961,3,604" shape="poly">
    <area id="bottom-feather-area" href="222" coords="311,1741,627,1993,781,2020,1525,2025,1820,2004,1947,1933,1997,1845,1998,1686,1870,1456,1692,1244,1547,1120,1059,982" shape="poly">
</map>
<span class="stroke"></span>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/QTransform/QTransform.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jQuery-rwdImageMaps/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/intro-anims.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/anims.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/brandslider.js" type="text/javascript"></script>
</body>
</html>
<?php } ?>

<?php if($currentSegment=='weddingpage'){include('wedding.php');}?>
<?php if($currentSegment=='productionpage'){include('production.php');}?>

