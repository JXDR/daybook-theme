<?php
/*
Single Post Template:Daybook Single Page
Description: Use this template to style posts
*/
?>
		<?php get_header(); ?>
		<section class="clearfix">
			<div class="page-content">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="content-container">
					<?php if(has_post_thumbnail()); ?>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ();?></a>
					<p><?php the_content(); ?></p>
					<div class="post-info">
						<span class="postspacing">Written By: <?php the_author();?></span>
						<span class="postspacing"><?php comments_number();?></span>
						<span class="postspacing"><?php the_tags();?></span>
					</div>
					<!--Call comments template need to style further-->
					<?php comments_template(); ?>
					<span class="post-link two">
						<?php previous_post_link('%link'); ?>
					</span>
					<span class="post-link">
						<?php next_post_link( '%link' ); ?> 
					</span>
					<?php endwhile; ?>
					<?php else : ?>
					 <h2 class="center">Not Found</h2>
					 <p class="center">
					<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
					<?php endif ?>
				</div>
			</div>
		<!--Get Sidebar-->
		<?php get_sidebar(); ?>
		<!--Get Footer-->
		<?php get_footer(); ?>