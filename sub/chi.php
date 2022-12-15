<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'About';
	$g5['title'] = 'Company';

	$board['bo_subject'] = 'About';
	$page_no="0";
	$page_no1="0";

	

	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>


<div class="pcv">

<div class="container" style="">
<img src="<?php echo G5_THEME_IMG_URL ?>/s1_1_chi.jpg" class="mt60 col-md-12 col-sm-12 col-xs-12">
</div>

<div class="about_bg1" style="padding:100px 0">
	<div class="container">
		<img src="<?php echo G5_THEME_IMG_URL ?>/s1_2_chi.png" style="width:100%">
	</div>
</div>

<div class="container" style="">
<img src="<?php echo G5_THEME_IMG_URL ?>/s1_3_chi.jpg" class="mt60 col-md-12 col-sm-12 col-xs-12">
</div>

<div class="about_bg2">
		<div class="container" style="">
		<img src="<?php echo G5_THEME_IMG_URL ?>/s1_3_chi.png" class="col-md-12 col-sm-12 col-xs-12">
		</div>
		<div class="btn_confirm" style="margin-top:40px">
			<input type="button" class="btn_download" value="Contact" onClick="location.href='../sub/s6_1.php'">
		</div>
</div>

</div>

<div class="mobilev">

<div class="container" style="">
<img src="<?php echo G5_THEME_IMG_URL ?>/s1_1_chi.jpg" class="mt60 col-md-12 col-sm-12 col-xs-12">
</div>

<div class="about_bg1" style="padding:100px 0">
	<div class="container">
		<img src="<?php echo G5_THEME_IMG_URL ?>/s1_2_chi.png" style="width:100%">
	</div>
</div>

<div class="container" style="">
<img src="<?php echo G5_THEME_IMG_URL ?>/s1_3_chi.jpg" class="mt60 col-md-12 col-sm-12 col-xs-12">
</div>

<div class="about_bg2">
		<div class="container" style="">
		<img src="<?php echo G5_THEME_IMG_URL ?>/s1_3_chi.png" class="col-md-12 col-sm-12 col-xs-12">
		</div>
		<div class="btn_confirm" style="margin-top:40px">
			<input type="button" class="btn_download" value="Contact" onClick="location.href='../sub/s6_1.php'">
		</div>
</div>

</div>



<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>