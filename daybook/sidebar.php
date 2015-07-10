<aside class="side">
				<div class="profile-img">
				<?php if(is_active_sidebar('side-text')):?>
					<?php dynamic_sidebar('profile-image');?>
				<?php endif; ?>

				<?php if(is_active_sidebar('side-text')):?>
						<?php dynamic_sidebar('side-text');?>
				<?php endif; ?>
				
					<nav class="side-links">
						<ul>
							<?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
						</ul>
					</nav>
				</div><!--End profile image div-->
				<div class="archives">
					<h2 class="side-title">Categories</h2>
					<nav class="second-nav">
						<ul>
							<?php wp_list_categories(array('show_option_all' => '', 'order' => 'ASC', 'style' => 'list', 'title_li' => '' )); ?>
						</ul>
					</nav>
				<?php if(is_active_sidebar('extra')):?>
						<?php dynamic_sidebar('extra');?>
				<?php endif; ?>
				</div>
			</aside><!--End Sidebar-->
		</section><!--End Section-->