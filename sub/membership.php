<?php
session_start();
	$menu_title="Registration";
	$sub_title="Registration";
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/sub_head.php');
	
// ini_set("display_errors","1");
if (isset($_SESSION['user_id'])) {
 	include_once('membership/membership.php');
}else{
	include_once('register/login.php');
}

?>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>