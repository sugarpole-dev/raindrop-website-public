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

<?for ($i=0; $i < count($user_dbinfo_arr); $i++) { 
    switch ($user_dbinfo_arr[$i]['type']) {
        case 'raindrop':
            if($timenow > strtotime($user_dbinfo_arr[$i]['due_date'])) {
                $raindrop_license_st = "expiry";
            }else{
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
} ?>
<div style="background-color:#f5f5f5;padding-bottom:60px">
 <div class="container">
 	<div class="forest_title" style="margin-top:60px">
		<h2>Sugarpole license center</h2>
		<p>Join Sugapole in developing global software.</p>
	</div>
	
	 <div class="license_page">
		<div class="license_box">
		<p style="font-size:1.6em;font-weight:bold">RainDrop License</p>
		<p class="con" style="font-size:1.2em">Free 1 Month</p>
		<?if ($raindrop_license_st == "used") { ?>
		<button class="license_button" id="btn_code_check"  style="background-color:#f9a828;color:#fff" onclick="alert('already in use.');"  style="">Used</button>
		<?}else if($raindrop_license_st == "expiry"){?>
		<button class="license_button" id="btn_code_check" onclick="alert('expiry.');"  style="">expiry</button>
		<?}else { ?>
		<button class="license_button" id="btn_code_check"  value="" style="background-color:#008be4;color:#fff" onClick="license_popup_open('_raindrop');" >Free start</button>
		<?}?>
		</div>

		<div class="license_box">
		<p style="font-size:1.6em;font-weight:bold">DR Viewer License</p>
		<p class="con">
		<img src="/public/img/wait.png">
		</p>
		<button class="license_button" id="btn_code_check">closed</button>
		</div>

		<div class="license_box">
		<p style="font-size:1.6em;font-weight:bold">3D Viewer License</p>
		<p class="con">
		<img src="/public/img/wait.png">
		</p>
		<button class="license_button" id="btn_code_check">closed</button>
		</div>

		<div class="license_box">
		<p style="font-size:1.6em;font-weight:bold">Rainforest License</p>
		<p class="con">
		<img src="/public/img/wait.png">
		</p>
		<button class="license_button" id="btn_code_check">closed</button>
		</div>
	</div>
	<button  style="margin-top:1em;color:#fff;background-color:#488ecc;float:right;width:20%"  onclick='userLogout();'>Log out</button>
</div>
</div>










<script>

            function license_popup_open(license_target){

                    var targetUrl = "";
                    switch (license_target) {
                        case '_raindrop':
                            targetUrl = "raindrop_license.php"
                            break;
                        case '_drviewer':
                            targetUrl = "drviewer_license.php"
                            break;
                        case '_3d_viewer':
                            targetUrl = "3d_viewer_license.php"
                            break;
                        case '_rainforest':
                            targetUrl = "rainforest_license.php"
                            break;

                    }

                    window.open(
                        "./membership/"+targetUrl,
                        'menuPopup',
                        'height=' + 400 + ',width=' + 600
                    );
                }



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