<?php

if(isset($_POST['studentID']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
    include("dbConnection.php");

        $studentID = $_POST['studentID'];
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
		
		$sql = "INSERT INTO user_info (user_id,user_type,first_name,middle_name,last_name,user_email,alternate_email,address,phone_no,password) VALUES
		 (".$studentID.",'student','".$firstname."','".$middlename."','".$lastname."','".$email."','".$altEmail."','".$address."','".$phone."','".$password."')";

        echo $sql;
        $result = mysql_query($sql);

        if(!$result){
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        else{
			if(mysql_insert_id() == $studentID) {
				$sql2 = "INSERT INTO student_info (user_id,degree,major,gpa,credits_earned,credits_required_for_degree) VALUES
					(".$studentID.",'".$degree."','".$major."','0','0','27')";
				echo $sql2;
				$res = mysql_query($sql2);
				if(!$res){
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
        }
			header ("Location: welcome.php?msg=err");
        }
}
else{
    die("Post Parameters not set");
}

?>