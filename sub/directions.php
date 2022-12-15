<?php
include_once('./_common.php');
$menu_title="About";
$sub_title="Direction";
include_once('../inc/sub_head.php');
?>

<div class="directions">
	<!--tabs start-->

		<div class="directions_info" style="">
			<div class="map_text1" style="">
				<p><img src="/public/img/logo_black.png" style="width:100%"></p>
			</div>
			<div class="map_text2" style="">
				<h3 style=""><?=$directions_title?></h3>
				<ul><?=$directions?></ul>
			</div>
		</div>
		<div class="map map1">

			<!-- * 카카오맵 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div id="daumRoughmapContainer1644459472957" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

			<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
			new daum.roughmap.Lander({
			"timestamp" : "1644459472957",
			"key" : "293qe",
			"mapWidth" : "100%",
			"mapHeight" : "500"
			}).render();
			</script>
		</div>

</div>

<!--tabs end-->

</div>





<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>

