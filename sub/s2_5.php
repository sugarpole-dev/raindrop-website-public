<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Software';
	$g5['title'] = 'Smart Guide';
	
	$board['bo_subject'] = 'Software';
	$page_no="6";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
		
<div class="pcv">

<!--<div class="layer_fixed1">
<div class="layer_con"><a href="../sub/s6_1.php"><img src="<?php echo G5_THEME_IMG_URL ?>/smart_banner.jpg"></a></div>
</div>-->

		
    <p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_5_2.jpg" class="text-center" style="width:100%"></p>   

	
	<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_5_3.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>

	<div class="s2_4_bg3 mt60">
		<h3>보험청구를 쉽고 간편하게!</h3>
		<p>올바른 보험청구는 Smart Guide와 함께하세요!</p>
		<div class="btn_confirm">
			<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
		</div>
		</div>
	
</div>


</div>
</div>

<div class="mobilev">
<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_5_1.jpg" class="mt60 text-center" style="width:100%;"></p>
</div>
		
    <p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_5_2.jpg" class="mt60 text-center" style="width:100%"></p>   

	
	<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_5_3.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>

	<div class="s2_4_bg3 mt60">
		<h3>보험청구를 쉽고 간편하게!</h3>
		<p>올바른 보험청구는 Smart Guide와 함께하세요!</p>
		<div class="btn_confirm">
			<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
		</div>
		</div>
	
</div>


</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(".tab li").click(function () {
		var num = $(".tab li").index(this);
		$(".tabContent").removeClass('active');
		$(".tabContent").eq(num).addClass('active');
		$(".tab li").removeClass('active');
		$(this).addClass('active')
	});

	$(".tab2 li").click(function () {
		var num = $(".tab2 li").index(this);
		$(".tabContent2").removeClass('active');
		$(".tabContent2").eq(num).addClass('active');
		$(".tab2 li").removeClass('active');
		$(this).addClass('active')
	});

</script>



<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>