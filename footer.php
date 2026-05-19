<?php
/**
 * Child theme footer override.
 *
 * Skip footer output on 404 pages, otherwise render the parent footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( is_404() ) {
	return;
}

require get_template_directory() . '/footer.php';
