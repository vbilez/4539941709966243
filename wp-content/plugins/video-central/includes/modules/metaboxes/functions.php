<?php
/**
 * Plugin public functions.
 */

if ( ! function_exists( 'video_central_metaboxes_meta' ) )
{
	/**
	 * Get post meta
	 *
	 * @param string   $key     Meta key. Required.
	 * @param int|null $post_id Post ID. null for current post. Optional
	 * @param array    $args    Array of arguments. Optional.
	 *
	 * @return mixed
	 */
	function video_central_metaboxes_meta( $key, $args = array(), $post_id = null ) {
		$args = wp_parse_args( $args );
		/*
		 * If meta boxes is registered in the backend only, we can't get field's params
		 * This is for backward compatibility with version < 4.8.0
		 */
		$field = Video_Central_Metaboxes_Helper::find_field( $key, $post_id );

		/*
		 * If field is not found, which can caused by registering meta boxes for the backend only or conditional registration
		 * Then fallback to the old method to retrieve meta (which uses get_post_meta() as the latest fallback)
		 */
		if ( false === $field ) {
			return apply_filters( 'video_central_metaboxes_meta', Video_Central_Metaboxes_Helper::meta( $key, $args, $post_id ) );
		}
		$meta = in_array( $field['type'], array( 'oembed', 'map' ) ) ?
			video_central_metaboxes_the_value( $key, $args, $post_id, false ) :
			video_central_metaboxes_get_value( $key, $args, $post_id );
		return apply_filters( 'video_central_metaboxes_meta', $meta, $key, $args, $post_id );
	}
}

if ( ! function_exists( 'video_central_metaboxes_get_value' ) ) {
	/**
	 * Get value of custom field.
	 * This is used to replace old version of video_central_metaboxes_meta key.
	 *
	 * @param  string   $field_id Field ID. Required.
	 * @param  array    $args     Additional arguments. Rarely used. See specific fields for details
	 * @param  int|null $post_id  Post ID. null for current post. Optional.
	 *
	 * @return mixed false if field doesn't exist. Field value otherwise.
	 */
	function video_central_metaboxes_get_value( $field_id, $args = array(), $post_id = null ) {
		$args  = wp_parse_args( $args );
		$field = Video_Central_Metaboxes_Helper::find_field( $field_id, $post_id );

		// Get field value
		$value = $field ? Video_Central_Metaboxes_Field::call( 'get_value', $field, $args, $post_id ) : false;

		/*
		 * Allow developers to change the returned value of field
		 * For version < 4.8.2, the filter name was 'video_central_metaboxes_get_field'
		 *
		 * @param mixed    $value   Field value
		 * @param array    $field   Field parameter
		 * @param array    $args    Additional arguments. Rarely used. See specific fields for details
		 * @param int|null $post_id Post ID. null for current post. Optional.
		 */
		$value = apply_filters( 'video_central_metaboxes_get_value', $value, $field, $args, $post_id );

		return $value;
	}
}

if ( ! function_exists( 'video_central_metaboxes_the_value' ) ) {
	/**
	 * Display the value of a field
	 *
	 * @param  string   $field_id Field ID. Required.
	 * @param  array    $args     Additional arguments. Rarely used. See specific fields for details
	 * @param  int|null $post_id  Post ID. null for current post. Optional.
	 * @param  bool     $echo     Display field meta value? Default `true` which works in almost all cases. We use `false` for  the [video_central_metaboxes_meta] shortcode
	 *
	 * @return string
	 */
	function video_central_metaboxes_the_value( $field_id, $args = array(), $post_id = null, $echo = true ) {
		$args  = wp_parse_args( $args );
		$field = Video_Central_Metaboxes_Helper::find_field( $field_id, $post_id );

		if ( ! $field ) {
			return '';
		}

		$output = Video_Central_Metaboxes_Field::call( 'the_value', $field, $args, $post_id );

		/*
		 * Allow developers to change the returned value of field
		 * For version < 4.8.2, the filter name was 'video_central_metaboxes_get_field'
		 *
		 * @param mixed    $value   Field HTML output
		 * @param array    $field   Field parameter
		 * @param array    $args    Additional arguments. Rarely used. See specific fields for details
		 * @param int|null $post_id Post ID. null for current post. Optional.
		 */
		$output = apply_filters( 'video_central_metaboxes_the_value', $output, $field, $args, $post_id );

		if ( $echo ) {
			echo $output;
		}

		return $output;
	}
}// End if().

if ( ! function_exists( 'video_central_metaboxes_meta_shortcode' ) ) {
	/**
	 * Shortcode to display meta value
	 *
	 * @param array $atts Shortcode attributes, same as video_central_metaboxes_meta() function, but has more "meta_key" parameter
	 *
	 * @return string
	 */
	function video_central_metaboxes_meta_shortcode( $atts ) {
		$atts = wp_parse_args( $atts, array(
			'post_id' => get_the_ID(),
		) );
		if ( empty( $atts['meta_key'] ) ) {
			return '';
		}

		$field_id = $atts['meta_key'];
		$post_id  = $atts['post_id'];
		unset( $atts['meta_key'], $atts['post_id'] );

		return video_central_metaboxes_the_value( $field_id, $atts, $post_id, false );
	}

	add_shortcode( 'video_central_metaboxes_meta', 'video_central_metaboxes_meta_shortcode' );
}
