<?php
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
//$numSegments = count($segments);
$currentSegment = $segments[1];
$idseg = $segments[2];
$seg3=$segments[3];

$currentSegment=urldecode($currentSegment);
$s=$_GET['s'];
if($currentSegment=='page')
{$paged=$seg3;}
else {
//$paged=$_GET['page'];
}
 if($currentSegment=='portfolio-production'){
        $bg='banner_bg_filter.jpg';
    }
 if($currentSegment=='portfolio-wedding'){
        $bg='wedding_filter.jpg';
    }
?>
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
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">



    <script src="<?php echo get_template_directory_uri(); ?>/js/send-text-input.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php 
        if($currentSegment=='video'){
          echo '<link href="'.get_template_directory_uri().'/css/video-js.css" rel="stylesheet">';
    }
    ?>
    <?php wp_head(); ?>
</head>
<style type="text/css">
.nodecor{
    text-decoration: none !important;
}
@media (min-width: 1200px) {
    i {
        font-size: 20px;
    }
}
@font-face {
  font-family: 'Corinthia';
  src: local("Corinthia"), url("assets/fonts/corinthia.ttf") format("woff"), url("https://nomail.com.ua/files/woff/d9af980a0070a31725a941a825f01086.woff") format("woff"); }
 body {

    background: url(<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $bg; ?>) no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: cover; /* Современные браузеры */

   }

   
   @media all and (min-width: 1024px) and (max-width: 2500px){
        .portfolio-title{
            margin-left:460px;
           height:0.5em;
            padding-top:70px;
        }
        .videoplayer{
        background-color: transparent;
        height: 400px;
        width: 58.33333333%;
        float: left;
        position: relative;
        min-height: 1px;
        }

       @media all and (orientation: portrait){
         .contheight{
            height: 100vh;
            padding-right:0!important;padding-left:0!important;
        }
       }
       @media all and (orientation: landscape)and (max-height: 768px){
         .contheight{
            height: 150vh;
            padding-right:0!important;padding-left:0!important;
        }
       }

        @media all and (orientation: landscape)and (min-height: 769px)and (max-height: 2560px){
         .contheight{
            height: 100vh;
            padding-right:0!important;padding-left:0!important;
        }
       }
     .mt20px{
        margin-top: 20px;
     }
    }
    @media only screen and (min-width: 350px) and (max-width: 768px){
        .portfolio-title{
            padding-top:70px;
        }
           .videoplayer{
        background-color: transparent;
        height: 200px;
        width: 100% !important;
        }

        .contheight{
            height: 260vh;
            <?php if(($currentSegment=='portfolio-production')||($currentSegment=='portfolio-wedding')) {?>
                padding-right:0!important;padding-left:0!important;
                <?php }?>
        }
     .mt20px{
        margin-top: 20px;
     }
 }



    @media only screen and (min-width: 993px) and (max-width: 1023px){
        .portfolio-title{
            padding-top:70px;
        }
           .videoplayer{
        background-color: transparent;
        height: 400px;
        width: 58.33333333%;
        }

        .contheight{
            height: 150vh;
        }
         .mt20px{
            margin-top: 20px;
        }
    
    }

    @media only screen and (min-width: 768px) and (max-width: 992px){
        .portfolio-title{
            padding-top:70px;
        }
           .videoplayer{
        background-color: transparent;
        height: 400px;
        width: 58.33333333%;
        }

        .contheight{
            height: 190vh;
        }
         .mt20px{
        margin-top: 20px;
     }
    
    }
   .description{
        padding-top: 20px;
        background-color: #C8C8C8;
        height: 400px;
        padding-left: 0px!important;
        padding-right: 0px!important;
        overflow-y:scroll;
    }
   .title-text{
    font-family:'Corinthia',sans-serif;
    opacity: 1;
    float:left;
    margin-left:7px;
    font-size:42px;
    vertical-align:middle;
    color:white;
   }
   .title-date{
    opacity: 1;
    float:right;
    margin-right:15px;
    font-size:32px;
    margin-top:5px;
    vertical-align:middle;
    font-weight:bold;
   }
    .title{
        height: 63px;
         background: rgba(120, 250, 249, 0.7);
        margin-top:-63px;
        width: 350px;
    }


    .title-wedding{

    }
    .parallelogram-inner-text-modified{
        color: #4f504f;
        
        padding: 0 40px;
        
        color: #fff;
        display: table-cell;
        vertical-align: middle;
        -webkit-transform: skew(20deg);
        -moz-transform: skew(20deg);
        -o-transform: skew(20deg);
         color: #fff;
        font-family: 'GothamPro', sans-serif;
        font-size: 27px;
        font-weight: bold;

    }

    .parallelogram-modified{
        
        color: #fff;
        display: table-cell;
        vertical-align: middle;
        -webkit-transform: skew(-20deg);
        -moz-transform: skew(-20deg);
        -o-transform: skew(-20deg);
         color: #fff;
         font-family: 'GothamPro-Bold', sans-serif;
         width: 200px;
         height: 30px;
         text-align: center;
         padding: 0px 7px;
         background: #66FAF9;
         margin-left: 20px;
        
         
    }
    
    

    .filler{
        float: left;
        width: 2.7%;
        position: relative;
        min-height: 40px;
        min-width: 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .description-title
    {
        font-family: 'GothamPro-Bold', sans-serif!important;
        font-size: 41px;
        color:white;
        line-height: 1;

    }
    .description-date
    {
        font-family: 'GothamPro-Bold', sans-serif!important;
        font-size: 41px;
        color:white;
        line-height: 1;
    }
    .description-text
    {
        font-family: 'GothamPro', sans-serif!important;
        text-align: justify;
        padding-left: 20px;
        padding-right: 20px;
        color:white;
        font-weight: 600;
        
    }
</style>

<body >

<center>

    <div class="container contheight" style="">

    <div class="row">

        <div class="portfolio-title">
        <div class="parallelogram-modified" style="opacity: 1;">
                 <div class="parallelogram-inner-text-modified" >Портфоліо</div>
            </div>
        </div>

        <div class="title-wedding">
            <?php 
            $wed='<div style="margin-top:-25px;font-size:100px;font-family:\'Corinthia\', sans-serif;font-size: calc(7vw + 2vh + 2vmin);color:white">
                Wedding</div>';
            $prod='<div style="margin-top:5px;font-family:\'GothamPro-Bold\', sans-serif;font-size: calc(3vw + 2vh + 2vmin);color:white">
                Production</div>';
                $wed_v='<div style="margin-top:-25px;font-size:100px;font-family:\'Corinthia\', sans-serif;font-size: calc(7vw + 2vh + 2vmin);color:#C8C8C8">
                Wedding</div>';
                $prod_v='<div style="margin-top:5px;font-family:\'GothamPro-Bold\', sans-serif;font-size: calc(3vw + 2vh + 2vmin);color:#C8C8C8">
                Production</div>';
            if($currentSegment=='portfolio-wedding'){
                echo $wed;
            }
            if($currentSegment=='portfolio-production'){
                echo $prod;
            }
             if($currentSegment=='video'){
                if($seg3==5)
                {
                    echo $wed_v;
                }
                if($seg3==6)
                {
                   echo $prod_v;
                }
            }
            ?>
                
        </div>
    </div>


        
<?php
$args =

array(
    'post_type' => 'attachment',
    'post_mime_type'=>'video/mp4',
    'post_status'    => 'inherit',
    's'=>$s,
    'posts_per_page'=>6,
    'paged' => $paged,
    'cat'=>5
);
$args2 =

array(
    'post_type' => 'attachment',
    'post_mime_type'=>'video/mp4',
    'post_status'    => 'inherit',
    's'=>$s,
    'posts_per_page'=>6,
    'paged' => $paged,
    'cat'=>6
);
$q = new WP_Query( $args );
$q2 = new WP_Query( $args2 );

 
 
?>
   
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
    <?php if(($currentSegment=='portfolio-wedding')||($currentSegment=='portfolio-production')){?>
   
    <div style="position:absolute;margin-top:190px;vertical-align:middle;float:left;margin-left:-50px;">
        <?php previous_posts_link('<i style="color:#66FAF9;font-family: FontAwesome!important" class="icon-4x icon-chevron-left" ></i>',$q->max_num_pages);?>
    </div>
    
    
    <div style="position:absolute;margin-top:190px;margin-left:98%;float:right;vertical-align:middle;margin-right:5px;">
        
        <?php next_posts_link('<i style="color:#66FAF9;font-family: FontAwesome!important" class="icon-4x icon-chevron-right" ></i>',$q->max_num_pages);?>
    </div>
    
    <div style="clear:both"></div>
    <?php }?>
<div class="row <?php if($currentSegment=='video'){echo 'trscale';}?>" style="padding 5px 10px;">

<?php
/**
 * Like get_template_part() put lets you pass args to the template file
 * Args are available in the tempalte as $template_args array
 * @param string filepart
 * @param mixed wp_args style argument list
 */
function hm_get_template_part( $file, $template_args = array(), $cache_args = array() ) {
    $template_args = wp_parse_args( $template_args );
    $cache_args = wp_parse_args( $cache_args );
    if ( $cache_args ) {
        foreach ( $template_args as $key => $value ) {
            if ( is_scalar( $value ) || is_array( $value ) ) {
                $cache_args[$key] = $value;
            } else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
                $cache_args[$key] = call_user_method( 'get_id', $value );
            }
        }
        if ( ( $cache = wp_cache_get( $file, serialize( $cache_args ) ) ) !== false ) {
            if ( ! empty( $template_args['return'] ) )
                return $cache;
            echo $cache;
            return;
        }
    }
    $file_handle = $file;
    do_action( 'start_operation', 'hm_template_part::' . $file_handle );
    if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) )
        $file = get_stylesheet_directory() . '/' . $file . '.php';
    elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) )
        $file = get_template_directory() . '/' . $file . '.php';
    ob_start();
    $return = require( $file );
    $data = ob_get_clean();
    do_action( 'end_operation', 'hm_template_part::' . $file_handle );
    if ( $cache_args ) {
        wp_cache_set( $file, $data, serialize( $cache_args ), 3600 );
    }
    if ( ! empty( $template_args['return'] ) )
        if ( $return === false )
            return false;
        else
            return $data;
    echo $data;
}


