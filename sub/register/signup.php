<?php
session_start();
$menu_title="About";
$sub_title="Register";
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/sub_head.php');
//$name  = $_POST['name'];
//$phoneNo  = $_POST['phoneNo'];
//$birthDay  = $_POST['birthDay'];
//$result  = $_POST['result'];
if(!isset($_SESSION["v_user_mail"])) echo"<script>location.href = './identification.php';</script>";
function my_simple_crypt( $string, $action = 'e' ) {
	$secret_key = 'email';
	$secret_iv = 'email';
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$key = hash( 'sha256', $secret_key );
	$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	if( $action == 'e' ) {
		$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
	}
	else if( $action == 'd' ){
		$output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
	}
	return $output;
}


$user_mail = "";

?>



<div class="register_content" style="">
	<div class="register_container" style="">

		<form name="signup_info_form" id="signup_info_form" method="post" action="signup_result.php"  style="">
		<h2 style="text-align:center;font-weight:bold">Register</h2>
		<input type="hidden" name="type" value="signup" />
		<div class="register_con">
			<p class="registeritem_title">User name *</p>
			<input type="text" name="user_name" id="user_name" placeholder="User name" value=""  required oninvalid="this.setCustomValidity('Please enter user name.')" oninput="setCustomValidity('')">
		</div>
		<div class="register_con">
			<p class="registeritem_title">Company name</p>
			<input type="text" name="user_company_name" id="user_company_name" placeholder="Company name" value="">
		</div>
		<div class="register_con">
			<p class="registeritem_title">Email address *</p>
			<div id="member_id_box">
				<input type="text" name="user_id" id="user_id" style="width:100%" placeholder="Email" readonly value="<?=$_SESSION["v_user_mail"]?>" required oninvalid="this.setCustomValidity('Please enter login id.')" oninput="setCustomValidity('')">
			</div>
		</div>
		<div class="register_con">
			<p class="registeritem_title">Password *</p>
			<div id="member_pw_box" style="position:relative;">
				<input type="password" name="user_pw" id="user_pw" style="width:100%" placeholder="Password" value="" style="width:100%" onkeypress="checkCapsLock(event)" style="" required oninvalid="this.setCustomValidity('Please enter password.')" oninput="setCustomValidity('')">
				<p id="pw_ch_true" class="password_check" style="display:none;color:#07a2e8" >Available<p>
				<p id="pw_ch_false" class="password_check" style="display:none;color:red" >Not available<p>
				<input type="text"  id="check_pass" style="display:none;" value="비밀번호를 입력해주세요." >
				<p id="pw_chk" style="position:absolute;font-size:12px;color:#07a2e8;bottom:-17px">Passwords must be at least 6 characters. <br></p>
				<input type="hidden" id="pw_chk_value" name="pw_chk_value" value="">
				<p id="check_caps_lock" class="login_error_text" style="display:none;top: 38px;left:70px;z-index:9"><img src="../resource/images/DentOne-Aligner-Caps Lock.png"></p>
			</div>
		</div>
		<div class="register_con">
			<p class="registeritem_title">Re-enter password *</p>
			<div style="position:relative;">
				<input type="password" name="user_pw_ch" id="user_pw_ch" style="width:100%" onkeypress="checkCapsLock1(event)" required oninvalid="this.setCustomValidity('Please enter password.')" oninput="setCustomValidity('')"  placeholder="Re-enter password" value="">
				<p  id="_pass_false" style="display:none;position:absolute;font-size:12px;color:red;bottom:-17px" >Passwords do not match.</p>
				<p  id="_pass_true" style="display:none;position:absolute;font-size:12px;color:#07a2e8;bottom:-17px" >Password matches.</p>
				<input type="hidden" id="pw_chk_" name="pw_chk_" value="">
				<p id="check_caps_lock1" class="login_error_text" style="display:none;top: 38px;left:70px;z-index:9"><img src="../resource/images/DentOne-Aligner-Caps Lock.png"></p>
			</div>
		</div>
		<div class="register_con">
			<p class="registeritem_title">Phone</p>
			<input type="text" name="user_tel"  id="user_tel" placeholder="Number" value=""  style="">
		</div>

		<div class="register_button">
		<a class="back_button" href="javascript:history.back();" class="find_login" style="">Back</a>
		<input class="confirm_button" type="submit" value="Join" class="find_password">
	</div>
	</div>
	

</div>



<!--<div style="width:100%;margin-top:80px">
	<div class="register_agree">
		<table class="agree_table">
		<colgroup>
			<col width="60px">
			<col width="auto">
			<col width="140px">
		</colgroup>
					<thead>
						<tr style="height:61px">
							<td align="center"><input type="checkbox" name="agreement" class="ch_box_agreement" id="all_selec"></td>
							<td>Accept All<span style="color:red;font-size:15px;margin-left:10px">*if you accept all, also to the following Marketing Policy (Optional)</span></td>
							<td></td>
						</tr>
					</thead>
					<tbody id="brk_list_tbody">
						<tr class="cellcolor" style="height:61px">
							<td align="center"><input type="checkbox" name="agreement" class="ch_box_agreement" id="agreement"></td>
							<td>Accept the terms and conditions</td>
						</tr>
						<tr class="cellcolor" style="height:61px">
							<td align="center"><input type="checkbox" name="agreement" class="ch_box_agreement" id="privacy"></td>
							<td>l've read and accept the privacy policy</td>
						</tr>
					</tbody>
					</table>
	</div>
</div>-->
</div>

</form>
</div>
</div>
</div>

<script>


//아이디 정규식 체크
$(document).ready(function(){

//비밀번호 정규식 체크 (보류)
$('#member_pass').keyup(function(){
$.ajax({
url: '../viewmodels/checkUserPw.php',
type: 'POST',
data: {'member_pass':$('#member_pass').val()},
dataType: 'html',
success: function(data){
if(data == "true"){
$("#pw_chk").css("display","none");
$("#pw_chk_value").val('true');

$("#pw_ch_true").css("display","");
$("#pw_ch_false").css("display","none");
}else if(data == "false"){
$("#pw_chk").css("display","");

$("#pw_ch_true").css("display","none");
$("#pw_ch_false").css("display","");
$("#pw_chk_value").val('');
}

}
});
});


//############ User password check
$('#user_pw_ch').keyup(function(){
var pass1 = $("#user_pw").val();
var pass2 = $("#user_pw_ch").val();
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

//############ Agreement check box controll
$('.ch_box_agreement').click(function(e){
//alert(e.target.id);
if (e.target.id == "all_selec" ) {
if ($('#'+e.target.id).is(':checked')) {
$('.ch_box_agreement').prop("checked", true);
}else{
$('.ch_box_agreement').prop("checked", false);
}

}else{

$('#all_selec').prop("checked", false);
}
});



</script>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
