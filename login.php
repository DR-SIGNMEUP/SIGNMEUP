<?php

if(isset($_POST['emailid']) && isset($_POST['password'])) {
    include("dbConnection.php");

        $email = $_POST['emailid'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user_info WHERE user_email = '".$email."' AND password = '".$password."'";
        echo $sql;
        $result = mysql_query($sql);
        $num_rows = mysql_num_rows($result);

        if(!$result){
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        else{
            if($num_rows > 0){
                $row = mysql_fetch_assoc($result);
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_type'] = $row['user_type'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['middle_name'] = $row['middle_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['alternate_email'] = $row['alternate_email'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['phone_no'] = $row['phone_no'];

                header ("Location: welcome.php");
            }
            else{
                header ("Location: index.php?msg=err");
            }


        }

}
else{
    die("Post Parameters not set");
}


?>