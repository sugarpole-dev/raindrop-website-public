<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Download';


	$board['bo_subject'] = 'Download';
	$g5['title'] = '　Manyone　';
	$page_no="0";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<div class="pcv">

<div class="layer_fixed2">
<div class="layer_con"><img src="<?php echo G5_THEME_IMG_URL ?>/download_banner.jpg"></div>
</div>


<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_1.jpg" class="mt60 text-center" style="width:100%"></p>
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_2.jpg" class="mt60 text-center" style="width:100%"></p>
</div>
<img src="<?php echo G5_THEME_IMG_URL ?>/s4_2_3.jpg" class="mt60 text-center" style="width:100%">
<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_4.jpg" class="mt60 text-center" style="width:100%"></p>
		
		<div class="btn_confirm" style="margin:60px 0 120px 0">
					<a class="raindrop_download" href="javascript:void(0);" onClick="javascript:location.href='http://wishub.onteamk.com/board/download/Manyone_Setup.exe';">
					<img src="<?php echo G5_THEME_IMG_URL ?>/cloud_download1.png"></a>

					<a class="raindrop_download" href="javascript:alert('준비중입니다.');">
					<img src="<?php echo G5_THEME_IMG_URL ?>/server_download1.png"></a>

		</div>
</div>
</div>



<div class="mobilev">
<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_1_m.jpg" class="mt60 text-center" style="width:100%"></p>
		<div class="btn_confirm mobile_btn" style="margin:20px 0 60px 0">
			
				<a class="raindrop_download" href="javascript:alert('PC에서 이용해주세요.');">
					<img src="<?php echo G5_THEME_IMG_URL ?>/cloud_download1.png"></a>

					<a class="raindrop_download" href="javascript:alert('PC에서 이용해주세요.');">
					<img src="<?php echo G5_THEME_IMG_URL ?>/server_download1.png"></a>
		</div>
</div>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>

    $("a.raindrop_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
			location.replace('../sub/s5_1.php');
        } else {
            return false;
        }
    });


</script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>