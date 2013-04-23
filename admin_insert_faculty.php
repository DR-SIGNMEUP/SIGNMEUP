<?php
include("dbConnection.php");
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {

        $firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$altEmail = $_POST['altEmail'];
		$address = $_POST['address'];
		$courseID = $_POST['subject'];
		$location = $_POST['location'];
		$hours = $_POST['hours'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		
		$sql = "INSERT INTO user_info (user_type,first_name,middle_name,last_name,user_email,alternate_email,address,phone_no,password) VALUES
		 ('professor','".$firstname."','".$middlename."','".$lastname."','".$email."','".$altEmail."','".$address."','".$phone."','".$password."')";
        //echo $sql;
        $result = mysql_query($sql);
        $id =    mysql_insert_id();
    //echo "My sql insert id: ".$id;
    //$last_insert_id =
    //die($id);
   // die();

        if(!$result){
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        else{
			if($id){
				$sql3 = "SELECT * FROM course_info WHERE course_id='".$courseID."'";

				$result3 = mysql_query($sql3);
				$row3 = mysql_fetch_assoc($result3);
				$courseName = $row3['course_name'];
				echo "SQL course name: ".$courseName;
				$sql2 = "INSERT INTO professor_info (user_id,office_location,office_hours,subject,course_id) VALUES
					(".$id.",'".$location."','".$hours."','".$courseName."','".$courseID."')";

				$res = mysql_query($sql2);
				if(!$res){
					echo 'Could not run query: ' . mysql_error();
					exit;
				} else{
					
					header ("Location: admin.php");
				}
				
            }
        }
}
else{
    die("Post Parameters not set");
}

?>