<?php
/**
 * Prime Configuration File.
 *
 * This file contains the configuration options used in the Prime theme.
 *
 * @package Prime
 */

if ( ! function_exists( 'boldgrid_prime_framework_config' ) ) {
	/**
	 * Boldgrid Theme Framework Configs
	 *
	 * Filters the theme framework configurations.
	 *
	 * @since 1.0.0
	 */
	function boldgrid_prime_framework_config( $config ) {

		// Disable old typography controls in favor of new ones.
		$config['customizer-options']['typography']['controls']['main_text'] = false;
		$config['customizer-options']['typography']['controls']['subheadings'] = false;
		$config['customizer-options']['site-title']['site-title'] = false;

		// Waiting for all themes to opt in before removing switch.
		// Enable typography controls in the customizer.
		$config['customizer-options']['typography']['enabled'] = true;

		// Enable Sticky Footer.
		$config['scripts']['boldgrid-sticky-footer'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Remove the wrong attribution links from the footer.
		$config['temp']['attribution_links'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Turn on the parent theme template engine.
		$config['boldgrid-parent-theme'] = true;

		// Set Theme Name.
		$config['theme_name'] = 'crio';

		// Primary color for site's title.
		$config['customizer']['controls']['bgtfw_site_title_color']['default'] = 'color-neutral';

		// Site's title typography defaults.
		$config['customizer']['controls']['bgtfw_site_title_typography']['default'] = array(
			'font-family' => 'Julius Sans One',
			'font-size' => '44px',
			'text-transform' => 'uppercase',
			'line-height' => '1.5',
			'variant' => 'regular',
		);

		// Primary color for site's tagline.
		$config['customizer']['controls']['bgtfw_tagline_color']['default'] = 'color-2';

		// Site's tagline typography defaults.
		$config['customizer']['controls']['bgtfw_tagline_typography']['default'] = array(
			'font-family' => 'Open Sans',
			'font-size' => '14px',
			'text-transform' => 'none',
			'line-height' => '1.1',
			'variant' => 'regular',
		);

		// This theme doesn't support a background image.
		$config['customizer-options']['background']['defaults']['background_image'] = false;
		$config['customizer-options']['background']['defaults']['boldgrid_background_type'] = 'pattern';

		// Disable Call to Action Widget.
		$config['template']['call-to-action'] = 'disabled';

		// Default Colors.
		$config['customizer-options']['colors']['defaults'] = array(
			array(
				'default' => true,
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#a347ff',
					'#1a1a1a',
					'#d9d9d9',
					'#1a1a1a',
					'#ffffff',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#bfbfbf',
					'#000338',
					'#7c995d',
					'#000338',
					'#ffffff',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#f2fffa',
				'colors' => array(
					'#e58eb2',
					'#1f2a30',
					'#d6d6d6',
					'#1f2a30',
					'#f2fffa',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#fea7c4',
					'#4f4f4f',
					'#000000',
					'#4f4f4f',
					'#ffffff',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#e8e8e8',
				'colors' => array(
					'#e8be4c',
					'#011f3f',
					'#b2aca2',
					'#011f3f',
					'#e8e8e8',
				),
			),
		);

		$config['starter-content']['plugins'] = array(
			array(
				'name'      => 'BoldGrid Post and Page Builder',
				'slug'      => 'post-and-page-builder',
				'required'  => true,
			),
			array(
				'name'      => 'BoldGrid Post and Page Builder Premium',
				'slug'      => 'post-and-page-builder-premium',
				'source'    => 'https://repo.boldgrid.com/post-and-page-builder-premium.zip',
				'required'  => true,
			),
			array(
				'name'      => 'WPForms',
				'slug'      => 'wpforms-lite',
				'required'  => true,
			),
		);

		// Post activate actions.
		$config['starter-content']['plugins_post_activate'] = array(
			// Prevent the "exit" and redirect to "WPForms Welcome Page" after activation.
			'delete_transient' => 'wpforms_activation_redirect',
		);

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		$config['starter-content']['posts'] = array(

			// Pages.
			'homepage' => array(
				'post_type' => 'page',
				'post_title' => _x( 'Home', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'home.php' ),
				'meta_input' => array(
					'boldgrid_hide_page_title' => '0',
				),
			),
			'about' => array(
				'post_type' => 'page',
				'post_title' => _x( 'About Us', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'about.php' ),
			),
			'contact' => array(
				'post_type' => 'page',
				'post_title' => _x( 'Contact Us', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'contact.php' ),
			),

			// Home page posts.
			'artificial-intelligence' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Artificial Intelligence', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'blockchain' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Scalable Solutions', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'cloud-expert' => array(
				'post_type' => 'post',
				'post_title' => _x( 'The Cloud Expert', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),

			// Services Posts.
			'mergers' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Mergers & Aquisitions', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'information-technology' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Information Technology', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'digital' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Digital', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'strategy' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Strategy & Marketing', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'corporate-finance' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Corporate Finance', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),
			'advanced-analytics' => array(
				'post_type' => 'post',
				'post_title' => _x( 'Advanced Analytics', 'Theme starter content', 'crio' ),
				'post_content' => bgtfw_get_contents( 'blog.php' ),
			),

			'blog' => array(
				'post_type' => 'page',
				'post_title' => _x( 'Blog', 'Theme starter content', 'crio' ),
			),
		);

		// Default to a static front page and assign the front and posts pages.
		$config['starter-content']['options'] = array(
			'show_on_front' => 'page',
			'page_on_front' => '{{homepage}}',
			'page_for_posts' => '{{blog}}',
		);

		// Pages container.
		$config['customizer']['controls']['bgtfw_pages_container']['default'] = '';

		// Primary background color.
		$config['customizer']['controls']['boldgrid_background_color']['default'] = 'color-neutral';

		// Primary headings color.
		$config['customizer']['controls']['bgtfw_headings_color']['default'] = 'color-2';

		// Header specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_header_color']['default'] = 'color-2';

		// Footer specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_footer_color']['default'] = 'color-2';
		$config['customizer']['controls']['bgtfw_footer_links']['default'] = 'color-1';

		// Page title display settings, show by default.
		$config['customizer']['controls']['bgtfw_pages_title_display']['default'] = 'show';
		$config['customizer']['controls']['bgtfw_posts_title_display']['default'] = 'show';

		// Default header position is on top.
		$config['customizer']['controls']['bgtfw_header_layout_position']['default'] = 'header-top';

		// Default header is a fixed header.
		$config['customizer']['controls']['bgtfw_fixed_header']['default'] = true;

		// Set the page title position.
		$config['customizer']['controls']['bgtfw_global_title_position']['default'] = 'above';

		// Display page title background in full width container.
		$config['customizer']['controls']['bgtfw_global_title_background_container']['default'] = 'full-width';

		// Display the page title content inside of a container.
		$config['customizer']['controls']['bgtfw_global_title_content_container']['default'] = 'container';

		// Set background color of page title containers.
		$config['customizer']['controls']['bgtfw_global_title_background_color']['default'] = 'color-neutral';

		// Set the default global page title color.
		$config['customizer']['controls']['bgtfw_global_title_color']['default'] = 'color-2';

		// Set the text alignment of the page titles globally.
		$config['customizer']['controls']['bgtfw_global_title_alignment']['default'] = 'left';

		// Set the headings size of the page titles globally.
		$config['customizer']['controls']['bgtfw_global_title_size']['default'] = 'h1';

		// Show blog and archives in a 1 column layout.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_columns']['default'] = '1';

		// Set the blog/archive pages sidebar display (Homepage > Displays Latest Posts).
		$config['customizer']['controls']['bgtfw_blog_blog_page_sidebar']['default'] = 'right-sidebar';

		// Set the blog/archive pages sidebar display (Design > Blog > Blog Page > Sidebar).
		$config['customizer']['controls']['bgtfw_blog_blog_page_sidebar2']['default'] = 'right-sidebar';

		// Set the primary sidebar background color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['background_color'] = 'color-neutral';

		// Set the primary sidebar links color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['links_color'] = 'color-1';

		// Set the primary sidebar headings color.
		$config['customizer']['controls']['sidebar_meta']['primary-sidebar']['headings_color'] = 'color-2';

		// Header widget row.
		$config['customizer']['controls']['sidebar_meta']['header-1']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['header-2']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['header-3']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['header-4']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['header-1']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['header-2']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['header-3']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['header-4']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['header-1']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['header-2']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['header-3']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['header-4']['links_color'] = 'color-1';

		// Footer widget row.
		$config['customizer']['controls']['sidebar_meta']['footer-1']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['footer-2']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['footer-3']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['footer-4']['background_color'] = 'color-2';
		$config['customizer']['controls']['sidebar_meta']['footer-1']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['footer-2']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['footer-3']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['footer-4']['headings_color'] = 'color-neutral';
		$config['customizer']['controls']['sidebar_meta']['footer-1']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['footer-2']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['footer-3']['links_color'] = 'color-1';
		$config['customizer']['controls']['sidebar_meta']['footer-4']['links_color'] = 'color-1';

		// Register primary sidebar widgets..
		$config['starter-content']['widgets']['primary-sidebar'] = array(
			// Widget ID
			'custom_html' => array(

				// Widget $id -> set when creating a Widget Class
				'custom_html',

				// Widget $instance -> settings
				array(
					'title' => 'About ' . get_bloginfo( 'name' ),
					'content' => '<div class="about-us-image text-center" style="padding-bottom: 1em;"><img class="bg-box-shadow-bottom-right bg-box-cover" src="https://randomuser.me/api/portraits/women/' . rand( 1, 50 ) . '.jpg"></div><p>' . get_bloginfo( 'name' ) . ' is taking brand ambassadors but re-target key demographics.  Amplifying cloud. </p>',
				),
			),
			'search',
			'category',
			'recent-posts',
		);

		// Show excerpts instead of full blog post on blog and archives.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_content']['default'] = 'excerpt';

		// Set the blog excerpt length.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_excerpt_length']['default'] = 75;

		// Display option for featured images on blog/archive lists.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_display']['default'] = 'hide';

		// Featured image in post list position.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_position']['default'] = 'above';

		// Set post list's featured image height.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_height']['default'] = 20;

		// Set post list's featured image width.
		$config['customizer']['controls']['bgtfw_blog_post_header_feat_image_width']['default'] = 100;

		// Post list title color.
		$config['customizer']['controls']['bgtfw_blog_post_header_title_color']['default'] = 'color-neutral';

		// Post list post header background color.
		$config['customizer']['controls']['bgtfw_blog_header_background_color']['default'] = 'color-2';

		// Post list post content background color.
		$config['customizer']['controls']['bgtfw_blog_post_background_color']['default'] = 'color-3';		

		// Post list read more link text.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_text']['default'] = esc_html__( 'Read More', 'bgtfw' );

		// Post list read more link style.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_type']['default'] = 'btn button-primary';

		// Post list read more link alignment.
		$config['customizer']['controls']['bgtfw_blog_post_readmore_position']['default'] = 'left';

		// Post list tag links display.
		$config['customizer']['controls']['bgtfw_blog_post_tags_display']['default'] = 'none';

		// Post list category links display.
		$config['customizer']['controls']['bgtfw_blog_post_cats_display']['default'] = 'none';

		// Post list comment links display.
		$config['customizer']['controls']['bgtfw_blog_post_comments_display']['default'] = 'none';

		// Pages will not show a sidebar by default.
		$config['customizer']['controls']['bgtfw_layout_page']['default'] = 'no-sidebar';

		// Site's body typography defaults.
		$config['customizer']['controls']['bgtfw_body_typography']['default'] = array(
			'font-family' => 'Open Sans',
			'font-size' => '14px',
			'line-height' => '1.6',
			'text-transform' => 'none',
			'variant' => 'regular',
		);

		// Site's headings typography defaults.
		$config['customizer']['controls']['bgtfw_menu_typography_main']['default'] = array(
			'font-family' => 'Open Sans',
			'font-size' => '14px',
			'line-height' => '1.5',
			'text-transform' => 'uppercase',
			'variant' => 'regular',
		);

		$config['customizer']['controls']['bgtfw_headings_font_size']['default'] = '20';
		$config['customizer']['controls']['bgtfw_headings_typography']['default'] = array(
			'font-family' => 'Julius Sans One',
			'line-height' => '1.1',
			'text-transform' => 'none',
			'variant' => 'regular',
		);

		if ( ! class_exists( 'Boldgrid_Editor' ) ) {
			$config['scripts']['animate-css'] = true;
			$config['scripts']['wow-js'] = true;
		}

		$main_menu = array(
			'name' => __( 'Main Menu', 'bgtfw' ),
			'items' => array(
				'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
				'page_about' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{about}}',
				),
				'page_blog',
				'page_contact' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{contact}}',
				),
			),
		);

		// Main Menu configuration.
		$config['starter-content']['nav_menus']['main'] = $main_menu;

		// Main Sticky Menu configuration.
		$config['starter-content']['nav_menus']['sticky-main'] = $main_menu;

		// Social Menu configuration.
		$config['starter-content']['nav_menus']['social'] = array(
			'name' => __( 'Social Media Links', 'bgtfw' ),
			'items' => array(
				'link_yelp',
				'link_facebook',
				'link_twitter',
				'link_linkedin',
				'link_email',
			),
		);

		$config['customizer']['controls']['bgtfw_blog_margin']['default'] = [
			[
				'media' => [ 'base' ],
				'unit' => 'em',
				'isLinked' => false,
				'values' => [
					'top' => 0,
					'bottom' => 3,
				],
			],
		];

		// Content Links.
		$config['customizer']['controls']['bgtfw_body_link_decoration']['default'] = 'none';

		// Primary Menu -Link color.
		$config['customizer']['controls']['bgtfw_menu_items_link_color_main']['default'] = 'color-neutral';

		// Primary Menu - Active link color.
		$config['customizer']['controls']['bgtfw_menu_items_active_link_color_main']['default'] = 'color-neutral';

		// Acive Menu Item Border Color.
		$config['customizer']['controls']['bgtfw_menu_items_active_link_border_color_main']['default'] = 'color-1';

		// Primary Menu - Hover color.
		$config['customizer']['controls']['bgtfw_menu_items_hover_color_main']['default'] = 'color-1';

		// Primary Menu - Hover Effect.
		$config['customizer']['controls']['bgtfw_menu_items_hover_effect_main']['default'] = 'hvr-underline-from-center';

		// Footer Menu - Link Color
		$config['customizer']['controls']['bgtfw_menu_items_link_color_footer_center']['default'] = 'color-1';

		// Footer Menu - Active link color.
		$config['customizer']['controls']['bgtfw_menu_items_active_link_color_footer_center']['default'] = 'color-neutral';

		// Set the default link color of the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_link_color_social']['default'] = 'color-neutral';

		// Set the default link hover state color of the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_hover_color_social']['default'] = 'color-1';

		// Set the default hover effect for the social menu location.
		$config['customizer']['controls']['bgtfw_menu_items_hover_effect_social']['default'] = 'none';

		// Set social menu active link color defaults in case other menu items are assigned to this location.
		$config['customizer']['controls']['bgtfw_menu_items_active_link_color_social']['default'] = 'color-neutral';

		// Set the social media icon size.
		$config['social-icons']['size'] = 'large';

		// Ensure the social menu location hooks are removed when the footer is disabled.
		$config['menu']['footer_menus'][] = 'social';

		// Text Contrast Colors.
		$config['customizer-options']['colors']['light_text'] = '#ffffff';
		$config['customizer-options']['colors']['dark_text'] = '#1a1a1a';

		// Button Classes
		$config['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1';
		$config['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2';

		// Set all pages to be in a container by default.
		$config['customizer']['controls']['bgtfw_pages_container']['default'] = 'container';

		// This content set uses pages set to full width.
		$config['starter-content']['theme_mods']['bgtfw_pages_container'] = '';

		$config['customizer']['controls']['bgtfw_menu_items_active_link_border_main']['default'] = [
			[
				'media' => [ 'base' ],
				'unit' => 'px',
				'isLinked' => false,
				'type' => 'solid',
				'values' => [
					'top' => 0,
					'left' => 0,
					'right' => 0,
					'bottom' => 4,
				],
			],
		];

		// Set header layout for this import.
		$config['starter-content']['theme_mods']['bgtfw_header_layout'] = [
			[
				'container' => 'container',
				'items' => [
					[
						'type' => 'boldgrid_site_identity',
						'key' => 'branding',
						'align' => 'w',
						'display' => [
							[
								'selector' => '.site-title',
								'display' => 'show',
								'title' => __( 'Title', 'bgtfw' ),
							],
							[
								'selector' => '.site-description',
								'display' => 'hide',
								'title' => __( 'Tagline', 'bgtfw' ),
							],
						],
					],
					[
						'type' => 'boldgrid_menu_social',
						'key' => 'menu',
						'align' => 'e',
					],
				],
			],
			[
				'container' => 'container',
				'items' => [
					[
						'type' => 'boldgrid_menu_main',
						'key' => 'menu',
						'align' => 'e',
					],
				],
			],			
		];

		// Set sticky header layout for this import.
		$config['starter-content']['theme_mods']['bgtfw_sticky_header_layout'] = [
			[
				'container' => 'container',
				'items' => [
					[
						'type' => 'boldgrid_site_identity',
						'key' => 'branding',
						'align' => 'w',
						'display' => [
							[
								'selector' => '.site-title',
								'display' => 'show',
								'title' => __( 'Title', 'bgtfw' ),
							],
							[
								'selector' => '.site-description',
								'display' => 'hide',
								'title' => __( 'Tagline', 'bgtfw' ),
							],
						],
					],
					[
						'type' => 'boldgrid_menu_sticky-main',
						'key' => 'menu',
						'align' => 'e',
					],
				],
			],
		];

		// Set footer layout for this import.
		$config['starter-content']['theme_mods']['bgtfw_footer_layout'] = [
			[
				'container' => 'container',
				'items' => [
					[
						'type' => 'boldgrid_display_attribution_links',
						'key' => 'attribution',
						'align' => 'c',
					],
				],
			],
		];

		// Remove contact block control.
		unset( $config['customizer']['controls']['boldgrid_contact_details_setting'] );

		// Configs above will override framework defaults.
		return $config;
	}
}

/**
 * Retrieve starter content file contents.
 *
 * @since 2.0.0
 *
 * @param string $partial File's relative path to ./partials/.
 *
 * @return string $content Rendered markup for starter content page.
 */
function bgtfw_get_contents( $partial ) {
	return function () use ( $partial ) {
		include get_template_directory() . '/partials/utility.php';

		ob_start();
		include get_template_directory() . '/partials/' . $partial;
		$content = ob_get_contents();
		ob_end_clean();
		$content = str_replace( array( "\n", "\t" ), '', $content );

		return $content;
	};
}

add_filter( 'boldgrid_theme_framework_config', 'boldgrid_prime_framework_config' );

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}

$loader = new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
