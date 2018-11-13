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
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h1 class="h2" style="margin-top: 0;">Winning Process</h1>
				<?php $divider(); ?>
				<p class="">Leverage integrated tech stacks and above all, build ROI. Targeting user engagement and try to further your reach. Building awareness while remembering to target the low hanging fruit. Growing brand ambassadors with a goal to maximise share of voice.</p>
				<p class=""><a class="button-primary" href="#">Learn More</a></p>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-12 align-column-center"></div>
			<div class="col-md-5 col-sm-5 col-xs-12 align-column-center">
				<p class="text-center" ><img class="bg-img bg-img-3" src="<?php $image_path( 'services-1.jpg' ) ?>">
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-lg-bottom">
			<div class="col-md-3 col-xs-12 col-sm-6 text-center  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="padding: 2em;">
				<p class=""><img src="<?php $image_path( '008-idea.png' ) ?>" width="75" height="75"></p>
				<h3 style="margin-top: 1.25em;">Discover</h3>
				<hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: auto; margin-right: auto; margin-top: 0px; border-radius: 100px;">
				<p class="">Lead bleeding edge and then further your reach. Synchronizing below the line.</p>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-6 text-center  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="padding: 2em;">
				<p class=""><img src="<?php $image_path( '009-options.png' ) ?>" width="75" height="75"></p>
				<h3 style="margin-top: 1.25em;">Create</h3>
				<hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: auto; margin-right: auto; margin-top: 0px; border-radius: 100px;">
				<p class="">Lead bleeding edge and then further your reach. Synchronizing below the line.</p>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-6 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s" style="padding: 2em;">
				<p class=""><img src="<?php $image_path( '010-start.png' ) ?>" width="62" height="75"></p>
				<h3 style="margin-top: 1.25em;">Energy</h3>
				<hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: auto; margin-right: auto; margin-top: 0px; border-radius: 100px;">
				<p class="">Lead bleeding edge and then further your reach. Synchronizing below the line.</p>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-6 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="2s" style="padding: 2em;">
				<p class=""><img src="<?php $image_path( '011-develop.png' ) ?>" width="75" height="75"></p>
				<h3 style="margin-top: 1.25em;">Success</h3>
				<hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: auto; margin-right: auto; margin-top: 0px; border-radius: 100px;">
				<p class="">Lead bleeding edge and then further your reach. Synchronizing below the line.</p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section color4-background-color color-4-text-contrast bg-background-color">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 style="margin-top: 0;">The Benefit</h2>
				<?php $divider(); ?>
			</div>
		</div>
		<div class="row row-spacing-lg-bottom">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="boldgrid-shortcode  wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-imhwpb-draggable="true" >
					[boldgrid_component type="wp_boldgrid_component_postlist" opts="<?php $post_widget_opts(); ?>"]
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section" style="color: #fff; background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php $image_path( 'services-8.jpg' ) ?>'); background-size: cover; background-position: 50% 50%;"
	data-bg-overlaycolor="rgba(0,0,0,0.5)" data-image-url="<?php $image_path( 'services-8.jpg' ) ?>">
	<div class="container">
		<div class="row row-spacing-lg">
			<div class="col-md-5 col-sm-4 col-xs-12">
				<h2 style="color: #fff; margin-top: 0;">Glimpse</h2>
				<?php $divider(); ?>
			</div>
			<div class="col-md-7 col-xs-12 col-sm-12">
				<p class="">Executing audience segments and try to be transparent. Generating analytics with a goal to build ROI. Grow stakeholder management so that we surprise and delight.</p>
				<div class="row bg-editor-hr-wrap">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div>
							<hr>
						</div>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" >
					<div class="col-md-7 col-xs-12 col-sm-12">
						<p style="font-size: 200%;" >$123 million</p>
					</div>
					<div class="col-md-5 col-xs-12 col-sm-12 align-column-center">
						<div>
							<p style="font-size: 140%;">in assets</p>
						</div>
					</div>
				</div>
				<div class="row bg-editor-hr-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div>
							<hr>
						</div>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
					<div class="col-md-7 col-xs-12 col-sm-12">
						<div>
							<p style="font-size: 200%;">5,000+</p>
						</div>
					</div>
					<div class="col-md-5 col-xs-12 col-sm-12 align-column-center">
						<div>
							<p style="font-size: 140%;">employees nationwide</p>
						</div>
					</div>
				</div>
				<div class="row bg-editor-hr-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
					<div class="col-md-7 col-xs-12 col-sm-12">
						<p style="font-size: 200%;">10 states</p>
					</div>
					<div class="col-md-5 col-xs-12 col-sm-12 align-column-center">
						<div>
							<p style="font-size: 140%;">where we operate</p>
						</div>
					</div>
				</div>
				<div class="row bg-editor-hr-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
					<div class="col-md-7 col-xs-12 col-sm-12">
						<p style="font-size: 200%;">45 funds</p>
					</div>
					<div class="col-md-5 col-xs-12 col-sm-12 align-column-center">
						<div>
							<p style="font-size: 140%;">sponsored by us</p>
						</div>
					</div>
				</div>
				<div class="row bg-editor-hr-wrap  wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<hr>
					</div>
				</div>
				<div class="row  wow fadeIn" data-wow-duration="1s" data-wow-delay="2.5s">
					<div class="col-md-7 col-xs-12 col-sm-12">
						<p style="font-size: 200%;">30 years</p>
					</div>
					<div class="col-md-5 col-xs-12 col-sm-12 align-column-center">
						<div>
							<p style="font-size: 140%;">of experience</p>
						</div>
					</div>
				</div>
				<div class="row bg-editor-hr-wrap  wow fadeIn" data-wow-duration="1s" data-wow-delay="2.5s">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container">
		<div class="row row-spacing-lg-top">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 style="margin-top: 0;">Pricing Table</h2>
				<?php $divider(); ?>
			</div>
		</div>
	</div>
