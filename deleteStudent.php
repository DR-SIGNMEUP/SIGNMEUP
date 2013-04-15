<?php
include("dbConnection.php");
session_start();
$course_id = $_GET['courseid'];
$faculty_id = $_GET['facultyid'];
$user_id = $_GET['userid'];
$semester = $_GET['semester'];

$sql = "DELETE from student_courses where faculty_id='".$faculty_id."' and user_id='".$user_id."' and course_id='".$course_id."' and semester='".$semester."'";
$result = mysql_query($sql);
//echo $sql;
if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
   header ("Location: studentsEnrolled.php?facultyid=".$faculty_id."&courseid=".$course_id);
}

?>