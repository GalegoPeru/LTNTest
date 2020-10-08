<?php get_header("custom");?>
<?php $categoria=data_categoria();?>


<?php if($categoria->category_parent==44):?>
	
			<?php // get_template_part("template-parts/content","subcategory-latinaplay");
			get_template_part("template-parts/content","category-play");
			?>
<?php else:?>
	<?php get_template_part("template-parts/content","category");?>
<?php endif;?>



<?php get_footer("custom");?>