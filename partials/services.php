<?php
/**
 * Contains markup for the services page in starter content.
 *
 * @package Prime
 *
 * @since 2.0.0
 */

$post_widget_opts = function () {
	return print urlencode( json_encode( [
		'widget-boldgrid_component_postlist[][selected_post]' => 'all',
		'widget-boldgrid_component_postlist[][sorting]' => 'newest',
		'widget-boldgrid_component_postlist[][limit]' => 6,
		'widget-boldgrid_component_postlist[][columns]' => 3,
		'widget-boldgrid_component_postlist[][show_title]' => 1,
		'widget-boldgrid_component_postlist[][excerpt]' => 1,
		'widget-boldgrid_component_postlist[][author]' => 0,
		'widget-boldgrid_component_postlist[][thumbnail]' => 1,
		'widget-boldgrid_component_postlist[][date]' => 0,
	] ) );
} ?>
<div class="boldgrid-section color2-background-color color-2-text-contrast bg-background-color">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-xs-12 col-sm-6 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em; background-image: url('<?php $image_path( 'services1.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'services1.jpg' ) ?>"></div>
			<div class="col-md-4 col-xs-12 col-sm-6" style="padding: 4em;">
				<h3 class="">Start A New Path</h3>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui.</p>
				<p class="">Building brand integration and possibly funnel users. Building brand integration. Building brand integration and possibly funnel users. Building brand integration.</p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row" style="padding: 4em 3em 1em;">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<h2 class="">Gallery</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12"></div>
		</div>
		<div class="row" style="padding: 0em 3em 4em;">
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services2.jpg' ) ?>"></p>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services3.jpg' ) ?>"></p>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services4.jpg' ) ?>"></p>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services5.jpg' ) ?>"></p>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services6.jpg' ) ?>"></p>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4 text-center" style="padding-top: 1em;">
				<p class="mod-reset"><img class="bg-img bg-img-square aligncenter" src="<?php $image_path( 'services7.jpg' ) ?>"></p>
			</div>
		</div>
	</div>
</div>

