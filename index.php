<?php get_header(); ?>
		<div class=" row" id="contentwrap">
			<div class="col-md-8">
				<div id="content">	
               <?php dynamic_content_gallery(); ?>		
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(260,200), array("class" => "alignleft post_thumbnail")); } ?>
							<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<div class="postdate"><img alt="" src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F jS, Y') ?> <img alt="" src="<?php bloginfo('template_url'); ?>/images/user.png" /> <?php the_author() ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img alt="" src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>
			
							<div class="entry">
								<?php the_content('<strong>Read more &raquo;</strong>'); ?>
							</div>
						</div><!--/post-<?php the_ID(); ?>-->
				
				<?php endwhile; ?>
				<div class="navigation">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					<?php } ?>
				</div>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
			
				<?php endif; ?>
				</div>
			</div>
		
		<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>
