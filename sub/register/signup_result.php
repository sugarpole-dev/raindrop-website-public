<?php
$menu_title="About";
$sub_title="Company";
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/sub_head.php');

include($_SERVER["DOCUMENT_ROOT"]."/public/sub/register/ajax.action.signup.php");

?>
<!-- 가입 성공 -->
<?if($result[0] == 0){ ?>

<div class="register_content">
	<div class="register_container">
		<div class="result_con">
			<h3>Membership registration has been completed.</h3>
			<p>Press the Ok button to go to the login page.</p>
			<div class="result_button">
				<button value="" onclick="location.href='../membership.php'">Ok</button>
			</div>
		</div>
	</div>
</div>

<?}else{ ?>
<!-- 가입 실패 -->
<div class="register_content">
	<div class="register_container">
			<h3>failed</h3>
			<p>Press the Ok button to go to the login page.</p>
			<div class="result_button">
				<button value="" onclick="location.href='../membership.php'">Ok</button>
			</div>
	</div>
</div>

<?}?>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
