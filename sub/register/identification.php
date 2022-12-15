<?php
session_start();
$menu_title="About";
$sub_title="Register";
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/sub_head.php');
?>

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
		url: 'ajax.action.signup.php',
		type: 'POST',
		data: {
		'user_id': $("#user_mail").val(),
		'type': 'check_user_mail'
		},
		dataType: 'html',
		success: function (data) {
		//alert(data);
		if (data == "nested") {
		alert("This email already exists.");
		return false;
		}else if(data == "available"){

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
		 //alert(data);
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
	url: 'ajax.action.signup.php',
	type: 'POST',
	data: {
	"code":$("#vcode").val(),
	"type": "verification"
	},
	dataType: 'html',
	success: function (data) {
	// alert(data);
	if (data == "true") {
	location.href = "./signup.php";
	}else{
	alert('false');
	}


	}

	});
}


</script>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
