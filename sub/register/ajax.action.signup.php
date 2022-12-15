<?
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/resources/library/db_connection.php");
//ini_set("display_errors","1");

	switch ($_POST['type']) {

		case 'signup':
				$result = user_signup($_POST['user_id'], $_POST['user_pw'], $_POST['user_name'], $_POST['user_tel'], $_POST['user_company_name'], $_POST['user_id']);
						if($result[0] == "suc"){
						$_SESSION['user_key'] = $result[1];
						$_SESSION['user_id'] = $_POST['user_id'];
						}
				echo $result[0];
			break;

        case 'verification':
				if($_SESSION['code'] == $_POST['code']){
                   $_SESSION["v_user_mail"] = $_SESSION["user_mail"];

                    unset($_SESSION['code']);
                    unset($_SESSION['user_mail']);
                    echo "true";
                    
                   
                }else{
                    echo "false";
                }   
				
			break;
			
			case 'check_user_mail':
			$result =	user_id_duplicate_check($_POST['user_id']);
				echo $result;
			break;



			
            

		default:
			break;
}










?>