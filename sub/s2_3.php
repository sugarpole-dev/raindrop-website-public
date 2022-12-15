<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Software';
	$g5['title'] = 'Rainforest';
	
	$board['bo_subject'] = 'Software';
	$page_no="1";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
		
<div class="pcv">
<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_1_1.jpg" class="mt60 text-center" style="width:100%"></p>
</div>
		
       

	<div class="raindrop_bg2">
		<p>레인포레스트는 치과 의료용 3D뷰어 프로그램입니다.</p>
		<h3>환자와 의사간 원활한 의사소통으로 더 편리한 업무를!</h3>
	</div>
	<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_1.jpg" class="text-center" style="width:100%"></p>
	</div>
	
	<div class="container mt60">
		<div id="tabs">
          <ul class="tab tab6">
            <li class="active"><span>효율적인 UI</span></li>
            <li><span>Real Sharpen</span></li>
            <li><span>Canal Drawing</span></li>
          </ul>
          <div class="tabContent active">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_1.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_2.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_3.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
		  
        </div>
	</div>
	<div class="manyone_bg3">
		<h3>치과 의료용 전문 3D 뷰어 프로그램!</h3>
		<p>레인포레스트로 환자와 의사간의 신뢰를 쌓아보세요.</p>
		<div class="btn_confirm">
			<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
		</div>
		</div>
	
</div>


</div>
</div>

<div class="mobilev">
<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_1_1_m.jpg" class="mt60 text-center" style="width:100%"></p>
</div>
		
       

	<div class="raindrop_bg2">
		<p>레인포레스트는 치과 의료용 3D뷰어 프로그램입니다.</p>
		<h3>환자와 의사간 원활한 의사소통으로 더 편리한 업무를!</h3>
	</div>
	<div class="container">
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_1_m.jpg" class="text-center" style="width:100%"></p>
	</div>
	
	<div class="container mt60">
		<div id="tabs">
          <ul class="tab tab6">
            <li class="active"><span>효율적인 UI</span></li>
            <li><span>Real Sharpen</span></li>
            <li><span>Canal Drawing</span></li>
          </ul>
          <div class="tabContent active">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_1.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_2.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/s2_3_tab_3.jpg" class="col-md-12 col-sm-12 col-xs-12 mt60"></p>
            </div>
          </div>
		  
        </div>
	</div>
	<div class="manyone_bg3">
		<h3>치과 의료용 전문 3D 뷰어 프로그램!</h3>
		<p>레인포레스트로 환자와 의사간의 신뢰를 쌓아보세요.</p>
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