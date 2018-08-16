<?php

/*
*	Template Name:App Controller
*
*
*/

$next=site_url();
session_start();
if(isset($_POST['btnStep1']) && !empty($_POST['btnStep1']) && $_POST['step']==1){
	
	//print_r($_POST);
	$_SESSION['userData']['user_login']=$_POST['user_name'];
	$_SESSION['userData']['user_email']=$_POST['email'];
	$_SESSION['userData']['user_pass']=$_POST['pwd'];
	
	$next.="/step-2/";
	header("location:$next");exit;
}

if(isset($_POST['btnStep2']) && !empty($_POST['btnStep2']) && $_POST['step']==2){
	
	//print_r($_POST);
	$_SESSION['userData']['user_login']=$_POST['user_name'];
	$_SESSION['userData']['user_email']=$_POST['email'];
	$_SESSION['userData']['user_pass']=$_POST['pwd'];
	
	$next.="/step-2/";
	header("location:$next");exit;
}

?>