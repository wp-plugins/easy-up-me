<?php
/*
Plugin Name: Easy Up Me
Plugin URI: http://ele-zeta.com.ar/2008/05/30/easy-up-me-wordpress-plug-in/
Description: This pluggin allows the poster uploading a bunch of stuff and writing the post at the same time. No LightBox any more
Author: Lucas Zallio
Version: 0.1
Author URI: http://www.ele-zeta.com.ar
*/
function add_easy_upme() 
{
	?>
<div id="categorydiv" class="postbox">
	<h3><a class="togbox">+</a>Uploader</h3>
			<p>
			<script>
			function reloadup()
			{
				document.getElementById('add_media').src='<?=bloginfo('wpurl');?>/wp-admin/media-upload.php';
			}
			</script>
			<a href="#" onclick="reloadup();return false">Reload</a>
	<div class="inside">
			<iframe frameborder="0" id="add_media" style="width: 669px; height: 512px;" src="<?=bloginfo('wpurl');?>/wp-admin/media-upload.php" hspace="0">
			</iframe>
			</p>
	</div>
</div>
	<?
}
add_action('edit_form_advanced', 'add_easy_upme');
add_action('simple_edit_form', 'add_easy_upme');
?>