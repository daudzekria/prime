<?php
/**
 * Contains markup for the contact page in starter content.
 *
 * @package Prime
 *
 * @since 2.0.0
 */
?>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row" style="padding: 4em 3em;">
			<div class="col-md-6 col-xs-12 col-sm-12" style="padding-right: 4em;">
				<h1 class="h2">Contact Us</h1>
				<?php $divider(); ?>
				<p class="">Vestibulum lobortis vulputate interdum. Integer consectetur nunc ac finibus facilisis. Vestibulum posuere ipsum eu velit tempor finibus. Integer finibus a arcu et convallis. Nulla dapibus tincidunt mauris, eu faucibus nisi molestie sed. Donec vehicula sollicitudin nibh, et varius justo. Integer elementum, diam vel semper consequat, nulla est scelerisque quam, ac ornare elit risus at nulla.</p>
				<p class="">Nam metus mauris, imperdiet eget pulvinar in, cursus tincidunt ex. Etiam lorem felis, vestibulum eget fringilla vel, consequat et enim. In ut sodales diam, et auctor ex. Donec metus ipsum, egestas a rhoncus auctor, eleifend in risus. Proin congue nulla eget sem imperdiet, nec ultrices libero vestibulum.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button </a></p>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12">
				<div class="boldgrid-shortcode wpforms-shortcode" data-imhwpb-draggable="true">
					<?php echo BoldGrid_Framework_Starter_Content::get_form_shortcode( __DIR__ . '/../json/wpforms/form-1.json' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-12 bg-background-color color-4-text-contrast color4-background-color" style="padding: 4em;">
				<h3 class="color3-color">Talk to Us</h3>
				<?php $divider(); ?>
				<p class=""><img style="margin-top: 0px;" class="alignright" src="<?php $image_path( 'contact1.jpg' ) ?>">Please call <a href="#">777-765-4321</a>. We are here Monday thru Friday from 8am EST to 5pm EST and Saturday from 12pm EST to 5pm EST.</p>
				<p class="">Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12 color5-background-color color-5-text-contrast bg-background-color" style="padding: 4em;">
				<h3 class="color3-color">Review Us</h3>
				<?php $divider(); ?>
				<p class=""><img style="margin-top: 0px;" class="alignright" src="<?php $image_path( 'contact2.jpg' ) ?>">Want to share your experience, good or bad? We are always striving to improve and welcome all feedback. Please <a href="#">contact us today</a>.</p>
				<p class="">Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu faucibus leo, non pharetra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p class="" style="margin-top: 2em;"><a class="btn btn-color-1" href="#">Button</a></p>
			</div>
		</div>
	</div>
</div>
<div class="boldgrid-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 bg-box-flush bg-box-cover">
				<p class="boldgrid-google-maps" style="margin: 0; line-height: 0;"><iframe style="width: 100%;" src="https://maps.google.com/maps?q=New+York%2C+NY&amp;t=m&amp;z=16&amp;output=embed" width="2000" height="450" frameborder="0"></iframe></p>
			</div>
		</div>
	</div>
</div>
