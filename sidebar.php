<div class="last col-md-3">
	
	<div class="sidebar">
    
     <?php if(get_theme_option('socialnetworks') != '') {
    		?>
    			<div class="addthis_toolbox">   
    			    <div class="custom_images">
    			            <a class="addthis_button_twitter"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/twitter.png" width="32" height="32" alt="Twitter" /></a>
    			            <a class="addthis_button_delicious"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/delicious.png" width="32" height="32" alt="Delicious" /></a>
    			            <a class="addthis_button_facebook"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/facebook.png" width="32" height="32" alt="Facebook" /></a>
    			            <a class="addthis_button_digg"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/digg.png" width="32" height="32" alt="Digg" /></a>
    			            <a class="addthis_button_stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/stumbleupon.png" width="32" height="32" alt="Stumbleupon" /></a>
    			            <a class="addthis_button_favorites"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/favorites.png" width="32" height="32" alt="Favorites" /></a>
    			            <a class="addthis_button_more"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/more.png" width="32" height="32" alt="More" /></a>
    			    </div>
    			    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4a65e1d93cd75e94"></script>
    			</div>
    			<?php
    	}
    ?>

    <?php if(get_theme_option('ads_125') != '') {
		?>
		<div class="sidebaradbox">
			<?php sidebar_ads_125(); ?>
		</div>
	<?php } ?>
    
    <?php if(get_theme_option('video') != '') {
    		?>
    		<div class="sidebarvideo">
    			<ul> <li><h2 style="margin-bottom: 10px;">Featured Video</h2>
				
				

				<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_theme_option('video'); ?>?autoplay=1" frameborder="0"></iframe>    			
				</div>
    			</li>
    			</ul>
    		</div>
    	<?php
    	}
    	?>
        
		<ul>
			<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				
				<li><h2><?php _e('Recent Posts'); ?></h2>
			               <ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>  
			               </ul>
				</li>
				
				<li><h2>Archives</h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				
				
				<?php wp_list_categories('hide_empty=0&show_count=1&depth=1&title_li=<h2>Categories</h2>'); ?>
				
				<li id="tag_cloud"><h2>Tags</h2>
					<?php wp_tag_cloud('largest=16&format=flat&number=20'); ?>
				</li>
				
			
				 
				
				

					
			<?php endif; ?>
		</ul>
        
        
		<?php if(get_theme_option('ad_sidebar1_bottom') != '') {
		?>
		<div class="sidebaradbox">
			<?php echo get_theme_option('ad_sidebar1_bottom'); ?>
		</div>
		<?php
		}
		?>
	</div>
</div>
