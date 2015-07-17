<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    ApplegateProducts
 * @subpackage ApplegateProducts/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return ApplegateProducts
 */
function APPLEGATEPRODUCTS() {
	return ApplegateProducts::getInstance();
}