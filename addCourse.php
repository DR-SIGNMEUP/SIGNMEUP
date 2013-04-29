<?php
include("dbConnection.php");
session_start();

$user_id = $_SESSION['user_id'];
$semester = CURRENT_SEM;

if(!empty($_GET))
{
	extract($_GET);
	$profMail = $_GET['profMail'];
	$course_id = $_GET['courseID'];
	$sql = "SELECT * FROM user_info WHERE user_email=
			 '(".$profMail.")'";
	$result = mysql_query($sql);
	
	if(!$result){
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		$row = mysql_fetch_assoc($result);
		$faculty_id = $row['user_id'];
		$sql2 = "INSERT into student_courses(user_id, faculty_id, course_id, semester,grade_type) values(".$user_id.",".$faculty_id.", '".$course_id."', '".$semester."','letter grade')";
		$result2 = mysql_query($sql2);
		if(!$result){
			echo 'Could not run query: ' . mysql_error();
			exit;
		}
		else
		{
			header ("Location: courseRegistration.php");
		}
	}
}

/*$sql = "INSERT into student_courses(user_id, faculty_id, course_id, semester) values(".$user_id.",".$faculty_id.", '".$course_id."', '".$semester."')";

$result = mysql_query($sql);

if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
    header ("Location: welcome.php");
}
*/
?>