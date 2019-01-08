<?php
/**
 * Contains markup for the home page in starter content.
 *
 * @package Prime
 *
 * @since 2.0.0
 */

$post_widget_opts = function () {
	return print urlencode( json_encode( [
		'widget-boldgrid_component_postlist[][selected_post]' => 'all',
		'widget-boldgrid_component_postlist[][sorting]' => 'newest',
		'widget-boldgrid_component_postlist[][limit]' => 4,
		'widget-boldgrid_component_postlist[][columns]' => 4,
		'widget-boldgrid_component_postlist[][show_title]' => 1,
		'widget-boldgrid_component_postlist[][excerpt]' => 0,
		'widget-boldgrid_component_postlist[][author]' => 1,
		'widget-boldgrid_component_postlist[][thumbnail]' => 1,
		'widget-boldgrid_component_postlist[][date]' => 1,
	] ) );
};

$service_icons = function( $options ) use ( $image_path ) { ?>
	<div class="row" style="width: 100%; display: inline-block;">
		<?php foreach ( $options as $option ) { ?>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="text-center bg-box bg-box-square bg-box-cover color3-background-alpha color-3-text-contrast" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em;">
				<img src="<?php $image_path( $option['image'] ) ?>" style="height: 75px;">
				<h4 class="color-3-text-contrast"><?php print esc_html( $option['title'] ) ?></h4>
				<p class="">Building brand integration and possibly funnel users.</p>
			</div>
		</div>
		<?php } ?>
	</div>
<?php }; ?>

<div class="boldgrid-wrap-row boldgrid-slider" data-config='{"arrows":true,"autoplay":false,"autoplaySpeed":"10","dots":false,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"2","arrowsIcon":"angle-double","arrowsDesign":"square","arrowsSize":"30","dotsPos":"bottom","dotsOverlay":true,"dotsColor":"2","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"2","text":""},"dotsColor":{"type":"class","value":"2","text":""}}}'>
	<div class="boldgrid-section" data-image-url="<?php $image_path( 'slider1.jpg' ) ?>" style="width: 100%; display: inline-block; background-position: 50% 50%; background-size: cover; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php $image_path( 'slider1.jpg' ) ?>)" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'slider2.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'slider2.jpg' ) ?>" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section"style="width: 100%; display: inline-block; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'slider3.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'slider3.jpg' ) ?>" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1"  href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12" data-image-url="<?php $image_path( 'home1.jpg' ) ?>" style="padding: 5em; background-image: url('<?php $image_path( 'home1.jpg' ) ?>'); background-size: cover; background-position: 50% 0%;">
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12 color-neutral-text-contrast color-neutral-background-color" style="padding: 4em;">
				<h2 class="">Our History</h2>
				<?php $divider(); ?>
				<p class="">Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus. Integer finibus a arcu et convallis. Nulla dapibus tincidunt mauris, eu faucibus nisi molestie sed. Donec vehicula sollicitudin nibh, et varius justo. Integer elementum, diam vel semper consequat, nulla est scelerisque quam, ac ornare elit risus at nulla.</p>
				<p class="">Nam metus mauris, imperdiet eget pulvinar in, cursus tincidunt ex. Etiam lorem felis, vestibulum eget fringilla vel, consequat et enim. In ut sodales diam, et auctor ex. Donec metus ipsum, egestas a rhoncus auctor, eleifend in risus. Proin congue nulla eget sem imperdiet, nec ultrices libero vestibulum.</p>
				<p class="">Nam metus mauris, imperdiet eget pulvinar in, cursus tincidunt ex. Etiam lorem felis, vestibulum eget fringilla vel, consequat et enim. In ut sodales diam, et auctor ex. Donec metus ipsum, egestas a rhoncus auctor, eleifend in risus. Proin congue nulla eget sem imperdiet, nec ultrices libero vestibulum.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button </a></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-6 bg-background-color color-4-text-contrast color4-background-color" style="padding: 4em;">
				<h3 class="color3-color">Our Clients</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat. Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-6 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em;">
				<h3 class="color3-color">Our Staff</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12 color2-background-color color-2-text-contrast bg-background-color" style="padding: 4em;">
				<h3 class="color3-color">Our Results</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
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
<div class="boldgrid-section color5-background-color color-5-text-contrast bg-background-color">
	<div class="container-fluid">
		<div class="row" style="padding: 2em;">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 2em 4em 2em 2em;">
				<h2 class="">Heading</h2>
				<?php $divider(); ?>
				<p class="">Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus. Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus.</p>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="">Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus. Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 2em 1em;">
				<div class="boldgrid-wrap-row boldgrid-slider" data-config='{"arrows":false,"autoplay":false,"autoplaySpeed":"10","dots":true,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"2","arrowsIcon":"angle","arrowsSize":"30","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"2","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"2","text":""},"dotsColor":{"type":"class","value":"2","text":""}}}'>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img src="<?php $image_path( 'home2.jpg' ) ?>"></p>
								<h4 style="margin-top: 25px;">Thing 1</h4>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img src="<?php $image_path( 'home3.jpg' ) ?>"></p>
								<h4 style="margin-top: 25px;">Thing 2</h4>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img src="<?php $image_path( 'home4.jpg' ) ?>"></p>
								<h4 style="margin-top: 25px;">Thing 3</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section background-fixed" style="background-image: url('<?php $image_path( 'home5.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'home5.jpg' ) ?>">
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
				<div class="boldgrid-slider boldgrid-wrap-row" data-config='{"arrows":true,"autoplay":true,"autoplaySpeed":"6","dots":false,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":false,"arrowsBgColor":"4","arrowsIcon":"angle","arrowsSize":"15","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"4","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"4","text":""},"dotsColor":{"type":"class","value":"4","text":""}}}'>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development-dark.png' ],
						[ 'title' => 'Finance', 'image' => 'business-dark.png' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy-dark.png' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development-dark.png' ],
						[ 'title' => 'Finance', 'image' => 'business-dark.png' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy-dark.png' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development-dark.png' ],
						[ 'title' => 'Finance', 'image' => 'business-dark.png' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy-dark.png' ],
					] ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section color5-background-color color-5-text-contrast bg-background-color">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-12 col-sm-6" style="padding: 4em;">
				<h3 class="">Start A New Path</h3>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-6 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em; background-image: url('<?php $image_path( 'home6.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'home6.jpg' ) ?>"></div>
			<div class="col-md-3 col-xs-12 col-sm-6" style="padding: 4em;">
				<h3 class="">Start A New Path</h3>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 4em 4em 2em;">
				<h2 class="">Our Location</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p class="" style="padding-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 bg-box-flush">
				<p class="boldgrid-google-maps" style="margin: 0; line-height: 0;"><iframe style="width: 100%;" src="https://maps.google.com/maps?q=New+York%2C+NY&amp;t=m&amp;z=16&amp;output=embed" width="1000" height="500" frameborder="0"><span style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" data-mce-type="bookmark" class="mce_SELRES_start">﻿</span></iframe></p>
			</div>
		</div>
	</div>
</div>
