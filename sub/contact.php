<?php
include_once('./_common.php');
$menu_title="Contact";
$sub_title="Contact";
$page_no1="0";
include_once('../inc/sub_head.php');
?>


<!--<div class="layer_fixed">
<div class="layer_con"><a href="../sub/s4_1.php"><img src="/public/img/product_banner.jpg"></a></div>
</div>-->

<script type="text/javascript">
function checkFrm(obj) {
	if(obj.wr_6.checked == false) {
		alert('Please check agree privacy policy');
		obj.wr_6.focus();
		return false;

	}

}

</script>
<div class="container_background" style="">
	<div class="container">
		<form id="contact_frm">
		<div class="form-box">
			<div class="form-con">
				<div class="provision">
					<h2><?=$privacy?></h2>
					<textarea readonly=""><?=$privacy_con?></textarea>
					<label for="provision-check" style="display: flex; align-items: center;">
					<input id="provision-check" type="checkbox" name="wr_6" value="6" style="">
					<span class="agree_check"><?=$privacy_agree?></span>
					</label>
				</div>
				<ul>
					<li><h2><?=$contents?></h2></li>
					<li>
						<span class="fl-name"><?=$contents_name?><span class="contact_star" style="">＊</span></span>
						<span class="fr-con">
						<input type="text" name="conteact_name" required="" itemname="name">
						</span>
					</li>
					<li>
						<span class="fl-name"><?=$contents_company?><span class="contact_star">＊</span></span>
						<span class="fr-con">
						<input type="text" name="conteact_company" required="" itemname="name">
						</span>
					</li>
					<li>
						<span class="fl-name"><?=$contents_phone?><span class="contact_star">＊</span></span>
						<span class="fr-con phone_num">
						<input type="text" name="wr_1" maxlength="4" required="" itemname="연락처">
						<input type="text" name="wr_2" maxlength="4" required="" itemname="연락처" style="margin: 0 5px;">
						<input type="text" name="wr_3" maxlength="4" required="" itemname="연락처">
						</span>
					</li>
					<li class="wr_content">
						<span class="fl-name"><?=$contents_content?><span class="contact_star">＊</span></span>
						<span class="fr-con wr_content">
						<textarea name="wr_content" id="" cols="30" rows="10" required="" itemname="문의내용"></textarea>
						</span>
					</li>
					<li class="receive-btn">
						<input name="image" type="button" onclick="emailSend();" value="<?=$contents_send?>" alt="Send">
					</li>
				</ul>


			</div>

		</div>
		</form>
	</div>
	<!--//-->

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

function emailSend() {

	var formData = $("#contact_frm").serialize();

	$.ajax({
	url: '../../../resources/library/phpMailerAPI/contact.phpMail.php',
	type: 'POST',
	data: formData,
	dataType: 'html',
	success: function (data) {
	//alert(data);
	if(data == 1){
	alert('전송완료');
	location.href = location.href;
	}
	}

	});
}

</script>



<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
