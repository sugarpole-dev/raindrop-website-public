<?php
	include_once('./_common.php');
	$g5_menu['title'] = 'Software';
	$g5['title'] = '주문의고수';
	
	$board['bo_subject'] = 'Software';
	$page_no="7";


	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
		
<div class="pcv">


	
	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_7_1.jpg" class="mt60 text-center" style="width:100%"></p>
	
<div class="container  mt60">
		<div id="tabs">
          <ul class="tab tab3">
            <li class="active"><span>로그인/회원가입</span></li>
            <li><span>메뉴등록</span></li>
            <li><span>거래처등록</span></li>
            <li><span>주문하기</span></li>
			<li><span>주문/판매내역</span></li>
            <li><span>거래금액</span></li>
          </ul>
          <div class="tabContent active">
            <div class="tabContentInner">
			  <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu01.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>

            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu02.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>

            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu03.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>
 
            </div>
          </div>
          <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu04.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>

            </div>
          </div>
		  <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu05.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>

            </div>
          </div>
		  <div class="tabContent">
            <div class="tabContentInner">
              <p class=""><img src="<?php echo G5_THEME_IMG_URL ?>/gosu06.jpg" class="col-md-12 col-sm-12 col-xs-12 mt55"></p>

            </div>
          </div>
		  
        </div>
	</div>	



	<div class="s2_4_bg3 mt60">
		<h3>쉽고 빠른 주문은 주문의 고수와 함께!</h3>
		<p>고객의 편리함을 책임집니다!</p>
		<div class="btn_confirm">
			<input type="button" class="btn_download" value="고객상담 바로가기" onClick="location.href='../sub/s5_1.php'">
		</div>
	</div>
	
</div>


</div>
</div>

<div class="mobilev">

	<p><img src="<?php echo G5_THEME_IMG_URL ?>/s2_7_1_m.jpg" class="mt60 text-center" style="width:100%"></p>

	<div class="s2_4_bg3 mt60">
		<h3>쉽고 빠른 주문은 주문의 고수와 함께!</h3>
		<p>고객의 편리함을 책임집니다!</p>
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