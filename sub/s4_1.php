<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Download';
	$board['bo_subject'] = 'Download';
	$g5['title'] = 'Download';
	$page_no="0";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<div class="pcv">

<!--<div class="layer_fixed2">
<div class="layer_con"><img src="<?php echo G5_THEME_IMG_URL ?>/download_banner.jpg"></div>
</div>-->

<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_1.jpg" class="mt60 text-center" style="width:100%"></p>
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_2.jpg" class="mt60 text-center" style="width:100%"></p>
</div>
<!--<img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_3.jpg" class="mt60 text-center" style="width:100%">-->
<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_1_4.jpg" class="mt60 text-center" style="width:100%"></p>
		
		<div class="btn_confirm1" style="margin:60px 0 120px 0;float:left">
			<div style="margin-bottom:20px"><img src="<?php echo G5_THEME_IMG_URL ?>/many_down_title.jpg"></div>
					<a class="raindrop_download" href="javascript:void(0);" onClick="javascript:location.href='http://wishub.onteamk.com/board/download/Manyone_Setup.exe';">
					<img src="<?php echo G5_THEME_IMG_URL ?>/many_down_cloud.jpg"></a>

					<a class="raindrop_download" href="javascript:void(0);" onClick="javascript:location.href='http://wishub.onteamk.com/board/download/Manyone_mssql_Setup.exe';">
					<img src="<?php echo G5_THEME_IMG_URL ?>/many_down_server.jpg"></a>

		</div>
		<div class="btn_confirm1" style="margin:60px 0 120px 0;float:right">
			<div style="margin-bottom:20px"><img src="<?php echo G5_THEME_IMG_URL ?>/rain_down_title.jpg"></div>
			<a class="raindrop_download" href="javascript:void(0);" onClick="javascript:location.href='http://wishub.onteamk.com/board/download/RaindropSetup_cloud.exe';">
				
					<img src="<?php echo G5_THEME_IMG_URL ?>/rain_down_cloud.jpg"></a>
<a class="raindrop_download" href="javascript:void(0);" onClick="javascript:location.href='http://wishub.onteamk.com/board/download/RaindropSetup_mssql.exe';">
			
					<img src="<?php echo G5_THEME_IMG_URL ?>/rain_down_server.jpg"></a>

		</div>
</div>
</div>

<div class="mobilev">
<div class="container">
		<p><img src="<?php echo G5_THEME_IMG_URL ?>/s4_2_1_m_1.jpg" class="mt60 text-center" style="width:100%"></p>

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