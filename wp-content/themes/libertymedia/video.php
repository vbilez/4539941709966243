<?php
            $id= $template_args['option'];
            //echo '<video src="'.get_the_guid($id).'  "></video>';
            $post=get_post($id);
$content=$post->post_content;
$title=mb_strimwidth($post->post_title,0,15);

$postdate= get_the_date('d',$post) .'|'.get_the_date('m',$post) ;
echo '
<div class="col-md-7  col-lg-7 col-sm-12 col-xs-12 videoplayer">
			<video  style="" id="my-video" class="video-js vjs-big-play-centered " controls preload="auto" width="700" height="400"
  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
    <source src="'.get_the_guid($id).'" type="video/mp4">
    
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
		</div>
		<div class="filler">
			
        </div> 
        <div class="col-md-4  col-lg-4 col-sm-12 col-xs-12 description">
			<span class="description-title">'.$title.'</span><br>
			<span class="description-date">'.$postdate.'</span><br>
			<div style="margin-bottom:20px;"></div>
            <div class="description-text">'.$content.'

			</div>
		
	</div>';
	?>
<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>