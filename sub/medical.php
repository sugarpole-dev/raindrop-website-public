<?php
	include_once('./_common.php');
	$menu_title="Software";
	$sub_title="Medical";
	$page_no1="0";
	include_once('../inc/sub_head.php');
?>
		
	<div id="tabs" class="medical_tabs">
          <ul class="tab tab4 medical_tab" style="">
            <li class="active"><span>DR Viewer</span></li>
            <!--<li><span>Vet DR Viewer</span></li>-->
            <li><span>Mammography</span></li>
          </ul>
          <div class="tabContent active">
            <div class="tabContentInner">
				<div class="medical_bg medical_dr">
					<h3 style="">Sugarpole DR Viewer</h2>
					<p><?=$medical_title?></p>
				</div>
				<div class="container">
					<div class="viewer_title">
						<div class="viewer_con">
							<p><?=$medical_1_1?></p>
						</div>
						<div class="viewer_con">
							<p><?=$medical_1_2?></p>
						</div>
						<div class="viewer_con">
							<p><?=$medical_1_3?></p>
						</div>
					</div>
					<div class="viewer_compatible" style="">
						<div class="compatible_modality" style="">
							<h2 style=""><?=$medical_title2?></h2>
							<p style=""><?=$medical_title2_1?></p>
						</div>
						<div class="viewer_modality" style="display:flex;justify-content: space-between;">
							<p class="modality">IO</p>
							<p class="modality">CR</p>
							<p class="modality">VET</p>
							<p class="modality">PX</p>
							<p class="modality">Mammography</p>
							<p class="modality">DX</p>
						</div>
					</div>
				</div>
					<div class="viewer_tool_container">
						<div class="viewer_bg">
							<h2><?=$medical_title3?></h2>
							<p style=""><?=$medical_title3_1?></p>
						</div>
						<div class="container" style="margin:0 auto">
							<div class="viewer_modality" style="">
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_01.png"></p>
									<h3><?=$medical_con1?></h3>
									<p><?=$medical_con1_1?></p>
								</div>
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_02.png"></p>
									<h3><?=$medical_con2?></h3>
									<p><?=$medical_con2_1?></p>
								</div>
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_03.png"></p>
									<h3><?=$medical_con3?></h3>
									<p><?=$medical_con3_1?></p>
								</div>
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_04.png"></p>
									<h3><?=$medical_con4?></h3>
									<p><?=$medical_con4_1?></p>
								</div>
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_05.png"></p>
									<h3><?=$medical_con5?></h3>
									<p><?=$medical_con5_1?></p>
								</div>
								<div class="viewer_point">
									<p><img src="/public/img/viewer_icon_06.png"></p>
									<h3><?=$medical_con6?></h3>
									<p><?=$medical_con6_1?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="viewer_tool_container">
						<div class="viewer_bg">
							<h2><?=$medical_title4?></h2>
							<p style=""><?=$medical_title4_1?></p>
						</div>
						<div class="container viewer_tool_container">
							<img class="tool_img" src="/public/img/viewer_tool.jpg" style="width:100%;">
							<div class="tool_con" style="">
								<div class="viewer_tool_point">
									<h3><?=$medical_title4_con1?></h3>
									<p><?=$medical_title4_con1_1?></p>
								</div>
								<div class="viewer_tool_point">
									<h3><?=$medical_title4_con2?></h3>
									<p><?=$medical_title4_con2_1?></p>
								</div>
								<div class="viewer_tool_point">
									<h3><?=$medical_title4_con3?></h3>
									<p><?=$medical_title4_con3_1?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
          <div class="tabContent">
				<div class="tabContentInner">
					<div class="medical_bg medical_mammo">
						<h3 style="">Mammography</h3>
						<p><?=$mammo_title?></p>
					</div>
					<div class="container wait_con" style="text-align:center">
						<img src="/public/img/logo_black.png" style="">
						<h3 style=""><?=$waiting?></h3>
					</div>
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

</script>



<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
