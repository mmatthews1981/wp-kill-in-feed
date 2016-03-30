<?php
/*
Plugin Name: Shortcode to remove or add post content from feed
Plugin URI:
Description: This plugin gives you two new shortcodes, [killinfeed] and [addtofeed], that will prevent whatever it's wrapped around from being included in your site's RSS feed, or add exclusive feed-only content, in that order. It's especially useful for wrapping around multimedia shortcodes that are adding bits and pieces of the media player into your feed.
Author: Meredith Matthews
Version: 1
Author URI: http://braindouche.com/
*/

function bd_shortcode_killinfeed( $atts, $content ) {
	if ( ! is_feed() )
		return apply_filters( 'the_content', $content );
		return '';
}

add_shortcode( 'killinfeed', 'bd_shortcode_killinfeed' );

function bd_shortcode_addtofeed( $atts, $content ) {
	if ( is_feed() )
		return apply_filters( ‘the_content’, $content );
		return '';
}

add_shortcode( ‘addtofeed’, ‘bd_shortcode_addtofeed’ );

?>