</div>
<div class="tmpl-pricing_tables-9 boldgrid-section dynamic-gridblock">
	<div class="container">
		<div class="row row-spacing-lg-bottom">
			<div class="col-md-3 col-xs-12 col-sm-3 text-center align-column-center">
				<div class="bg-box-flush bg-box-cover basic product-type color-neutral-background-color color-neutral-text-contrast bg-background-color bg-box" style="margin-top: .6em; margin-bottom: .6em;">
					<p class="product-name">STANDARD</p>
					<p class="price color2-color" style="background-color: rgba(0,0,0,.05);margin-top: 0;"> <span style="font-size: 1.5em; position: relative; top: -.9em;">$</span> <span style="font-size: 2.5em;">39</span> <span style="margin-top: 0; font-size: .9em; font-style: italic; display: block;">Yearly</span>                        </p>
					<ul class="feature-list bg-list">
						<li>Feature 1</li>
						<li>Feature 2</li>
						<li>Feature 3</li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li>
							<div class="rating-icons-1"> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i>                                <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> </div>
						</li>
					</ul>
					<p style="background-color: rgba(0,0,0,.05);" class="action"> <a class="btn-color-3 btn btn-capitalize btn-pill btn-regular" href="#">Buy Now</a> </p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-3 text-center align-column-center">
				<div class="bg-box-flush bg-box-cover basic product-type color-neutral-background-color color-neutral-text-contrast bg-background-color bg-box" style="margin-top: .6em; margin-bottom: .6em;">
					<p class="product-name">BUSINESS</p>
					<p class="price color2-color" style="background-color: rgba(0,0,0,.05);margin-top: 0;"> <span style="font-size: 1.5em; position: relative; top: -.9em;">$</span> <span style="font-size: 2.5em;">59</span> <span style="margin-top: 0; font-size: .9em; font-style: italic; display: block;">Yearly</span>                        </p>
					<ul class="feature-list bg-list">
						<li>Feature 1</li>
						<li>Feature 2</li>
						<li>Feature 3</li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li>
							<div class="rating-icons-1"> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color"
									aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i>                                </div>
						</li>
					</ul>
					<p style="background-color: rgba(0,0,0,.05);" class="action"> <a class="btn-color-3 btn btn-capitalize btn-pill  btn-regular" href="#">Buy Now</a> </p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-3 text-center align-column-center bg-box-border-thin color3-border-color" style="position:relative; z-index:1">
				<div class="bg-box-flush bg-box-cover featured product-type color-neutral-background-color color-neutral-text-contrast bg-background-color bg-box wow pulse" data-wow-duration="2.5s" data-wow-delay="1s">
					<p class="product-name">PREMIUM</p>
					<p class="price color2-color" style="background-color: rgba(0,0,0,.05);margin-top: 0;"> <span style="font-size: 1.5em; position: relative; top: -.9em;">$</span> <span style="font-size: 2.5em;">79</span> <span style="margin-top: 0; font-size: .9em; font-style: italic; display: block;">Yearly</span>                        </p>
					<ul class="feature-list bg-list">
						<li>Feature 1</li>
						<li>Feature 2</li>
						<li>Feature 3</li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-remove" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li>
							<div class="rating-icons-1"> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color"
									aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star" aria-hidden="true"><span style="display:none;">&nbsp;</span></i>                                </div>
						</li>
					</ul>
					<p style="background-color: rgba(0,0,0,.05);" class="action"> <a class="button-primary" href="#">Buy Now</a> </p>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-3 text-center align-column-center">
				<div class="bg-box-flush bg-box-cover basic product-type color-neutral-background-color color-neutral-text-contrast bg-background-color bg-box" style="margin-top: .6em; margin-bottom: .6em;">
					<p class="product-name">ULTIMATE</p>
					<p class="price color2-color" style="background-color: rgba(0,0,0,.05);margin-top: 0;"> <span style="font-size: 1.5em; position: relative; top: -.9em;">$</span> <span style="font-size: 2.5em;">109</span> <span style="margin-top: 0; font-size: .9em; font-style: italic; display: block;">Yearly</span>                        </p>
					<ul class="feature-list bg-list">
						<li>Feature 1</li>
						<li>Feature 2</li>
						<li>Feature 3</li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li><i class="fa fa-check color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i></li>
						<li>
							<div class="rating-icons-1"> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color"
									aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i> <i class="fa fa-star color1-color" aria-hidden="true"><span style="display:none;">&nbsp;</span></i>                                </div>
						</li>
					</ul>
					<p style="background-color: rgba(0,0,0,.05);" class="action"> <a class="btn-color-3 btn btn-capitalize btn-pill  btn-regular" href="#">Buy Now</a> </p>
				</div>
			</div>
		</div>
	</div>
</div>
