<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<b><?php _e('Be sure to backup your database before use this plugin!', 'search-replace'); ?></b>
<form action="" method="post" id="search-and-replace">
	<?php wp_nonce_field( 'search_replace' ) ?>
	<label for="s"><?php _e('Search:', 'search-replace'); ?></label><input type="text" name="s" id="s" /><br />
	<label for="r"><?php _e('Replace by:', 'search-replace'); ?></label><input type="text" name="r" id="r" /> <?php _e('(replace both title and content)', 'search-replace'); ?><br />
	<label for="in"><?php _e('In:', 'search-replace'); ?></label>
	<input type="checkbox" value="post" name="post" /> <?php _e('Posts', 'search-replace'); ?> 
	<input type="checkbox" value="page" name="page" /> <?php _e('Pages', 'search-replace'); ?><br />
	<input type="submit" value="<?php _e('Go!', 'search-replace'); ?>" />
</form>

<p>
	<a href="https://www.info-d-74.com/en/produit/search-and-replace-pro-plugin-wordpress-2/" target="_blank">
		<?php _e('Need more options? Look at Search and Replace Pro', 'search-replace'); ?></a> <a href="https://www.facebook.com/infod74/" target="_blank"><img src="<?php echo plugins_url( 'images/fb.png', dirname(__FILE__)) ?>" alt="" /></a><br />
	<a href="http://www.info-d-74.com/produit/search-and-replace-pro-plugin-wordpress/" target="_blank">
		<img src="<?= plugins_url( 'search-replace/images/search-and-replace-pro.png' ); ?>" />
	</a>
</p>

<script>

	jQuery(document).ready(function(){

		jQuery('#search-and-replace input[type=submit]').click(function(){

			return confirm('<?php _e('Are you sure to do that?', 'search-replace'); ?>');

		});

	});

</script>