<div class="boldgrid-wrap-row boldgrid-slider" data-config='{"arrows":true,"autoplay":true,"autoplaySpeed":"6","dots":false,"infinite":true,"bgOptions":{"arrowsPos":"standard","arrowsOverlay":true,"arrowsBgColor":"2","arrowsIcon":"angle","arrowsSize":"30","dotsPos":"bottom","dotsOverlay":false,"dotsColor":"2","dotsSize":"50"},"colors":{"arrowsBG":{"type":"class","value":"2","text":""},"dotsColor":{"type":"class","value":"2","text":""}}}'>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: url('<?php $image_path( 'service-slider1.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'service-slider1.jpg' ) ?>">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding: 250px 0px;">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<p class="">&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: url('<?php $image_path( 'service-slider2.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'service-slider2.jpg' ) ?>">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding: 250px 0px;">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<p class="">&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: url('<?php $image_path( 'service-slider3.jpg' ) ?>'); background-size: cover; background-position: 50% 65%;" data-image-url="<?php $image_path( 'service-slider3.jpg' ) ?>">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding: 250px 0px;">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<p class="">&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
	<div class="boldgrid-section" style="width: 100%; display: inline-block; background-image: url('<?php $image_path( 'service-slider4.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'service-slider4.jpg' ) ?>">
		<div class="container" style="padding-left: 44.4px; padding-right: 44.4px;">
			<div class="row" style="padding: 250px 0px;">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<p class="">&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-6 bg-background-color color-2-text-contrast color2-background-color" style="padding: 4em; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'services8.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'services8.jpg' ) ?>" data-bg-overlaycolor="rgba(0,0,0,0.5)">
				<h3 class="h2 color3-color">Service 1</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat. Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-6 bg-background-color color-2-text-contrast color2-background-color" style="padding: 4em; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'services9.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'services9.jpg' ) ?>" data-bg-overlaycolor="rgba(0,0,0,0.5)">
				<h3 class="h2 color3-color">Service 2</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat. Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-6 bg-background-color color-2-text-contrast color2-background-color" style="padding: 4em; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'services10.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;" data-image-url="<?php $image_path( 'services10.jpg' ) ?>" data-bg-overlaycolor="rgba(0,0,0,0.5)">
				<h3 class="h2 color3-color">Service 3</h3>
				<?php $divider(); ?>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat. Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="">Duis lacinia condimentum nulla eget aliquet. Etiam id justo faucibus, accumsan ante hendrerit, vehicula velit. Integer sapien erat.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 4em 4em 2em;">
				<h2 class="">Testimonials</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12"></div>
		</div>
		<div class="row" style="padding: 0em 3em 4em;">
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class=""><img src="<?php $image_path( 'services11.jpg' ) ?>"></p>
				<p class="h3" style="margin-top: 2em; margin-bottom: 1em;">Nannie Garcia</p>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="color3-background-color color-3-text-contrast bg-background-color bg-box color1-border-color" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); padding: 15px 10px; border-top: 3px solid; margin-bottom: 1em;">
							<p class="" style="font-style: italic; margin: 1em;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class=""><img src="<?php $image_path( 'services12.jpg' ) ?>"></p>
				<p class="h3" style="margin-top: 2em; margin-bottom: 1em;">Elliot Gonzales</p>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="color3-background-color color-3-text-contrast bg-background-color bg-box color1-border-color" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); padding: 15px 10px; border-top: 3px solid; margin-bottom: 1em;">
							<p class="" style="font-style: italic; margin: 1em;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class=""><img src="<?php $image_path( 'services13.jpg' ) ?>"></p>
				<p class="h3" style="margin-top: 2em; margin-bottom: 1em;">Phillip Keller</p>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="color3-background-color color-3-text-contrast bg-background-color bg-box color1-border-color" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); padding: 15px 10px; border-top: 3px solid; margin-bottom: 1em;">
							<p class="" style="font-style: italic; margin: 1em;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<p class=""><img src="<?php $image_path( 'services14.jpg' ) ?>"></p>
				<p class="h3" style="margin-top: 2em; margin-bottom: 1em;">Kathy Nelson</p>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="color3-background-color color-3-text-contrast bg-background-color bg-box color1-border-color" style="box-shadow: 0 0 4px 2px rgba(0,0,0,.05); padding: 15px 10px; border-top: 3px solid; margin-bottom: 1em;">
							<p class="" style="font-style: italic; margin: 1em;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section color5-background-color color-5-text-contrast bg-background-color background-fixed" data-image-url="<?php $image_path( 'services1.jpg' ) ?>" style="background-image: url('<?php $image_path( 'services10.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;">
	<div class="container-fluid">
		<div class="row" style="padding: 4em 3em 1em;">
			<div class="col-md-6 col-xs-12 col-sm-12" style="padding-right: 4em;">
				<h2 class="">Pricing</h2>
				<?php $divider(); ?>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu dignissim tortor, sit amet bibendum lacus. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12"></div>
		</div>
		<div class="row" style="padding: 0 3em 4em;">
			<div class="col-md-3 col-sm-6 col-xs-12 text-center" style="padding-top: 1em;">
				<div class="text-center bg-background-color bg-box color-2-text-contrast color2-background-color">
				<h3 class="">Level 1</h3>
					<div class="row bg-editor-hr-wrap">
					<div class="col-md-12 col-xs-12 col-sm-12">
					<div>
					<hr class="bg-hr bg-hr-16 color1-color" style="margin: 5px -15px 20px;">
					</div>
					</div>
					</div>
					<p class="" style="margin: 0em; font-size: 36px;">$5</p>
					<p class="" style="margin-bottom: 2em;">per month</p>
					<p class=""><i class="fa-fw fa fa-envelope-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-map-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-cubes" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-download" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-folder-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-globe" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><a class="btn-color-1 btn" style="margin-top: 2em;" href="#" shape="">Sign Up</a></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center" style="padding-top: 1em;">
				<div class="text-center bg-background-color bg-box color-2-text-contrast color2-background-color">
					<h3 class="">Level 2</h3>
					<div class="row bg-editor-hr-wrap">
					<div class="col-md-12 col-xs-12 col-sm-12">
					<div>
					<hr class="bg-hr bg-hr-16 color1-color" style="margin: 5px -15px 20px;">
					</div>
					</div>
					</div>
					<p class="" style="margin: 0em; margin-bottom: 0; font-size: 36px;">$7</p>
					<p class="" style="margin-bottom: 2em;">per month</p>
					<p class=""><i class="fa-fw fa fa-envelope-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-map-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-cubes" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-download" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-folder-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-globe" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><a class="btn-color-1 btn" style="margin-top: 2em;" href="#" shape="">Sign Up</a></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center" style="padding-top: 1em;">
				<div class="text-center bg-background-color bg-box color-2-text-contrast color2-background-color">
					<h3 class="">Level 3</h3>
					<div class="row bg-editor-hr-wrap">
					<div class="col-md-12 col-xs-12 col-sm-12">
					<div>
					<hr class="bg-hr bg-hr-16 color1-color" style="margin: 5px -15px 20px;">
					</div>
					</div>
					</div>
					<p class="" style="margin: 0em; margin-bottom: 0; font-size: 36px;">$9</p>
					<p class="" style="margin-bottom: 2em;">per month</p>
					<p class=""><i class="fa-fw fa fa-envelope-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-map-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-cubes" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-download" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-folder-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-globe" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><a class="btn-color-1 btn" style="margin-top: 2em;" href="#" shape="">Sign Up</a></p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 text-center" style="padding-top: 1em;">
				<div class="text-center bg-background-color bg-box color-2-text-contrast color2-background-color">
					<h3 class="">Level 4</h3>
					<div class="row bg-editor-hr-wrap">
					<div class="col-md-12 col-xs-12 col-sm-12">
					<div>
					<hr class="bg-hr bg-hr-16 color1-color" style="margin: 5px -15px 20px;">
					</div>
					</div>
					</div>
					<p class="" style="margin: 0em; margin-bottom: 0; font-size: 36px;">$11</p>
					<p class="" style="margin-bottom: 2em;">per month</p>
					<p class=""><i class="fa-fw fa fa-envelope-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-map-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-cubes" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-download" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-folder-open-o" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><i class="fa-fw fa fa-globe" aria-hidden="true"><span style="display: none;">&nbsp;</span></i> Feature Description</p>
					<p class=""><a class="btn-color-1 btn" style="margin-top: 2em;" href="#" shape="">Sign Up</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
