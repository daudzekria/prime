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

<div class="boldgrid-slider boldgrid-section-wrap" data-config="{&quot;arrows&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:10,&quot;adaptiveHeight&quot;:true,&quot;dots&quot;:false,&quot;swipe&quot;:true,&quot;infinite&quot;:true,&quot;colors&quot;:{&quot;dotsColor&quot;:{&quot;type&quot;:&quot;color&quot;,&quot;value&quot;:&quot;#000000&quot;},&quot;arrowsBG&quot;:{&quot;type&quot;:&quot;color&quot;,&quot;value&quot;:&quot;#1a1a1a&quot;,&quot;text&quot;:&quot;#FFFFFF&quot;}},&quot;bgOptions&quot;:{&quot;arrowsPos&quot;:&quot;standard&quot;,&quot;arrowsSize&quot;:&quot;30&quot;,&quot;arrowsDesign&quot;:&quot;square&quot;,&quot;arrowsOverlay&quot;:true,&quot;arrowsIcon&quot;:&quot;angle-double&quot;,&quot;arrowsBgColor&quot;:&quot;#1a1a1a&quot;,&quot;dotsPos&quot;:&quot;bottom&quot;,&quot;dotsSize&quot;:&quot;50&quot;,&quot;dotsOverlay&quot;:false,&quot;dotsColor&quot;:&quot;#000000&quot;}}">
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/maxime-lebrun-703859-unsplash-background-1.jpg'); background-size: cover; background-position: 50% 50%;" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/maxime-lebrun-703859-unsplash-background-1.jpg" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" tabindex="0" href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/chris-nguyen-477749-unsplash-background2.jpg'); background-size: cover; background-position: 50% 50%;" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/chris-nguyen-477749-unsplash-background2.jpg" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" tabindex="0" href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/chris-nguyen-477749-unsplash-background.jpg'); background-size: cover; background-position: 50% 50%;" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/chris-nguyen-477749-unsplash-background.jpg" data-bg-overlaycolor="rgba(0,0,0,0.5)">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding-top: 100px; padding-bottom: 100px;">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
					<h1 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Awesome CTA</h1>
					<h3 class="bg-text-fx bg-text-fx-closeheavy" style="color: #ffffff;">Seize your moment.</h3>
					<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" tabindex="0" href="#">Button</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-sm-12" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/11/angello-lopez-134675-unsplash-square.jpg" style="padding: 5em; background-image: url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/11/angello-lopez-134675-unsplash-square.jpg'); background-size: cover; background-position: 50% 0%;">
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
					[boldgrid_component type="wp_boldgrid_component_postlist" opts="%7B%22widget-boldgrid_component_postlist%5B%5D%5Bselected_post%5D%22%3A%22all%22%2C%22widget-boldgrid_component_postlist%5B%5D%5Bcolumns%5D%22%3A%224%22%2C%22widget-boldgrid_component_postlist%5B%5D%5Blimit%5D%22%3A%224%22%2C%22widget-boldgrid_component_postlist%5B%5D%5Bsorting%5D%22%3A%22newest%22%2C%22widget-boldgrid_component_postlist%5B%5D%5Bshow_title%5D%22%3A1%2C%22widget-boldgrid_component_postlist%5B%5D%5Bdate%5D%22%3A1%2C%22widget-boldgrid_component_postlist%5B%5D%5Bauthor%5D%22%3A1%2C%22widget-boldgrid_component_postlist%5B%5D%5Bthumbnail%5D%22%3A1%2C%22widget-boldgrid_component_postlist%5B%5D%5Bexcerpt%5D%22%3A0%7D"]
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
				<div class="boldgrid-wrap-row boldgrid-slider" data-config="{&quot;arrows&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:&quot;10&quot;,&quot;dots&quot;:true,&quot;infinite&quot;:true,&quot;bgOptions&quot;:{&quot;arrowsPos&quot;:&quot;standard&quot;,&quot;arrowsOverlay&quot;:true,&quot;arrowsBgColor&quot;:&quot;#1a1a1a&quot;,&quot;arrowsIcon&quot;:&quot;angle&quot;,&quot;arrowsSize&quot;:&quot;30&quot;,&quot;dotsPos&quot;:&quot;bottom&quot;,&quot;dotsOverlay&quot;:false,&quot;dotsColor&quot;:&quot;2&quot;,&quot;dotsSize&quot;:&quot;50&quot;},&quot;colors&quot;:{&quot;arrowsBG&quot;:{&quot;type&quot;:&quot;color&quot;,&quot;value&quot;:&quot;#1a1a1a&quot;,&quot;text&quot;:&quot;#ffffff&quot;},&quot;dotsColor&quot;:{&quot;type&quot;:&quot;class&quot;,&quot;value&quot;:&quot;2&quot;,&quot;text&quot;:&quot;&quot;}}}">
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img class="alignnone wp-image-599 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/candice-picard-849003-unsplash-900.jpg" alt="" width="900" height="450"></p>
								<h4 style="margin-top: 25px;">Thing 1</h4>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img class="aligncenter wp-image-736 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/alfonso-reyes-712273-unsplash-900.jpg" alt="" width="900" height="450"></p>
								<h4 style="margin-top: 25px;">Thing 2</h4>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text-center">
								<p class="mod-reset"><img class="aligncenter wp-image-732 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/hust-wilson-400432-unsplash-900.jpg" alt="" width="900" height="450"></p>
								<h4 style="margin-top: 25px;">Thing 3</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section background-fixed" style="background-image: url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/panos-teloniatis-693324-unsplash-background-1.jpg'); background-size: cover; background-position: 50% 50%;" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/panos-teloniatis-693324-unsplash-background-1.jpg">
	<div class="container-fluid" style="transition: width 0.5s ease 0s;">
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
				<div class="boldgrid-wrap-row boldgrid-slider slick-dots-overlay bg-box-cover" data-config="{&quot;arrows&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:&quot;10&quot;,&quot;dots&quot;:false,&quot;infinite&quot;:true,&quot;bgOptions&quot;:{&quot;arrowsPos&quot;:&quot;standard&quot;,&quot;arrowsOverlay&quot;:false,&quot;arrowsBgColor&quot;:&quot;rgba(33,33,33,0.7)&quot;,&quot;arrowsIcon&quot;:&quot;angle&quot;,&quot;arrowsSize&quot;:&quot;15&quot;,&quot;dotsPos&quot;:&quot;bottom&quot;,&quot;dotsOverlay&quot;:true,&quot;dotsColor&quot;:&quot;#000000&quot;,&quot;dotsSize&quot;:&quot;50&quot;},&quot;colors&quot;:{&quot;arrowsBG&quot;:{&quot;type&quot;:&quot;color&quot;,&quot;value&quot;:&quot;rgba(33,33,33,0.7)&quot;,&quot;text&quot;:&quot;#ffffff&quot;},&quot;dotsColor&quot;:{&quot;type&quot;:&quot;color&quot;,&quot;value&quot;:&quot;#000000&quot;,&quot;text&quot;:&quot;#ffffff&quot;}}}">
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-262 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/005-value.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Advanced Analytics</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-251 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/001-business.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Corporate Finance</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-255 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/007-analysis.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Marketing</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-262 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/005-value.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Advanced Analytics</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-251 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/001-business.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Corporate Finance</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-255 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/007-analysis.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Marketing</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
					</div>
					<div class="row" style="width: 100%; display: inline-block;">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-262 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/005-value.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Advanced Analytics</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-251 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/001-business.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Corporate Finance</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="text-center bg-box bg-box-square bg-box-cover" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); margin: 0px; padding: 4em; background-color: rgba(255, 255, 255, 0.8);">
								<p class="mod-reset"><img class="aligncenter wp-image-255 size-full" src="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/007-analysis.png" alt="" width="100" height="100"></p>
								<h3 class="color-2-text-contrast color2-color">Marketing</h3>
								<p class="color2-color">Building brand integration and possibly funnel users. Building brand integration.</p>
							</div>
						</div>
					</div>										
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
			<div class="col-md-6 col-xs-12 col-sm-6 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em; background-image: url('https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/sean-pollock-203658-unsplash-background.jpg'); background-size: cover; background-position: 50% 50%;" data-image-url="https://demo2.boldgrid.com/trial-u97v4t61/wp-content/uploads/2018/10/sean-pollock-203658-unsplash-background.jpg"></div>
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
