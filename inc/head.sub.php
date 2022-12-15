<?php session_start();
if($_SESSION['language_type'] == "en" || $_SESSION['language_type'] == null){
include_once($_SERVER["DOCUMENT_ROOT"].'/public/message/en.php');
$select_en ="select";
$select_ko ="";
}else if($_SESSION['language_type'] == "ko"){
include_once($_SERVER["DOCUMENT_ROOT"].'/public/message/ko.php');
$select_en ="";
$select_ko ="select";
} ?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="UGd-yX8Es8z-nSMp41Eu-D76diMIYc7uaWDQPSRCs-4" />
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>

<link rel="stylesheet" href="/public/css/base.css">
	<link rel="stylesheet" href="/public/css/vendor.css">  
	<link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
	<link rel="stylesheet" href="/public/css/style1.css">
<link rel="stylesheet" href="/public/css/mobile.css">
<link rel="stylesheet" href="/public/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/css/jquery.bxslider.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";

</script>
<script src="/public/js/jquery-2.1.3.min.js"></script>
<script src="/public/js/common.js"></script>
<script src="/public/js/wrest.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery.bxslider.min.js"></script>
<script src="/public/js/jquery.easing.1.3.js"></script>
<script src="/public/js/jquery.scrollTo.js"></script>
<script src="/public/js/jquery.singlePageNav.js"></script>
<script src="/public/js/smooth-scroll.js"></script>
<script src="/public/js/jquery.backstretch.min.js"></script>
<script src="/public/js/modernizr.custom.70111.js"></script>
<script>
 function changeLang(type) {
    
			 $.ajax({
                    url: '/public/ajax.action.php',
                    type: 'POST',
                    data: {
							'type':'translation',
							'language_type':type
                    },
                    dataType: 'html',
                    success: function (data) {
                      //  alert(data);
														if (data=="suc")
													{
														location.href = location.href;
													}
						
                    }
                });
                
}
</script>
<meta charset="utf-8">
	<title>Sugarpole</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
	
	
   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
