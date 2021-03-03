<?php
/**
 * Fromscratch 404
 *
 * @package fromscratch
 */

	header( 'HTTP/1.1 301 Moved Permanently' );
	header( 'Location: ' . get_bloginfo( 'url' ) );
	exit();
