<?php
/**
 * Utility helper for common functionality in starter content.
 *
 * @package Prime
 *
 * @since 2.0.0
 */

$image_path = function ( $file ) {
	echo get_parent_theme_file_uri( 'images/' . $file );
};

$divider = function() { ?>
	<div class="row bg-editor-hr-wrap">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 50%; margin: 0px auto 35px 0px;">
			</div>
		</div>
	</div>
<?php }; ?>
