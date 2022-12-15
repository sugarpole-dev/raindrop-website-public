<?
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/resources/library/db_connection.php");
//ini_set("display_errors","1");

	switch ($_POST['type']) {

		case 'name':

			break;
        case 'password':
				$duplicate_result =	user_id_duplicate_check($_POST['user_id']);
				if($duplicate_result == "available"){
				echo $duplicate_result;
				exit;
				}
				echo $result;
			break;
		
		case 'verification':
				if($_SESSION['code'] == $_POST['code']){
                   $_SESSION["f_user_mail"] = $_SESSION["user_mail"];
                    unset($_SESSION['code']);
                    unset($_SESSION['user_mail']);
                    echo "true";
                }else{
                    echo "false";
                }   
			break;

			case 'change_password':

				if(isset($_SESSION['f_user_mail'])){
				$result_ = user_pass_change($_SESSION["f_user_mail"], $_POST['user_pass']);
					unset($_SESSION['f_user_mail']);
					echo $result_;
			}else{
				echo "veri_failed";
			}
			break;


			

		default:
			break;
}









?>