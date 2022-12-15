<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Design';
	$g5['title'] = 'Design';

	//화면의 성격
	$user_division = "user";
	$screen_div = "sub"; //main, sub
	$frame_div = "two";  //one, two

	//카테고리/페이지/상세페이지 명칭 & 카테고리 번호
	$cate_name = "센터소개";
	$cate_num = "1";

	$page_name = "인사말";
	$page_num = "1";


	//현재 활성화 상태
	//$gn_btn = "gn_btn".$cate_num;
	//$$gn_btn = "current";

	//$ln_btn = "ln_btn".$page_num;
	//$$ln_btn = "current";

	//$sln_btn = "sln_btn".$spage_num;
	//$$sln_btn = "current";

	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="container pcv" style="padding:120px 0">
<img src="<?php echo G5_THEME_IMG_URL ?>/s3_1.jpg" class="text-center" style="width:100%">

</div>
<div class="container mobilev" style="padding:60px 0">
<img src="<?php echo G5_THEME_IMG_URL ?>/s3_1_m.jpg" class="text-center" style="width:100%">

</div>
</div>
<?php echo latest('pic_wow_basic', 'portfolio', 16, 20);?>




<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>

