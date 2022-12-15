<?
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/resources/library/db_connection.php");
//ini_set("display_errors","1");

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

    $new_db_name = strtolower(generateRandomString(5));
    $duplicate_result = dbname_duplicate_check($new_db_name);

    if($duplicate_result == "nested"){
        while ($duplicate_result == "nested") {
            $new_db_name = strtolower(generateRandomString(5));
            $duplicate_result = dbname_duplicate_check($new_db_name);
        }
    }

	switch ($_POST['type']) {

		case '_raindrop':
				//echo $new_db_name;
                pre_processing($new_db_name);
                make_tables($new_db_name);
                post_process($new_db_name,$_SESSION['user_id']);
                manage_process($new_db_name,$_SESSION['user_id']);
                echo "suc";
			break;
            

		default:
			break;
}







function pre_processing($newdatabase) {

    $servername = "teamkerp.cnfgglq5tqjm.ap-northeast-2.rds.amazonaws.com";
    $username = "teamk";
    $password = "teamk1010";

    // Create connection
    $conn = new mysqli($servername, $username, $password); 
    // Check connection
    if ($conn->connect_error) {  
        die("Connection failed?: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE ".strtolower($newdatabase)." DEFAULT CHARACTER SET utf8;";
    if ($conn->query($sql) === TRUE) {
    if (mysqli_select_db($conn,$newdatabase)) {
    $conn->close();
    }} else {
        echo "Error creating database: " . $conn->error;
    }

} 

//================================================ 레인드롭테이블을 AWS에만든다 =============================================
    function make_tables($newdatabase) { 
  
        $servername = "teamkerp.cnfgglq5tqjm.ap-northeast-2.rds.amazonaws.com";
        $username = "teamk";
        $password = "teamk1010";

        $_mysqli = new mysqli($servername, $username, $password,$newdatabase);
          if ($_mysqli->connect_error) {  
        die("Connection failed?: " . $_mysqli->connect_error);
         }

        $_mysqli->set_charset("utf8");

        $handle = fopen("./make_db_rain.sql", "r");

            if ($handle) {
               $lineno = 0;
                while (($line = fgets($handle)) !== false){
                    $lineno = $lineno +1;
                    if ($_mysqli->query($line)){
                    ob_flush();
                    flush();
                    } //ending of execution-sql line-by-line (if end)
                    else {echo ("Error on LineNo ".$lineno);} //error if else end
                } // line processing end

                fclose($handle);
            }else {
            $output = "File open error:./make_db.sql";
            return $output;
            } //open error handling end

        $_mysqli->close();
        $_mysqli = null;
        ob_flush();
        flush();
    }

//================ LOG_INFO TABLE HANDLING =====================================
    function post_process($newdatabase,$user_id) {  

        $servername = "teamkerp.cnfgglq5tqjm.ap-northeast-2.rds.amazonaws.com";
        $username = "teamk";
        $password = "teamk1010";

        $conn2t = new mysqli($servername, $username, $password,$newdatabase);
        $conn2t->set_charset("utf8");
                 

        $post1 = "insert into log_info (`ID`, `Password`,`Group`, `RepresentID` ) values ('$user_id','1111','Administrator',1)";
        $conn2t->query($post1);
        $conn2t->close();

        }
        
    function manage_process($newdatabase,$user_id) {  

        $servername = "teamkerp.cnfgglq5tqjm.ap-northeast-2.rds.amazonaws.com";
        $username = "teamk";
        $password = "teamk1010";
        $db_name = "manager";

        $conn2t = new mysqli($servername, $username, $password,$db_name);
        $conn2t->set_charset("utf8");

        $now = date('Y-m-d H:i:s',time());
        $experience_period = date('Y-m-d H:i:s',strtotime($now."+1 month +15 days"));

        $post1 = "insert into  tb_license(database_name,due_date,enable,user_id,type)VALUES('".$newdatabase."','".$experience_period."','Y', '".$user_id."', 'raindrop');";
        $conn2t->query($post1);
        $conn2t->close();

        }


?>