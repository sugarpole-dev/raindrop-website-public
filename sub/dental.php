<?php
	include_once('./_common.php');
	$menu_title="Software";
	$sub_title="Dental";
	$page_no1="0";
	include_once('../inc/sub_head.php');
?>
		

<!--<div class="layer_fixed">
<div class="layer_con"><a href="../sub/s4_1.php"><img src="/public/img/product_banner.jpg"></a></div>
</div>-->
	<div id="tabs" class="medical_tabs">
          <ul class="tab tab4 medical_tab" style="">
            <li class="active"><span>Raindrop</span></li>
            <li><span>2D Dental Viewer</span></li>
          </ul>
          <div class="tabContent active">
            <div class="tabContentInner">
				<div class="medical_bg dental_raindrop">
					<h3 style="">Raindrop</h2>
					<p><?=$raindrop_title?></p>
				</div>
				<div class="forest_title">
					<h2><?=$raindrop_title1?></h2>
					<p><?=$raindrop_title1_1?></p>
				</div>
				<div class="container">
					<div style="margin-bottom:60px">
						<div class="raindrop_con">
							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_1.png">
									<h2><?=$raindrop_con1?></h2>
								</div>
								<p><?=$raindrop_con1_1?></p>
							</div>
							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_2.png">
									<h2><?=$raindrop_con2?></h2>
								</div>
								<p><?=$raindrop_con2_1?></p>
							</div>
						</div>
						<div class="raindrop_con">
							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_3.png">
									<h2><?=$raindrop_con3?></h2>
								</div>
								<p><?=$raindrop_con3_1?></p>
							</div>

							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_4.png">
									<h2><?=$raindrop_con4?></h2>
								</div>
								<p><?=$raindrop_con4_1?></p>
							</div>
						</div>
						<div class="raindrop_con">
							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_5.png">
									<h2><?=$raindrop_con5?></h2>
								</div>
								<p><?=$raindrop_con5_1?></p>
							</div>
							<div class="raindrop_con_sub">
								<div class="title">
									<img src="/public/img/raindrop_icon_6.png">
									<h2><?=$raindrop_con6?></h2>
								</div>
								<p><?=$raindrop_con6_1?></p>
							</div>
						</div>
					</div>
					<div class="forest_title">
						<h2>Raindrop Server</h2>
						<p><?=$raindrop_title2?></p>
					</div>
					<div class="raindrop_select">
						<div class="raindrop_box">
							<h3>Raindrop Cloud</h3>
							<div class="raindrop_con_box">
								<img src="/public/img/raindrop_cloud.jpg">
								<p><?=$raindrop_title2_1?></p>
							</div>
						</div>
						<div class="raindrop_box">
							<h3 style="background-color:#e49300">Raindrop Server</h3>
							<div class="raindrop_con_box">
								<img src="/public/img/raindrop_server.jpg">
								<p><?=$raindrop_title2_2?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
          <div class="tabContent">
				<div class="tabContentInner">
					<div class="medical_bg dental_2dviewer">
						<h3 style="">2D Dental Viewer</h2>
						<p><?=$dentalviewer_title?></p>
					</div>
				</div>
				<div class="container wait_con" style="text-align:center">
						<img src="/public/img/logo_black.png" style="">
						<h3 style=""><?=$waiting?></h3>
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
