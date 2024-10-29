<?php
/*
 * @link       http://www.girltm.com/
 * @since      1.0.0
 * @package    APOYL_QINIUKODO
 * @subpackage APOYL_QINIUKODO/includes
 * @author     凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Apoyl_Qiniukodo_Uninstall {

	
	public static function uninstall() {
	    global $wpdb;
        delete_option('apoyl-qiniukodo-settings');
	}

}
