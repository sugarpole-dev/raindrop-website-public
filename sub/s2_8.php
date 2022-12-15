<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Software';
	$g5['title'] = '사업관리시스템';
	
	$board['bo_subject'] = 'Software';
	$page_no="5";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
		
<div class="pcv">
	<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_8_0.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_4_2_1.jpg" class="col-md-12 col-sm-12 col-xs-12" style="margin:60px 0"></p>
			  <p class="container"><img src="<?php echo G5_THEME_IMG_URL ?>/s2_4_2_2.jpg" class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:120px"></p>

	
		<div class="s2_4_bg3">
			<h3>관공서 업무도 팀케이와 함께!</h3>
			<p>언제든지 문의주시면 친절하게 상담해드립니다.</p>
			<div class="btn_confirm">
				<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
			</div>
		</div>
</div>


<div class="mobilev">

	<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_8_0.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_4_2_1.jpg" class="col-md-12 col-sm-12 col-xs-12" style="margin:30px 0"></p>
			  <p class="container"><img src="<?php echo G5_THEME_IMG_URL ?>/s2_4_2_2.jpg" class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:60px"></p>

	
		<div class="s2_4_bg3">
			<h3>관공서 업무도 팀케이와 함께!</h3>
			<p>언제든지 문의주시면 친절하게 상담해드립니다.</p>
			<div class="btn_confirm">
				<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
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