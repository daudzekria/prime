<?php
/**
 * Contains markup for the about page in starter content.
 *
 * @package Prime
 *
 * @since 2.0.0
 */

$post_widget_opts = function () {
	return print urlencode( json_encode( [
		'widget-boldgrid_component_postlist[][selected_post]' => 'all',
		'widget-boldgrid_component_postlist[][sorting]' => 'newest',
		'widget-boldgrid_component_postlist[][limit]' => 8,
		'widget-boldgrid_component_postlist[][columns]' => 4,
		'widget-boldgrid_component_postlist[][show_title]' => 1,
		'widget-boldgrid_component_postlist[][excerpt]' => 1,
		'widget-boldgrid_component_postlist[][author]' => 0,
		'widget-boldgrid_component_postlist[][thumbnail]' => 1,
		'widget-boldgrid_component_postlist[][date]' => 0,
	] ) );
};

$service_icons = function( $options ) use ( $image_path ) { ?>
	<div class="row" style="width: 100%; display: inline-block;">
		<?php foreach ( $options as $option ) { ?>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
				<p class="mod-reset"><img src="<?php $image_path( $option['image'] ) ?>" style="height: 75px;"></p>
				<h4 class="color-2-color"><?php print esc_html( $option['title'] ) ?></h4>
				<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration. Building brand integration and possibly funnel users. Building brand integration.</p>
			</div>
		</div>
		<?php } ?>
	</div>
<?php }; ?>

<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12 color-neutral-text-contrast color-neutral-background-color" style="padding: 4em;">
				<h1 class="h2">Heading</h1>
				<?php $divider(); ?>
				<p class="">Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus. Integer finibus a arcu et convallis. Nulla dapibus tincidunt mauris, eu faucibus nisi molestie sed. Donec vehicula sollicitudin nibh, et varius justo. Integer elementum, diam vel semper consequat, nulla est scelerisque quam, ac ornare elit risus at nulla.</p>
				<p class="">Nam metus mauris, imperdiet eget pulvinar in, cursus tincidunt ex. Etiam lorem felis, vestibulum eget fringilla vel, consequat et enim. In ut sodales diam, et auctor ex. Donec metus ipsum, egestas a rhoncus auctor, eleifend in risus. Proin congue nulla eget sem imperdiet, nec ultrices libero vestibulum.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button </a></p>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12" data-image-url="<?php $image_path( 'about1.jpg' ) ?>" style="text-align: center; background-position: 50% 100%; background-size: cover;background-image: url(<?php $image_path( 'about1.jpg' ) ?>)">
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-6 bg-background-color color-4-text-contrast color4-background-color" style="padding: 4em;">
				<h4 class="h3 color3-color">Ronnie Morris</h4>
				<h5 class="h4">Product Management</h5>
				<?php $divider(); ?>
				<p class=""><img class="aligncenter" src="<?php $image_path( 'about2.jpg' ) ?>"></p>
				<p class="" style="margin-top: 2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="bg-social-icons colored" style="margin-top: 1em; font-size: 23px;"><a style="margin-right: 5px; text-decoration: none;" href="#"><i class="fa fa-instagram" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-facebook-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-twitter-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-6 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em;">
				<h4 class="h3 color3-color">Lida Watson</h4>
				<h5 class="h4">Engineer</h5>
				<?php $divider(); ?>
				<p class=""><img class="aligncenter" src="<?php $image_path( 'about3.jpg' ) ?>"></p>
				<p class="" style="margin-top: 2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="bg-social-icons colored" style="margin-top: 1em; font-size: 23px;"><a style="margin-right: 5px; text-decoration: none;" href="#"><i class="fa fa-instagram" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-facebook-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-twitter-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12 color2-background-color color-2-text-contrast bg-background-color" style="padding: 4em;">
				<h4 class="h3 color3-color">Fannie Abbott</h4>
				<h5 class="h4">CEO</h5>
				<?php $divider(); ?>
				<p class=""><img class="aligncenter" src="<?php $image_path( 'about4.jpg' ) ?>"></p>
				<p class="" style="margin-top: 2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="bg-social-icons colored" style="margin-top: 1em; font-size: 23px;"><a style="margin-right: 5px; text-decoration: none;" href="#"><i class="fa fa-instagram" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-facebook-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a> <a style="margin: 0 5px; text-decoration: none;" href="#"><i class="fa fa-twitter-square" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></a></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section background-fixed" style="background-image: url('<?php $image_path( 'about5.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'about5.jpg' ) ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 4em 4em 1em;">
				<h2 class="">Heading</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12"></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 1em 4em 4em;">
				<div class="boldgrid-wrap-row boldgrid-slider slick-dots-overlay bg-box-cover" style="margin-top: 40px;" data-config='{"arrows":false,"autoplay":true,"autoplaySpeed":"5","dots":true,"infinite":true,"bgOptions":{"arrowsPos":"top-left","arrowsOverlay":false,"arrowsBgColor":"3","arrowsIcon":"arrow","arrowsSize":"19","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"2","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"3","text":""},"dotsColor":{"type":"class","value":"1","text":""}}}'>
					<?php $service_icons( [
						[ 'title' => 'Corporate Finance', 'image' => 'value-dark.png' ],
						[ 'title' => 'Marketing', 'image' => 'analysis-dark.png' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Corporate Finance', 'image' => 'value-dark.png' ],
						[ 'title' => 'Marketing', 'image' => 'analysis-dark.png' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Corporate Finance', 'image' => 'value-dark.png' ],
						[ 'title' => 'Marketing', 'image' => 'analysis-dark.png' ],
					] ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section color5-background-color color-5-text-contrast bg-background-color">
	<div class="container-fluid">
		<div class="row" style="padding: 4em 3em;">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding-right: 4em;">
				<h2>Our Data</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus.</p>
				<p class="">Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 align-column-center" style="padding-right: 4em;">
				<h4 class="h3">Heading</h4>
				<div class="row bg-editor-hr-wrap">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 20%; margin: 0px auto 35px 0px;">
				</div>
				</div>
				</div>
				<h4 class="h3">Heading</h4>
				<div class="row bg-editor-hr-wrap">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 40%; margin: 0px auto 35px 0px;">
				</div>
				</div>
				</div>
				<h4 class="h3">Heading</h4>
				<div class="row bg-editor-hr-wrap">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 60%; margin: 0px auto 35px 0px;">
				</div>
				</div>
				</div>
				<h4 class="h3">Heading</h4>
				<div class="row bg-editor-hr-wrap">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 80%; margin: 0px auto 35px 0px;">
				</div>
				</div>
				</div>				
				<h4 class="h3">Heading</h4>
				<div class="row bg-editor-hr-wrap">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<div>
				<hr class="bg-hr bg-hr-16 color1-color" style="width: 100%; margin: 0px auto 35px 0px;">
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 4em 4em 1em;">
				<h2 class="">Recent News</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12"></div>
		</div>
		<div class="row" style="padding: 1em 3em 4em;">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<div class="boldgrid-shortcode" data-imhwpb-draggable="true">
					[boldgrid_component type="wp_boldgrid_component_postlist" opts="<?php $post_widget_opts(); ?>"]
				</div>
			</div>
		</div>
	</div>
</div>
