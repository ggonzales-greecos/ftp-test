<?php
//require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');
//global $wpdb;
    $site_url = $_POST['siteurl'];
 	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $site_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
    $data = curl_exec($ch);
    curl_close($ch);
    //echo $data;
    //preg_match("/\d\\.\d\.\d/", substr($data,3), $match, PREG_OFFSET_CAPTURE);
    preg_match("/\s<generator>https:\/\/wordpress.org\/\?v=(.*)<\/generator>/", substr($data,3), $match, PREG_OFFSET_CAPTURE);
 	
    if( isset($match[1][0]) ){
        echo $match[1][0];
    }else{
        echo "empty";
    }

    //echo "<br/><br/><b>Wordpress Version: </b>".$match[1][0];

?>