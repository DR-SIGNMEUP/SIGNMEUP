<?php
session_start();
include("dbConnection.php");

if(isset($_POST)){
    $id = $_SESSION['user_id'];
    $user_type = $_SESSION['user_type'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['middlename'];
    $email = $_POST['email'];
    $altEmail = $_POST['altEmail'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confirmPass = $_POST['password'];
    $address = $_POST['address'];

    $sql = "update user_info set first_name='$fname', middle_name='$mname', last_name = '$lname', user_email = '$email', alternate_email = '$altEmail',
    phone_no = '$phone', address = '$address', password='$pass' where user_id = '$id'";
    //echo $sql;

    $result = mysql_query($sql);
    if(!$result){
        echo 'Could not run query: ' . mysql_error();
        exit;
    }
    else{

        $_SESSION['first_name'] = $fname;
        $_SESSION['middle_name'] = $mname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['user_email'] = $email;
        $_SESSION['alternate_email'] = $altEmail;
        $_SESSION['address'] = $address;
        $_SESSION['phone_no'] = $phone;
        $_SESSION['password'] = $pass;

        if($user_type === "admin"){
            header ("Location: admin.php");
        }
        else if($user_type === "professor"){
            header ("Location: welcomeFaculty.php");
        }
        else{
            header ("Location: welcome.php");
        }
    }
}
else{
    die("POST parameters not set");
}

?>