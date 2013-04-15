<?php
include("dbConnection.php");
session_start();
$id = $_SESSION['user_id'];

$sql = "SELECT * FROM professor_info pi, course_info ci WHERE pi.user_id = '".$id."' and pi.course_id = ci.course_id";
$result = mysql_query($sql);

if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
    $row = mysql_fetch_assoc($result);
    $_SESSION['office_hours'] = $row['office_hours'];
    $_SESSION['office_location'] = $row['office_location'];
    $_SESSION['subject'] = $row['subject'];
    $_SESSION['course_id'] = $courseid = $row['course_id'];
    $_SESSION['class_location'] = $row['class_location'];
    $_SESSION['class_hours'] = $row['class_timings'];
}

?>


<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
	<script src="print.js"></script>
</head>

<body>
<div id="containerNew" >
    <div class="header">
        <?php include("header.php"); ?>
    </div>

    <div class="middleContainer" id="facultyMiddleContainer" >
        <div class="middle student_info">
            <div class="text" id="facultyText">
                <?php
                echo "<h4>Welcome Faculty Member - ".$_SESSION['first_name']." ".$_SESSION['last_name'] ."!  </h4>";
                ?>
				<div id = "printableInfo">
                <div class="subHeading">Personal Information</div>
                <div class="row">
                    <div class="entry">
                        <div class="key">First Name: </div>
                        <div class="value"><?php echo $_SESSION['first_name']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Last Name: </div>
                        <div class="value"><?php echo $_SESSION['last_name']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry" id="addressEntry">
                        <div class="key">Address: </div>
                        <div class="value"><?php echo $_SESSION['address']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Phone: </div>
                        <div class="value"><?php echo $_SESSION['phone_no']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Email: </div>
                        <div class="value"><?php echo $_SESSION['user_email']?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Faculty ID: </div>
                        <div class="value"><?php echo $_SESSION['user_id']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Teaching Course: </div>
                        <div class="value"><?php echo $_SESSION['subject']." (".$_SESSION['course_id'].")"; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Office Location: </div>
                        <div class="value"><?php echo $_SESSION['office_location']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Office Hours: </div>
                        <div class="value"><?php echo $_SESSION['office_hours']; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Class Location: </div>
                        <div class="value"><?php echo $_SESSION['class_location']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Class Hours: </div>
                        <div class="value"><?php echo $_SESSION['class_hours']; ?></div>
                    </div>
                </div>
				</div>
				<a href="index.php"><input type="image" style="float:left; height:30px" src="images/print.png" onclick = "printContent('printableInfo','main2.css')"/></a>
                    <div class="edit">
                        <a href="editInfo.php">To change personal information please click here</a>
                    </div>
                </div>
        </div>

        <div class="tabbedPages" id="facultyTabbedPages">
            <div class="text">
                <h4>Useful Links</h4>
            </div>

            <div class="tabs">
                <ul id="menu">
                    <li><a class="selected" href="studentsEnrolled.php?facultyid=<?php echo $id;?>&courseid=<?php echo $courseid; ?>">View Students Enrolled</a></li>
                    <li><a href="addStudent.php?facultyid=<?php echo $id;?>&courseid=<?php echo $courseid; ?>">Add Student</a></li>
                    <li><a href="facultyInfo.php">View Faculty Information</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer" id="newFooter">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>

    </div>



</body>


</html>