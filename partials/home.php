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
		'widget-boldgrid_component_postlist[][limit]' => 3,
		'widget-boldgrid_component_postlist[][columns]' => 3,
		'widget-boldgrid_component_postlist[][show_title]' => 1,
		'widget-boldgrid_component_postlist[][excerpt]' => 0,
		'widget-boldgrid_component_postlist[][author]' => 1,
		'widget-boldgrid_component_postlist[][thumbnail]' => 1,
		'widget-boldgrid_component_postlist[][date]' => 1,
	] ) );
};

$service_icons = function( $options ) use ( $image_path ) { ?>
	<div class="row">
		<?php foreach ( $options as $option ) { ?>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="bg-box text-center color2-background-alpha color-2-text-contrast" style="padding: 1.5em; margin: 1em 0;">
				<img src="<?php $image_path( $option['image'] ) ?>" style="height: 75px;">
				<h4 class="color-2-text-contrast"><?php print esc_html( $option['title'] ) ?></h4>
				<p class="">Building brand integration and possibly funnel users.</p>
			</div>
		</div>
		<?php } ?>
	</div>
<?php }; ?>

<div class="boldgrid-slider boldgrid-section-wrap" data-config='{"arrows":false,"autoplay":true,"autoplaySpeed":"6","dots":true,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"4","arrowsIcon":"angle","arrowsSize":"30","dotsPos":"bottom","dotsOverlay":true,"dotsColor":"4","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"4","text":""},"dotsColor":{"type":"class","value":"4","text":""}}}'>
	<div class="boldgrid-section" data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'home-1.jpg' ) ?>" style="color: #fff; background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $image_path( 'home-1.jpg' ) ?>)">
		<div class="container">
			<div class="row row-spacing-lg">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h2 class="h1" style="color: #fff; margin-top: 0;">Grow Your Business</h2>
					<?php $divider(); ?>
					<h5 style="color: #fff; font-size: 1.3em;">Taking core competencies to, consequently, infiltrate new markets. Drive analytics so that as an end result.</h5>
					<p style="margin-top: 2em;"><a href="#" class="button-primary">Learn More</a></p>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12"></div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'home-1a.jpg' ) ?>" style="color: #fff; background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $image_path( 'home-1a.jpg' ) ?>)">
		<div class="container">
			<div class="row row-spacing-lg">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h2 class="h1" style="color: #fff; margin-top: 0;">Dedicated to Quality</h2>
					<?php $divider(); ?>
					<h5 style="color: #fff; font-size: 1.3em;">Leading best in class so that as an end result, we make the logo bigger. Lead analytics to make the ROI bigger.</h5>
					<p style="margin-top: 2em;"><a href="#" class="button-primary">Learn More</a></p>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12"></div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'home-1b.jpg' ) ?>" style="color: #fff; background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $image_path( 'home-1b.jpg' ) ?>)">
		<div class="container">
			<div class="row row-spacing-lg">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h2 class="h1" style="color: #fff; margin-top: 0;">Industry Leaders</h2>
					<?php $divider(); ?>
					<h5 style="color: #fff; font-size: 1.3em;">Take blue-sky thinking to create actionable insights. Amplifying growth channels to use best practice.</h5>
					<p style="margin-top: 2em;"><a href="#" class="button-primary">Learn More</a></p>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12"></div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-lg">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2 style="margin-top: 0;">Our Story</h2>
				<?php $divider(); ?>
				<p class="">Executing big data with the aim to improve overall outcomes. Build user stories so that as an end result, we create actionable insights. Engage audience segments and above all, use best practice. Target key demographics while remembering to get buy in.</p>
				<p class="">Generating dark social so that as an end result, we use best practice. Synchronizing first party data so that we be transparent.</p>
				<p class=""><a href="#" class="button-primary">Learn More</a></p>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-12"></div>
			<div class="col-md-5 col-sm-5 col-xs-12 align-column-center">
				<p class="text-center"><img class="bg-img bg-img-3" src="<?php $image_path( 'home-2.jpg' ) ?>"></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section" data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'home-3.jpg' ) ?>" style="color: #fff; background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $image_path( 'home-3.jpg' ) ?>)">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 style="color: #fff; margin-top: 0;">Services</h2>
				<?php $divider(); ?>
			</div>
		</div>
		<div class="row row-spacing-lg-bottom">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="boldgrid-slider boldgrid-wrap-row" data-config='{"arrows":true,"autoplay":true,"autoplaySpeed":"6","dots":false,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"1","arrowsIcon":"chevron","arrowsSize":"15","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"1","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"1","text":""},"dotsColor":{"type":"class","value":"1","text":""}}}'>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development.svg' ],
						[ 'title' => 'Finance', 'image' => 'business.svg' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy.svg' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development.svg' ],
						[ 'title' => 'Finance', 'image' => 'business.svg' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy.svg' ],
					] ); ?>
					<?php $service_icons( [
						[ 'title' => 'Advanced Analytics', 'image' => 'development.svg' ],
						[ 'title' => 'Finance', 'image' => 'business.svg' ],
						[ 'title' => 'Strategy & Marketing', 'image' => 'strategy.svg' ],
					] ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-sm">
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class="mod-reset wow fadeIn" data-wow-duration="1s" data-wow-delay="0.50s"><img src="<?php $image_path( 'logo-1.png' ) ?>"></p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class="mod-reset wow fadeIn" data-wow-duration="1s" data-wow-delay="0.75s"><img src="<?php $image_path( 'logo-3.png' ) ?>"></p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class="mod-reset wow fadeIn" data-wow-duration="1s" data-wow-delay="1.00s"><img src="<?php $image_path( 'logo-4.png' ) ?>"></p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class="mod-reset wow fadeIn" data-wow-duration="1s" data-wow-delay="1.25s"><img src="<?php $image_path( 'logo-5.png' ) ?>"></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section color4-background-color color-4-text-contrast">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h2 style="margin-top: 0;">Recent News</h2>
				<?php $divider(); ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 align-column-center">
				<p class="">Target user stories so that we maximise share of voice. Grow cloud computing with the aim to take this offline. Lead integrated tech stacks and above all, target the low hanging fruit.</p>
			</div>
		</div>
		<div class="row row-spacing-lg-bottom wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="boldgrid-shortcode" data-imhwpb-draggable="true">
					[boldgrid_component type="wp_boldgrid_component_postlist" opts="<?php $post_widget_opts(); ?>"]
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 style="margin-top: 0;">Team</h2>
				<?php $divider(); ?>
			</div>
		</div>
		<div class="row row-spacing-lg-bottom">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="boldgrid-slider boldgrid-wrap-row" data-config='{"arrows":false,"autoplay":true,"autoplaySpeed":"6","dots":true,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"1","arrowsIcon":"angle","arrowsSize":"30","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"1","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"1","text":""},"dotsColor":{"type":"class","value":"1","text":""}}}'>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<img class="bg-img bg-img-3" src="<?php $image_path( 'home-7.jpg' ) ?>">
								<h4 style="font-size: 1.2em;">Nathan Counsel</h4>
								<p class="">Chief Executive Officer</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<img class="bg-img bg-img-3" src="<?php $image_path( 'home-8.jpg' ) ?>">
								<h4 style="font-size: 1.2em;">Sue Wolfe</h4>
								<p class="">Chief Financial Officer</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<img class="bg-img bg-img-3" src="<?php $image_path( 'home-8a.jpg' ) ?>">
								<h4 style="font-size: 1.2em;">Sam Wood</h4>
								<p class="">Product Management</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-12 col-xs-12"></div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<h3 style="margin-top: 0;">Who We Are</h3>
				<p class="">Generate vertical integration while remembering to increase viewability. Grow social with the aim to increase viewability. Lead vertical integration in turn innovate.</p>
				<p class="">Repurpose customer jounreys with the aim to come up with a bespoken solution. Growing benchmarking so that we build ROI.</p>
				<p class="">Engage benchmarking to, consequently, take this offline. Execute user experience to go viral. Funneling sprints and possibly improve overall outcomes.</p>
				<p class=""><a href="#" class="button-primary">Meet the Team</a></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section" data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'home-9.jpg' ) ?>" style="color: #fff; background-size: cover; background-position: 50% 37%; background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $image_path( 'home-9.jpg' ) ?>)">
	<div class="container">
		<div class="row row-spacing-sm">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<h3 style="color: #fff; margin-top: 0;">Lead tech stacks and above all, get the low hanging fruit.</h3>
			</div>
			<div class="col-md-1 col-sm-12 col-xs-12"></div>
			<div class="col-md-6 col-sm-12 col-xs-12 align-column-center">
				<p class="wow pulse" data-wow-duration="1s" data-wow-delay="1s"><a href="#" class="button-primary">Contact Us</a></p>
			</div>
		</div>
	</div>
</div>