if($currentSegment=='portfolio-wedding' || $currentSegment=='portfolio-production' || $currentSegment=='thankyou'
    || $currentSegment=='video')
{
    if($currentSegment=='portfolio-wedding')   {

        if ( $q->have_posts() ) {
            while ( $q->have_posts() ) {
                $q->the_post();
                // );
                $category=get_the_category();
                $category_use=$category[0]->term_id;
                $postdate=   get_the_date('d') .'|'.get_the_date('m') ;
                $post_title=mb_strimwidth(get_the_title(),0,15); 
                $post_thumbnail=get_the_post_thumbnail_url(get_the_ID(),'post_thumbnail');
                echo'
                <div class="col-md-6 col-xs-12 col-sm-12 col-lg-4 mt20px" style="opacity:1;">
                <a href='.get_home_url().'/video/'.get_the_ID() .'/'.$category_use.'">'.'
                <img width="350" height="200" src="'.$post_thumbnail.'" style="opacity:1;">
                '.'</a>'.'
            <div class="title" style="position:relative;">
                <div class="title-text" >'.$post_title .'</div>
                <div class="title-date" >'.$postdate.'</div>
            </div>
        </div>';
                // Your loop

            }
            wp_reset_postdata();

        }
        
        //get_template_part( 'portfolio-wedding' );
    }
    if($currentSegment=='portfolio-production')   {
        if ( $q2->have_posts() ) {
            while ( $q2->have_posts() ) {
                $q2->the_post();
                // );
                $category=get_the_category();
                $category_use=$category[0]->term_id;
                $postdate=   get_the_date('d') .'|'.get_the_date('m') ;
                $post_title=mb_strimwidth(get_the_title(),0,15);
                $post_thumbnail=get_the_post_thumbnail_url(get_the_ID(),'post_thumbnail');
               echo'
                <div class="col-md-6 col-xs-12 col-sm-12 col-lg-4 mt20px" style="opacity:1;">
                <a href='.get_home_url().'/video/'.get_the_ID() .'/'.$category_use.'">'.'
                <img width="350" height="200" src="'.$post_thumbnail.'" style="opacity:1;">
                '.'</a>'.'
            <div class="title" style="position:relative;">
              <div class="title-text" >'.$post_title .'</div>
              <div class="title-date" >'.$postdate.'</div>
            </div>
        </div>';
                // Your loop

            }
            wp_reset_postdata();
        }
        //get_template_part( 'portfolio-production' );
    }
    if($currentSegment=='video')   {
        //get_template_part( 'video' );
        hm_get_template_part( 'video',['option'=>$idseg]);
    }
    if($currentSegment=='thankyou')   {
        //$ty=1;$mailcontent=   get_template_part( 'content' );
    }
}
 else {
    if($currentSegment=="")    {}
    //else{        get_template_part( 'content' );   }

 }
?>
    </div>
</div>
<div style="clear:both"></div>
<div style="width:100%;height:30px;"></div>
<?php if(($currentSegment=='portfolio-production')||($currentSegment=='portfolio-wedding')) {?>
    <div class="row">
        
        <div>   
            <form>
                <input type="text" name="s" style="width:200px;height:30px;opacity:0.45;background-color:gray;border:none;display:inline-block"> <span class="glyphicon glyphicon-search" style="color:white"></span>
             </form>               
        </div>

    </div>
    <?php }?>
 

    </div>
  
</center>
<footer>
    <section class="socwidget" style="position:relative">
  <?= \liberty\widgets\SocialButtons::renderItems([
        'class' => 'social-connect social-connect-one-screen-layout'
    ]) ; ?>
    </section>
</footer>
<!--for debug purpose-->

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>
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

<?php wp_footer(); ?>
</body>
</html>


