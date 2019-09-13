<?php
/**
* Template Name: Page Base
*
*/
?>
<style>
.entry-base{
	padding-left: 20px;
	padding-right: 20px;
}
	.entry-base h2 , .entry-base h3{
		margin-top: 20px;
		margin-bottom: 30px;
		font-weight: bold;
		font-size: 25px;
	}
	.entry-base p{
		font-size: 16px;
		line-height: 1.4;
		margin-bottom: 10px;
		margin-top: 10px;
	
	}
	.entry-base strong{
		font-weight: bold;
	}
	.entry-base em{
		font-style: italic;
	}
	.entry-base ul {
		margin-top: 20px;
		margin-bottom: 20px;
		padding-left: 20px;
	}
	.entry-base ul li{
		list-style: square;
		margin-bottom: 10px;
		line-height: 1.4;
		margin-top: 10px;
	}
</style>
<?php get_header("custom");?>
<div class="container entry-base">
<?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
	</div>
<?php get_footer("custom");?>