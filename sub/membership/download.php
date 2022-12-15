<?
include($_SERVER["DOCUMENT_ROOT"]."/resources/library/db_connection.php");

$user_dbinfo_arr = user_dbinfo_read($_SESSION['user_id']);
//print_r($user_dbinfo_arr);
$raindrop_license_st = "not_exist";
$viewer_license_st = "not_exist";
$drviewer_license_st = "not_exist";
$rainforest_license_st = "not_exist";
$timenow = strtotime(date("Y-m-d H:i:s"));

?>

<?for
($i=0; $i < count($user_dbinfo_arr); $i++) {
	switch ($user_dbinfo_arr[$i]['type']) {
		case 'raindrop':
		if($timenow > strtotime($user_dbinfo_arr[$i]['due_date'])) {
			$raindrop_license_st = "expiry";
		}
		else{
			$raindrop_license_st = "used";
		}
		break;
		case '3dviewer':
		# code...
		break;
		case 'drviewer':
		# code...
		break;
		case 'rainforest':
		# code...
		break;


	}
	//echo $raindrop_license_st;
}
?>
<div style="background-color:#f5f5f5;">
	<div class="container">
		<div class="forest_title" style="margin-top:60px">
			<h2>Sugarpole Download center</h2>
			<p>Join Sugapole in developing global software.</p>
		</div>

		<div class="download_page">
			<div class="download_box">
				<p style="font-size:1.6em;font-weight:bold">RainDrop Download</p>
				<div class="download_con">
					<ul>
						<?=$raindrop_cost1?>
					</ul>
					<ul>
						<?=$raindrop_cost2?>
					</ul>
					<ul>
						<?=$raindrop_cost3?>
					</ul>
				</div>
				<div style="display: flex; justify-content: space-between; width: 100%;margin-top:2em">
					<button class="download_button" id="btn_code_check" onclick="window.location='/public/download/Raindrop_Cloud_20220608.exe'" style="background-color:#008be4;color:#fff"><?=$download_cloud?></button>
					<button class="download_button" id="btn_code_check" onclick="window.location='/public/download/Raindrop_Local_20220608.exe'" style="background-color:#e49300;color:#fff"><?=$download_server?></button>
				</div>
				<a style="margin-top:2em;text-decoration:underline !important" href="/public/download/raindrop_setup_manual.docx">Download Setup Manual</a>
			</div>
								<script>

							function userLogout() {

								$.ajax({
								url: 'ajax.action.php',
								type: 'POST',
								data: {
								'type':'logout'
								},
								dataType: 'html',
								success: function (data) {
								// alert(data);
								if (data=="suc")
								{
								location.href = location.href;
								}else{
								alert("false");
								}

								}
								});

							}

							</script>
