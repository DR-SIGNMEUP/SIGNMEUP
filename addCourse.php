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
	$sql = "SELECT * FROM user_info WHERE user_email='".$profMail."'";
	//$sql = "SELECT * FROM user_info WHERE user_email='bforman@usc.edu'";
	$result = mysql_query($sql);
	
	if(!$result){
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		$row = mysql_fetch_assoc($result);
		$faculty_id = $row['user_id'];
		$sql2 = "INSERT into student_courses(user_id, faculty_id, course_id, semester, grade_type) VALUES(".$user_id.",".$faculty_id.", '".$course_id."', '".$semester."', 'letter grade')";

		$result2 = mysql_query($sql2);
		if(!$result2){
			echo 'Could not run query: ' . mysql_error();
			exit;
		}
		else
		{
			header ("Location: courseRegistration.php");
		}
	}
}

?>