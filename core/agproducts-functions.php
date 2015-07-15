<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    AGProducts
 * @subpackage AGProducts/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return AGProducts
 */
function AGPRODUCTS() {
	return AGProducts::getInstance();
}