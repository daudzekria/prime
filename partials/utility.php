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
