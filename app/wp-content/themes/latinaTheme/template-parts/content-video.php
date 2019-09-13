<div class="player-detail">

	<iframe src='//mdstrm.com/embed/<?php echo get_field("codigo_video");?>' width='100%' height='360' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
<?php $video_player=get_field("activar_player");?>
<?php if ($video_player=="1") : ?>
	<iframe src='//mdstrm.com/embed/<?php echo get_field("codigo_video");?>' width='100%' height='360' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>	
<?php 
elseif ($video_player=="2") :
?>
<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo get_field("codigo_youtube"); ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php
endif;	
	?>

</div>


	

