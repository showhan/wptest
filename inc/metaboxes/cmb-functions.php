<?php
/**
 *
 * @category WPBootScore
 * @package  WPBootScore
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


// require_once dirname( __FILE__ ) . '/cmb-post.php';
// require_once dirname( __FILE__ ) . '/cmb-page.php';
require_once dirname( __FILE__ ) . '/cmb-service.php';
// require_once dirname( __FILE__ ) . '/cmb-slide.php';