<? 
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/head.php');
//ini_set("display_errors","1");
include("../../resources/library/db_connection.php");
if($_GET['idx'] == null || $_GET['idx'] == "" || !isset($_GET['idx'])){
echo "<script> history.go(-1);</script> ";
}else{
$recipient_key = $_GET['idx'];
}
$recipient_info = recipient_info_read($recipient_key);

if($recipient_info[0]['rcp_status'] != 1){
echo "<script> alert('종료된 프로세스 입니다.');history.go(-1);</script> ";
}
//print_r($recipient_info);
?>

  <div class="container" style="flex-direction:column;">
	<div style="display:flex;flex-direction:column;">
		<div style="margin:1em 0;">
			<h2>보내는 사람</h2>
		</div>
		<div style="background-color:#fff;padding:1em">
			<div style="display:flex;flex-direction:row;border-bottom:1px solid #bbb;padding-bottom:1em">
				<p style="width:30%">이름</p>
				<p style="width:70%"><?=$recipient_info[0]['sender_name']?></p>
			</div>
			<div style="display:flex;flex-direction:row;border-bottom:1px solid #bbb;padding:1em 0">
				<p style="width:30%">연락처</p>
				<p style="width:70%"><?=$recipient_info[0]['sender_hp']?></p>
			</div>
			<div style="display:flex;flex-direction:row;padding-top:1em">
				<p style="width:30%">주소</p>
				<p style="width:70%">[<?=$recipient_info[0]['sender_zip_code']?>] <?=$recipient_info[0]['sender_address1']?>, <?=$recipient_info[0]['sender_address2']?></p>
			</div>
		</div>
	</div>
	<div style="display:flex;flex-direction:column;">
		<div style="margin:1em 0">
			<h2>받는 사람</h2>
		</div>
		<div style="background-color:#fff;padding:1em">
			<div style="display:flex;flex-direction:row;border-bottom:1px solid #bbb;padding-bottom:1em">
				<p style="width:30%">이름</p>
				<p style="width:70%"><?=$recipient_info[0]['rcp_name']?></p>
			</div>
			<div style="display:flex;flex-direction:row;border-bottom:1px solid #bbb;padding:1em 0">
				<p style="width:30%">연락처</p>
				<p style="width:70%"><?=$recipient_info[0]['rcp_hp']?></p>
			</div>
			<div style="display:flex;flex-direction:row;padding-top:1em">
				<p style="width:30%">주소</p>
				<p style="width:70%">[<?=$recipient_info[0]['rcp_zip_code']?>] <?=$recipient_info[0]['rcp_address1']?>, <?=$recipient_info[0]['rcp_address2']?></p>
			</div>
		</div>
	</div>
	<div style="display:flex">

	</div>
  </div>
  <div class="content">

  </div>

</div>
		<footer class="footer">
		<form action="modify.php" id="frm_modify_recipient" method="post">
			<input type="hidden" name="idx" value="<?=$recipient_key?>">
			<button class="modify_button">수정</button>
			<button type="button" class="send_button" onclick="UpdateRecipientStatus();">보내기</button>
			</form>
		</footer>

<? 
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/tail.php');
?>
