<?php
include_once('./_common.php');
$menu_title="Software";
$sub_title="Government&nbspSoftware";
$page_no1="0";
include_once('../inc/sub_head.php');
?>


<!--<div class="layer_fixed">
<div class="layer_con"><a href="../sub/s4_1.php"><img src="/public/img/product_banner.jpg"></a></div>
</div>-->
<div class="container">
	<div class="forest_title mt60">
		<h2><?=$etc_title?></h2>
		<p><?=$etc_title_sub?></p>
	</div>
</div>
<div class="goverment" style="">
	<h2 style=""><?=$etc_title2?></h2>
</div>
<div class="container">
	<div class="gover_con" style="">
		<div class="gover_content" style="">
			<img src="/public/img/etc_01.jpg">
			<h3 style=""><?=$etc_con1?></h3>
			<p style=""><?=$etc_con1_1?></p>
		</div>
		<div class="gover_content">
			<img src="/public/img/etc_02.jpg">
			<h3><?=$etc_con2?></h3>
			<p style=""><?=$etc_con2_1?></p>
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
