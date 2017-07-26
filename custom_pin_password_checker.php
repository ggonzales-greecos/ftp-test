<?php 
	require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');
	global $wpdb;
	$pin = date("Ymd");
	$pin_match = 0;

	if($_POST){
		$post_pin = $_POST['site_verification_pin'];
		if( $post_pin == $pin ){
			$pin_match = 1;
		}		
		echo $pin_match;
	}
?>