<?
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/resources/library/db_connection.php");
//ini_set("display_errors","1");

	switch ($_POST['type']) {

		case 'login':
				$result = user_login($_POST['user_id'], $_POST['user_pw']);
						if($result[0] == "suc"){
						$_SESSION['user_key'] = $result[1];
						$_SESSION['user_id'] = $_POST['user_id'];
						}
                        unset($_SESSION['v_user_mail']);
				echo $result[0];
			break;
        case 'logout':
                unset($_SESSION['user_key']);
                unset($_SESSION['user_id']);
				echo "suc";
			break;

		default:
			break;
}









?>