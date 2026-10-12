<?php
/**
 * Estatein Theme Functions & Definitions
 *
 * @package Estatein
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'ESTATEIN_VERSION', '1.0.1' );
define( 'ESTATEIN_DIR', get_template_directory() );
define( 'ESTATEIN_URI', get_template_directory_uri() );

/**
 * 1. Theme Setup
 */
function estatein_setup() {
	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Custom logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 48,
			'width'       => 160,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary' => __( 'Primary Header Menu', 'estatein' ),
			'footer'  => __( 'Footer Menu', 'estatein' ),
		)
	);
}
add_action( 'after_setup_theme', 'estatein_setup' );

/**
 * 2. Enqueue Styles & Scripts
 */
function estatein_scripts() {
	// Google Fonts - Urbanist
	wp_enqueue_style(
		'estatein-fonts',
		'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300..900;1,300..900&display=swap',
		array(),
		null
	);

	// Style Guide & Design Tokens
	wp_enqueue_style(
		'estatein-style-guide',
		ESTATEIN_URI . '/assets/css/style_guide.css',
		array( 'estatein-fonts' ),
		ESTATEIN_VERSION
	);

	// Global Theme Styles
	wp_enqueue_style(
		'estatein-global',
		ESTATEIN_URI . '/assets/css/global.css',
		array( 'estatein-style-guide' ),
		ESTATEIN_VERSION
	);

	// Root Style (Theme Header)
	wp_enqueue_style(
		'estatein-main',
		get_stylesheet_uri(),
		array( 'estatein-global' ),
		ESTATEIN_VERSION
	);

	// Main Interactive JavaScript
	wp_enqueue_script(
		'estatein-script',
		ESTATEIN_URI . '/assets/js/main.js',
		array(),
		ESTATEIN_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'estatein_scripts' );

/**
 * 3. Register Custom Post Types & Taxonomies
 */
function estatein_register_cpts() {
	// CPT: Properties
	register_post_type(
		'estatein_property',
		array(
			'labels'       => array(
				'name'               => __( 'Properties', 'estatein' ),
				'singular_name'      => __( 'Property', 'estatein' ),
				'add_new'            => __( 'Add New Property', 'estatein' ),
				'add_new_item'       => __( 'Add New Property', 'estatein' ),
				'edit_item'          => __( 'Edit Property', 'estatein' ),
				'all_items'          => __( 'All Properties', 'estatein' ),
				'view_item'          => __( 'View Property', 'estatein' ),
				'search_items'       => __( 'Search Properties', 'estatein' ),
				'not_found'          => __( 'No properties found', 'estatein' ),
				'not_found_in_trash' => __( 'No properties found in Trash', 'estatein' ),
			),
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array( 'slug' => 'properties' ),
			'menu_icon'    => 'dashicons-building',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);

	// Taxonomy: Property Type / Category
	register_taxonomy(
		'property_category',
		'estatein_property',
		array(
			'labels'            => array(
				'name'          => __( 'Property Types', 'estatein' ),
				'singular_name' => __( 'Property Type', 'estatein' ),
				'search_items'  => __( 'Search Property Types', 'estatein' ),
				'all_items'     => __( 'All Property Types', 'estatein' ),
				'edit_item'     => __( 'Edit Property Type', 'estatein' ),
				'update_item'   => __( 'Update Property Type', 'estatein' ),
				'add_new_item'  => __( 'Add New Property Type', 'estatein' ),
				'new_item_name' => __( 'New Property Type Name', 'estatein' ),
				'menu_name'     => __( 'Property Types', 'estatein' ),
			),
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'property-type' ),
			'show_in_rest'      => true,
		)
	);

	// CPT: Testimonials
	register_post_type(
		'estatein_testimonial',
		array(
			'labels'       => array(
				'name'          => __( 'Testimonials', 'estatein' ),
				'singular_name' => __( 'Testimonial', 'estatein' ),
				'add_new'       => __( 'Add New Testimonial', 'estatein' ),
				'add_new_item'  => __( 'Add New Testimonial', 'estatein' ),
				'edit_item'     => __( 'Edit Testimonial', 'estatein' ),
				'all_items'     => __( 'All Testimonials', 'estatein' ),
			),
			'public'       => true,
			'menu_icon'    => 'dashicons-testimonial',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);

	// CPT: FAQs
	register_post_type(
		'estatein_faq',
		array(
			'labels'       => array(
				'name'          => __( 'FAQs', 'estatein' ),
				'singular_name' => __( 'FAQ', 'estatein' ),
				'add_new'       => __( 'Add New FAQ', 'estatein' ),
				'add_new_item'  => __( 'Add New FAQ', 'estatein' ),
				'edit_item'     => __( 'Edit FAQ', 'estatein' ),
				'all_items'     => __( 'All FAQs', 'estatein' ),
			),
			'public'       => true,
			'menu_icon'    => 'dashicons-editor-help',
			'supports'     => array( 'title', 'editor', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'estatein_register_cpts' );

/**
 * 4. Custom Meta Boxes (Intuitive Admin UI for Properties & Testimonials)
 */
function estatein_add_meta_boxes() {
	// Property Details Meta Box
	add_meta_box(
		'estatein_property_details',
		__( 'Property Specifications & Pricing', 'estatein' ),
		'estatein_render_property_meta_box',
		'estatein_property',
		'normal',
		'high'
	);

	// Testimonial Meta Box
	add_meta_box(
		'estatein_testimonial_details',
		__( 'Client Details & Rating', 'estatein' ),
		'estatein_render_testimonial_meta_box',
		'estatein_testimonial',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'estatein_add_meta_boxes' );

/**
 * Render Property Meta Box HTML
 */
function estatein_render_property_meta_box( $post ) {
	wp_nonce_field( 'estatein_save_property_meta', 'estatein_property_nonce' );

	$price = get_post_meta( $post->ID, '_property_price', true );
	$beds  = get_post_meta( $post->ID, '_property_beds', true );
	$baths = get_post_meta( $post->ID, '_property_baths', true );
	$type  = get_post_meta( $post->ID, '_property_type', true );
	?>
	<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; padding: 10px 0;">
		<div>
			<label for="estatein_property_price" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Price (e.g. $550,000):', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_property_price" name="estatein_property_price" value="<?php echo esc_attr( $price ); ?>" style="width: 100%;" placeholder="$550,000">
		</div>
		<div>
			<label for="estatein_property_type" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Property Type (e.g. Villa, Apartment):', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_property_type" name="estatein_property_type" value="<?php echo esc_attr( $type ); ?>" style="width: 100%;" placeholder="Villa">
		</div>
		<div>
			<label for="estatein_property_beds" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Bedrooms (e.g. 4-Bedroom):', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_property_beds" name="estatein_property_beds" value="<?php echo esc_attr( $beds ); ?>" style="width: 100%;" placeholder="4-Bedroom">
		</div>
		<div>
			<label for="estatein_property_baths" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Bathrooms (e.g. 3-Bathroom):', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_property_baths" name="estatein_property_baths" value="<?php echo esc_attr( $baths ); ?>" style="width: 100%;" placeholder="3-Bathroom">
		</div>
	</div>
	<?php
}

/**
 * Render Testimonial Meta Box HTML
 */
function estatein_render_testimonial_meta_box( $post ) {
	wp_nonce_field( 'estatein_save_testimonial_meta', 'estatein_testimonial_nonce' );

	$author   = get_post_meta( $post->ID, '_testimonial_author', true );
	$location = get_post_meta( $post->ID, '_testimonial_location', true );
	$rating   = get_post_meta( $post->ID, '_testimonial_rating', true ) ?: '5';
	?>
	<div style="display: grid; grid-template-columns: 1fr 1fr 100px; gap: 16px; padding: 10px 0;">
		<div>
			<label for="estatein_testimonial_author" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Client / Author Name:', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_testimonial_author" name="estatein_testimonial_author" value="<?php echo esc_attr( $author ); ?>" style="width: 100%;" placeholder="Wade Warren">
		</div>
		<div>
			<label for="estatein_testimonial_location" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Location (e.g. USA, California):', 'estatein' ); ?>
			</label>
			<input type="text" id="estatein_testimonial_location" name="estatein_testimonial_location" value="<?php echo esc_attr( $location ); ?>" style="width: 100%;" placeholder="USA, California">
		</div>
		<div>
			<label for="estatein_testimonial_rating" style="display: block; font-weight: 600; margin-bottom: 6px;">
				<?php esc_html_e( 'Stars (1-5):', 'estatein' ); ?>
			</label>
			<select id="estatein_testimonial_rating" name="estatein_testimonial_rating" style="width: 100%;">
				<?php for ( $i = 5; $i >= 1; $i-- ) : ?>
					<option value="<?php echo esc_attr( $i ); ?>" <?php selected( $rating, (string) $i ); ?>><?php echo esc_html( $i ); ?> ⭐</option>
				<?php endfor; ?>
			</select>
		</div>
	</div>
	<?php
}

/**
 * Save Meta Box Values
 */
function estatein_save_meta_boxes( $post_id ) {
	// 1. Property Meta
	if ( isset( $_POST['estatein_property_nonce'] ) && wp_verify_nonce( sanitize_key( $_POST['estatein_property_nonce'] ), 'estatein_save_property_meta' ) ) {
		if ( current_user_can( 'edit_post', $post_id ) ) {
			if ( isset( $_POST['estatein_property_price'] ) ) {
				update_post_meta( $post_id, '_property_price', sanitize_text_field( wp_unslash( $_POST['estatein_property_price'] ) ) );
			}
			if ( isset( $_POST['estatein_property_beds'] ) ) {
				update_post_meta( $post_id, '_property_beds', sanitize_text_field( wp_unslash( $_POST['estatein_property_beds'] ) ) );
			}
			if ( isset( $_POST['estatein_property_baths'] ) ) {
				update_post_meta( $post_id, '_property_baths', sanitize_text_field( wp_unslash( $_POST['estatein_property_baths'] ) ) );
			}
			if ( isset( $_POST['estatein_property_type'] ) ) {
				update_post_meta( $post_id, '_property_type', sanitize_text_field( wp_unslash( $_POST['estatein_property_type'] ) ) );
			}
		}
	}

	// 2. Testimonial Meta
	if ( isset( $_POST['estatein_testimonial_nonce'] ) && wp_verify_nonce( sanitize_key( $_POST['estatein_testimonial_nonce'] ), 'estatein_save_testimonial_meta' ) ) {
		if ( current_user_can( 'edit_post', $post_id ) ) {
			if ( isset( $_POST['estatein_testimonial_author'] ) ) {
				update_post_meta( $post_id, '_testimonial_author', sanitize_text_field( wp_unslash( $_POST['estatein_testimonial_author'] ) ) );
			}
			if ( isset( $_POST['estatein_testimonial_location'] ) ) {
				update_post_meta( $post_id, '_testimonial_location', sanitize_text_field( wp_unslash( $_POST['estatein_testimonial_location'] ) ) );
			}
			if ( isset( $_POST['estatein_testimonial_rating'] ) ) {
				update_post_meta( $post_id, '_testimonial_rating', sanitize_text_field( wp_unslash( $_POST['estatein_testimonial_rating'] ) ) );
			}
		}
	}
}
add_action( 'save_post', 'estatein_save_meta_boxes' );

/**
 * 5. Helper Function: Get Custom Field or Meta (ACF Compatible)
 */
function estatein_get_meta( $post_id, $acf_name, $meta_key, $default = '' ) {
	if ( function_exists( 'get_field' ) ) {
		$val = get_field( $acf_name, $post_id );
		if ( ! empty( $val ) ) {
			return $val;
		}
	}
	$meta = get_post_meta( $post_id, $meta_key, true );
	return ! empty( $meta ) ? $meta : $default;
}

/**
 * 6. SEO Meta Tags & Open Graph
 */
function estatein_seo_meta_tags() {
	if ( is_front_page() || is_home() ) {
		$desc = get_bloginfo( 'description' ) ?: 'Discover Your Dream Property with Estatein. Real Estate investments, villas, apartments and luxury homes.';
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . ' - Discover Your Dream Property" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $desc ) . '" />' . "\n";
		echo '<meta property="og:type" content="website" />' . "\n";
		echo '<meta property="og:url" content="' . esc_url( home_url( '/' ) ) . '" />' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
	} elseif ( is_single() ) {
		$desc = wp_strip_all_tags( get_the_excerpt() ?: get_the_content() );
		$desc = wp_trim_words( $desc, 25, '...' );
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $desc ) . '" />' . "\n";
		echo '<meta property="og:type" content="article" />' . "\n";
		echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '" />' . "\n";
		if ( has_post_thumbnail() ) {
			$img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
			echo '<meta property="og:image" content="' . esc_url( $img_url ) . '" />' . "\n";
		}
	}
}
add_action( 'wp_head', 'estatein_seo_meta_tags', 1 );
