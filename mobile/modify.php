<? 
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/head.php');
include("../../resources/library/db_connection.php");

//ini_set("display_errors","1");

if($_POST['idx'] == null || $_POST['idx'] == "" || !isset($_POST['idx'])){
echo "<script> history.go(-1);</script> ";
}else{
$recipient_key = $_POST['idx'];
}
$recipient_info = recipient_info_read($recipient_key);
//print_r($recipient_info);
?>

  <div class="container" style="flex-direction:column;">
	<form id="frm_modify_recipient" style="display: flex; flex-direction: column;">
			<input type="hidden" name="txt_recipient_key" value="<?=$recipient_key?>">
			<div>
				<div style="margin:1em 0;">
					<h2>보내는 사람</h2>
				</div>
				<div style="display:flex;flex-direction:column;border-bottom:1px solid #bbb;padding-bottom:1em">
						<input class="mb10" id="txt_sender_name" name="txt_sender_name" type="text" value="<?=$recipient_info[0]["sender_name"]?>" placeholder="보내는 사람(회사명)">
						<!-- <input class="mb10"  id="txt_product_name" name="txt_product_name" type="text" value="<?=$buyer_info[0]["product_name"]?>"  placeholder="상품명"> -->
						<input class="mb10" id="txt_sender_tp_number" name="txt_sender_tp_number" type="text" value="<?=$recipient_info[0]["sender_hp"]?>" placeholder="연락처">
						<div style="display:flex;">
						<input class="mb10" id="txt_sender_address" name="txt_sender_address" type="text" value="<?=$recipient_info[0]["sender_address1"]?>" readonly onclick="DaumSearchAddress('sender');" placeholder="주소" style="width:auto;flex:auto;margin-right:10px">
						<button class="mb10" type="button" onclick="DaumSearchAddress('sender')">주소검색</button>
						</div>
						<input class="mb10" id="txt_sender_zip_code" name="txt_sender_zip_code" type="text" value="<?=$recipient_info[0]["sender_zip_code"]?>" readonly placeholder="우편번호">
						<input class="mb10" id="txt_sender_address_detail" name="txt_sender_address_detail" type="text" value="<?=$recipient_info[0]["sender_address2"]?>" placeholder="상세 주소">
				</div>
			</div>
			<div>
				<div style="margin:1em 0">
					<h2>받는 사람</h2>
				</div>
				<div style="display:flex;flex-direction:column;border-bottom:1px solid #bbb;padding-bottom:1em">
						<input class="mb10" name="txt_recipient_name" type="text" value="<?=$recipient_info[0]["rcp_name"]?>" placeholder="받는 사람">
						<input class="mb10" name="txt_recipient_tp_number" type="text" value="<?=$recipient_info[0]["rcp_hp"]?>" placeholder="연락처">
						<div style="display:flex;">
						<input class="mb10" id="txt_recipient_address" name="txt_recipient_address" type="text" value="<?=$recipient_info[0]["rcp_address1"]?>" readonly onclick="DaumSearchAddress('recipient')" placeholder="주소" style="width:auto;flex:auto;margin-right:10px">
						<button class="mb10" type="button" onclick="DaumSearchAddress('recipient')">주소검색</button>
						</div>
						<input class="mb10" id="txt_recipient_zip_code" name="txt_recipient_zip_code" type="text" value="<?=$recipient_info[0]["rcp_zip_code"]?>" readonly placeholder="우편번호">
						<input class="mb10" id="txt_recipient_address_detail" name="txt_recipient_address_detail" type="text" value="<?=$recipient_info[0]["rcp_address2"]?>" placeholder="상세 주소">
				</div>
			</div>
		</form>
  </div>
</div>
	<footer class="footer">
			<button class="send_button" style="width:100%" onclick="UpdateRecipient();">보내기</button>
	</footer>


<? 
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/tail.php');
?>
