<?php
session_start();
$menu_title="About";
$sub_title="Register";
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/sub_head.php');
?>
<? if(!isset($_SESSION["f_user_mail"])){?>
<div class="content" style="background-color:#f5f5f5;padding:60px 0">
	<div class="container">
		<div class="find" style="">
			<div class="email_auth" style="">
				<h2 style="">Email authentication</h2>
				<div class="email_text" style="">
					<div id="email_check">
						<p class="auth_text" style="">Enter email to join Sugarpole.</p>
						<div class="mail_input">
							<p style="">Email</p>
							<input class="email_input" type="text" name="user_mail" id="user_mail" placeholder="Email">
						</div>
					</div>
					<div id="email_verification" style="display:none">
						<p class="auth_text">Please enter your verification code.</p>
						<div class="mail_input">
							<p>Verification code</p>
							<input class="email_input" type="text"  name="vcode" id="vcode" placeholder="Verification code">
						</div>
					</div>
				</div>
			</div>
			<div id="phone_div">
				<!-- <p style="font-size:15px">본인 명의의 휴대폰으로 실명인증을 할 수 있습니다.</p> -->
				<button id="btn_send" class="email_send_button" value="" style="" onClick="emailVerication('F')">Send</button>
				<button class="email_certification_button" id="btn_code_check"  value="" style="" onClick="verification();">Verification</button>
			</div>
		</div>

		<div class="find_next">
		</div>
	</div>
</div>

<?}else{?>

<div class="content" style="background-color:#f5f5f5;padding:60px 0">
	<div class="container">
		<div class="find" style="">
			<div class="email_auth" style="">
				<h2 style="">Change password for <?= $_SESSION["f_user_mail"]?></h2>
				<div class="email_text" style="">
					<div id="email_check">
						<p class="auth_text" style="">Reset your password</p>
						<div class="mail_input">
							<p style="">Password</p>
							<input type="password" name="member_pass" id="member_pass" placeholder="Password" value=""  class="password_input"  required oninvalid="this.setCustomValidity('')" oninput="setCustomValidity('')">
							<p style="position:absolute;font-size:12px;color:#07a2e8;bottom:-17px">Passwords must be at least 6 characters.</p>
							<input type="hidden" id="pw_chk_value" name="pw_chk_value" value="">
						</div>
						<div class="mail_input">
							<p style="">Confirm password</p>
							<input type="password" name="member_pass_ch" id="member_pass_ch" placeholder="Confirm password"  value=""  class="password_input"  required oninvalid="this.setCustomValidity('')" oninput="setCustomValidity('')">
							<p  id="_pass_false" style="display:none;position:absolute;font-size:12px;color:red;bottom:-17px" >Those passwords didn’t match.</p> 
							<p  id="_pass_true" style="display:none;position:absolute;font-size:12px;color:#07a2e8;bottom:-17px" >Password matches.</p> 
							<input type="hidden" id="pw_chk_" name="pw_chk_" value="">

						</div>
					</div>
				</div>
			</div>
			<div id="phone_div">
				<!-- <p style="font-size:15px">본인 명의의 휴대폰으로 실명인증을 할 수 있습니다.</p> -->
				<button id="btn_send" class="email_send_button" value="" style="" onClick="change_password();">Change password</button>
			</div>
		</div>

		<div class="find_next">
		</div>
	</div>
</div>


<?}?>
<script>
function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min; //최댓값은 제외, 최솟값은 포함
}

function emailVerication(type) {
	var vcode =  getRandomInt(100000, 999999);

	if($("#user_mail").val() != ""){

		$.ajax({
		url: 'ajax.action.find.php',
		type: 'POST',
		data: {
		'user_id': $("#user_mail").val(),
		'type': 'password'
		},
		dataType: 'html',
		success: function (data) {
		//alert(data);
		if (data == "available") {
		alert("This email does not exist.");
		return false;
		}else{

		if(!window.confirm("Send verification code to "+$("#user_mail").val()+"?")){
		return false;
		}

		$.ajax({
		url: '../../../resources/library/phpMailerAPI/phpMail.php',
		type: 'POST',
		data: {
		"code": vcode,
		"email": $("#user_mail").val(),
		"type": type
		},
		dataType: 'html',
		success: function (data) {

		$("#email_check").css("display", "none");
		$("#email_verification").css("display", "block");

		$("#btn_send").css("display", "none");
		$("#btn_code_check").css("display", "block");

		alert('An authentication email has been sent.');
		}
		}); // email send ajax

		}
		}
		});

	}
	else{
		alert("Please enter Email.");
		$("#user_mail").focus();
	}
}

function verification() {

	$.ajax({
	url: 'ajax.action.find.php',
	type: 'POST',
	data: {
	"code":$("#vcode").val(),
	"type": "verification"
	},
	dataType: 'html',
	success: function (data) {
	// alert(data);
	if (data == "true") {
	location.href = location.href;
	}else{
	alert("Please check the verification code.");
	}


	}

	});
}

function change_password(){
	if ($('#pw_chk_').val() == "true")
	{
		$.ajax({
			url: 'ajax.action.find.php',
			type: 'POST',
			data: {
			"user_pass":$('#member_pass').val(),
			"type": "change_password"
			},
			dataType: 'html',
			success: function (data) {
			 //alert(data);
					if (data == "success") {
						location.href = "../membership.php";
					}else{
					alert('failed');
					}
				}
		});
	}else{
		return false;
	}
}

$(document).ready(function(){
	
	//비밀번호 재확인 체크
	 $('#member_pass_ch').keyup(function(){
		var pass1 = $("#member_pass").val();
		var pass2 = $("#member_pass_ch").val();
		 if (pass1 == pass2) {
			  $("#_pass_false").css("display","none");
			  $("#_pass_true").css("display","");
			  $("#pw_chk_").val('true');
		  }else{
		  $("#_pass_false").css("display","");
		   $("#_pass_true").css("display","none");
			 $("#pw_chk_").val('false');
			}
	 });

});
</script>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
