    <div class="row">
	<div id="footer">Copyright &copy; <a href="<?php bloginfo('home'); ?>/"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?></div>
    

</div>
</div>
</div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>