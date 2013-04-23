<?php
include("dbConnection.php");
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {


       // $studentID = $_POST['studentID'];
        $firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$altEmail = $_POST['altEmail'];
		$address = $_POST['address'];
		$degree = $_POST['degree'];
		$major = $_POST['major'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		
		$sql = "INSERT INTO user_info (user_type,first_name,middle_name,last_name,user_email,alternate_email,address,phone_no,password) VALUES
		 ('student','".$firstname."','".$middlename."','".$lastname."','".$email."','".$altEmail."','".$address."','".$phone."','".$password."')";

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
				$sql2 = "INSERT INTO student_info (user_id,degree,major,gpa,credits_earned,credits_required_for_degree) VALUES
					(".$id.",'".$degree."','".$major."','0','0','27')";
			//	echo $sql2;
				$res = mysql_query($sql2);
				if(!$res){
					echo 'Could not run query: ' . mysql_error();
					exit;
				} else{
					session_start();
					$_SESSION['user_id'] = $id;
					$_SESSION['user_type'] = 'student';
					$_SESSION['first_name'] = $firstname;
					$_SESSION['middle_name'] = $middlename;
					$_SESSION['last_name'] = $lastname;
					$_SESSION['user_email'] = $email;
					$_SESSION['alternate_email'] = $altEmail;
					$_SESSION['address'] = $address;
					$_SESSION['phone_no'] = $phone;
					header ("Location: admin.php");
				}
				
            }
        }
}
else{
    die("Post Parameters not set");
}

?>