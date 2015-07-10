<?php
/*
Template Name: About
Description:This template is to be used for the about page
*/
?>

<!--Get header-->
<?php get_header(); ?>
<section class="clearfix">
		 <?php if (have_posts()) : while (have_posts()) : the_post();?>
		 <?php if(has_post_thumbnail()); ?>
			<div class="about-page">
				<div class="about-img">
					<?php the_post_thumbnail ();?>
				</div>
				<p><?php the_content(); ?></p>
			</div>
		<?php endwhile; endif; ?>
<!--Get Footer-->
<?php get_footer(); ?>