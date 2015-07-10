<?php
/*
Template Name: Archives
Description:This template is to be used for a general search page through archives
*/
?>

<?php get_header(); ?>
		<section class="clearfix">
			<div class="main">
			<?php get_search_form(); ?>

			<div class="arcpg one">
				<h2 class="arc-style title">Archives By Month:</h2>
				<ul class="arc-style">
					<?php wp_get_archives('type=monthly');?>
				</ul>
			</div>
			
			<div class="arcpg">
				<h2 class="arc-style title">Archives By Category</h2>
				<ul class="arc-style">
					<?php wp_list_categories(array('show_option_all' => '', 'order' => 'ASC', 'style' => 'list', 'title_li' => '' )); ?>
				</ul>
			</div>
			<hr>

				<?php if(has_post_thumbnail()); ?>
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail (); ?></a>
				<?php while ( have_posts() ) : the_post(); ?>
				<p><?php the_excerpt(); ?></p>
				<hr>
				<?php endwhile;?>
			</div>
<!--Get Sidebar-->
<?php get_sidebar(); ?>
<!--Get Footer-->
<?php get_footer(); ?>