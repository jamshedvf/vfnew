<?php
global $wpdb;
$_POST = stripslashes_deep($_POST);
$_GET = stripslashes_deep($_GET);
$xyz_em_campId = intval($_GET['id']);
$xyz_em_campStatus = intval($_GET['status']);
$xyz_em_pageno = intval($_GET['pageno']);

if($xyz_em_campId=="" || !is_numeric($xyz_em_campId)){
	header("Location:".admin_url('admin.php?page=newsletter-manager-manage-campaigns'));
	exit();
}
$campCount = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'xyz_em_email_campaign WHERE id="'.$xyz_em_campId.'" ' ) ;
if(count($campCount)==0){
	header("Location:".admin_url('admin.php?page=newsletter-manager-manage-campaigns'));
	exit();
}else{
	if($xyz_em_campStatus == 0){
	$xyz_em_status = 0;
	}elseif($xyz_em_campStatus == 1){
		$xyz_em_status = 1;
	}
	$wpdb->update($wpdb->prefix.'xyz_em_email_campaign', array('status'=>$xyz_em_status), array('id'=>$xyz_em_campId));	
	header("Location:".admin_url('admin.php?page=newsletter-manager-manage-campaigns&pagenum='.$xyz_em_pageno));
	exit();
}
?>
