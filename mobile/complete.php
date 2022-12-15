<? 
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/head.php');
include("../../resources/library/db_connection.php");

//ini_set("display_errors","1");
/*
if($_GET['idx'] == null || $_GET['idx'] == "" || !isset($_GET['idx'])){
echo "<script> history.go(-1);</script> ";
}else{
$recipient_key = $_GET['idx'];
}
*/
$recipient_info = recipient_info_read($recipient_key);
//print_r($recipient_info);
?>

  <div class="container" style="flex-direction:column;justify-content: center">
	<div style="margin:0 auto;padding-top:12em">
	<img src="/public/img/icon.png"/>
	<h3 style="text-align:center;margin-top:6em">주소 입력이 완료되었습니다.</h3></div>
  </div>
</div>
	<footer class="footer">
			<button class="send_button" style="width:100%" onclick="CheckMobile();">닫기</button>
	</footer>


<? 
include_once($_SERVER["DOCUMENT_ROOT"].'/public/m/inc/tail.php');
?>
