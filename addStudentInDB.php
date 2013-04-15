<?php
include("dbConnection.php");
session_start();
$course_id = $_GET['courseid'];
$faculty_id = $_GET['facultyid'];
$user_id = $_GET['userid'];
$semester = CURRENT_SEM;
$sql = "INSERT into student_courses(user_id, faculty_id, course_id, semester) values(".$user_id.",".$faculty_id.", '".$course_id."', '".$semester."')";
//die($sql);
$result = mysql_query($sql);

if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
    header ("Location: studentsEnrolled.php?facultyid=".$faculty_id."&courseid=".$course_id);
}

?>