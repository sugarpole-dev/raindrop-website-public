<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Software';
	$g5['title'] = 'Teamk ERP';
	
	$board['bo_subject'] = 'Software';
	$page_no="3";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
		
<div class="pcv">

	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_1.jpg" class="mt60 text-center" style="width:100%"></p>   
	</div>
	
	<div class="container">	
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_2.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>
	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_3.jpg" class="mt60 text-center" style="width:100%"></p>   
	</div>

	<p style="background-image:url(<?php echo G5_THEME_IMG_URL ?>/s2_6_4.jpg);padding:120px;text-align:center">
	<span style="font-size:36px; color:#fff">Teamk ERP와 함께 쉽고 편리한 기업 관리를 시작해보세요!</span></p>

	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_5.jpg" class="mt60 text-center" style="width:100%"></p> 
	</div>

	<div class="s2_4_bg3 mt60">
		<h3>쉽고 편리한 Teamk ERP 솔루션!</h3>
		<p>팀케이는 고객만족을 위해 항상 노력합니다.</p>
		<div class="btn_confirm">
			<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
		</div>
	</div>
	
</div>


</div>
</div>

<div class="mobilev">

	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_1.jpg" class="mt60 text-center" style="width:100%"></p>   
	</div>
	
	<div class="container">	
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_2.jpg" class="mt60 text-center" style="width:100%"></p>
	</div>
	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_3.jpg" class="mt60 text-center" style="width:100%"></p>   
	</div>

	<p style="background-image:url(<?php echo G5_THEME_IMG_URL ?>/s2_6_4.jpg);padding:120px;text-align:center">
	<span style="font-size:36px; color:#fff">Teamk ERP와 함께 쉽고 편리한 기업 관리를 시작해보세요!</span></p>

	<div class="container">	
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_6_5.jpg" class="mt60 text-center" style="width:100%"></p> 
	</div>

	<div class="s2_4_bg3 mt60">
		<h3>쉽고 편리한 Teamk ERP 솔루션!</h3>
		<p>팀케이는 고객만족을 위해 항상 노력합니다.</p>
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