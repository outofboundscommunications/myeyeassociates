<?php
require_once dirname( __FILE__ ).'/Mobile_Detect.php';

global $detect, $device;
$detect = new Mobile_Detect;

$device['device_type']       = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
$device['mobile']       = $detect->isMobile();
$device['tablet']       = $detect->isTablet();
$device['mobile_only']  = ( $detect->isMobile() && !$detect->isTablet() ? true : false );
$device['desktop']      = ( !$detect->isMobile() && !$detect->isTablet() ? true : false ) ;
$device['os_ios']       = $detect->isiOS();
$device['os_android']   = $detect->isAndroidOS();
$device['scriptVersion']= $detect->getScriptVersion();

setcookie("device_type", $device['device_type']);

// echo '<pre>';
// print_r($device);
// echo '</pre>';
?>