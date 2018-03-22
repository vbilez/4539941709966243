<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/video.css">
<?php
            $id= $template_args['option'];
            //echo '<video src="'.get_the_guid($id).'  "></video>';
            $post=get_post($id);
$content=$post->post_content;
$title=$post->post_title;
$youtubelink='youtubelink';
$vimeolink='vimeolink';
$postname=$post->post_name;
$deltitle="Delete video";
if(
    (strpos($postname,$youtubelink)===false)
     &&
    (strpos($postname,$vimeolink)===false)
  )
{
  $video_type="video/mp4";
}
if(strpos($postname,$youtubelink)!==false)
{
  $video_type="video/youtube";
}
if(strpos($postname,$vimeolink)!==false)
{
  $video_type="video/vimeo";
}

  if ( get_current_user_id()==1 )
   {
    $before='<div class="dellink">';
    $after='</div>';

    $link = "<a href='" . wp_nonce_url( get_bloginfo('url') . "/wp-admin/post.php?action=delete&amp;post=" . $id, 'delete-post_' . $id) . "'>".$deltitle."</a>";
    echo $before . $link . $after;
    }
$postdate= get_the_date('d',$post) .'|'.get_the_date('m',$post) ;
echo '
<div class="videoplayer col-lg-8 col-md-8 col-sm-12 col-xs-12">
<video id="my-video" class="video-js vjs-big-play-centered vjs-16-9" controls preload="auto" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
    <source src="'.get_the_guid($id).'" type="'.$video_type.'">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
</video>
</div>
<div class="description hidden col-md-4 col-lg-4 col-sm-12 col-xs-12">
    <div class="description-title">'.$title.'</div>
    <div class="description-date">'.$postdate.'</div>
    <div class="description-text">'.$content.'</div>
</div>
'; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/Youtube.min.js"></script>
<script>
    $ = jQuery;
    function descTitleFontAdjust() {
        var descriptionTitle = $('.description-title');
        var fontSize = 68 / descriptionTitle.text().length;
        if (descriptionTitle.text().length < 16 && descriptionTitle.text().length > 12) {
            fontSize = 4;
        }
        if (descriptionTitle.text().length < 12) {
            fontSize = 5;
        }
        console.log(fontSize);
        descriptionTitle.css({'font-size': fontSize + 'vw'})
    }
    $(document).ready(function () {
        var description = $('.description');
        description.css({'height': $('#my-video').outerHeight()});
        description.removeClass('hidden');
        console.log($('.description-title').text().length);
        $(window).resize(function () {
            description.css({'height': $('#my-video').outerHeight()});
            descTitleFontAdjust();
        })
    });
    descTitleFontAdjust();
</script>