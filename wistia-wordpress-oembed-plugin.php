<?php
/*
Plugin Name: Wistia WordPress oEmbed Plugin
Plugin URI: https://github.com/wistia/wistia-wordpress-oembed-plugin
Description: A plugin that allows you to embed videos from your Wistia account into WordPress.
Version: 0.1
Author: Wistia, Inc.
Author URI: http://www.wistia.com/
License: MIT
*/
wp_oembed_add_provider( 'http://app.wistia.com/embed/medias/*', 'http://app.wistia.com/embed/oembed' );
?>
