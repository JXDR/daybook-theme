<!--Get header-->
<?php get_header(); ?>
		<section class="clearfix">
			<div class="main">
			<!--Check if there are posts to display-->
			<?php if (have_posts()) :?>
			<!--Check if there is more than one post and display style accordingly-->
			<?php if(($wp_query->post_count)> 1) :?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="content-container">
					<?php if(has_post_thumbnail()); ?>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail (); ?></a>
					<p><?php the_excerpt(); ?></p>
					<div class="post-info">
						<span class="postspacing">Written By: <?php the_author();?></span>
						<span class="postspacing"><?php comments_number();?></span>
						<span class="postspacing"><?php the_tags();?></span>
					</div>
				</div>
			<!--End while loop to check for multiple posts-->
			<?php endwhile ?>
			<!--Begin else statement to check for a single post-->
			<?php else :?>
			<!--Check if there is one post and display style accordingly-->
			<?php while (have_posts()) : the_post(); ?>
				<div class="content-container">
					<?php if(has_post_thumbnail()); ?>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ();?></a>
					<p><?php the_content(); ?></p>
					<div class="post-info">
						<span class="postspacing">Written By: <?php the_author();?></span>
						<span class="postspacing"><?php comments_number();?></span>
						<span class="postspacing"><?php the_tags();?></span>
					</div>
				</div>
			<!--End while loop to check for single posts-->
			<?php endwhile ?>
			<?php endif; ?>
			<!--Links for pagination between posts on index.php -->
			<span class="post-link"><?php next_posts_link( 'Older posts' ); ?></span>
			<span class="post-link two"><?php previous_posts_link( 'Newer posts' ); ?></span>
			<!--Begin else statement if no posts found-->
			<?php else:?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			</div><!--End main div-->
<!--Get Sidebar-->
<?php get_sidebar(); ?>
<!--Get Footer-->
<?php get_footer(); ?>