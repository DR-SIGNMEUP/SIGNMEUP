<?php
include("dbConnection.php");
session_start();
$id = $_SESSION['user_id'];
if(!empty($_GET))
{
	extract($_GET);
	//echo $Result;
	$sql = "INSERT INTO student_courses (user_id,course_id) VALUES
			 ('".$id."','".$Result."')";
	$result = mysql_query($sql);

	if(!$result){
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
}
$sql = "SELECT * FROM student_info WHERE user_id = '".$id."'";
$result = mysql_query($sql);

if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
    $row = mysql_fetch_assoc($result);
    $_SESSION['gpa'] = $row['gpa'];
    $_SESSION['degree'] = $row['degree'];
    $_SESSION['major'] = $row['major'];
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

    <div class="middleContainer" >
        <div class="middle student_info">
            <div class="text">
			<span style="display:inline-block;margin-right:500px;">
                <?php
                echo "<h4>Welcome ".$_SESSION['first_name']." ".$_SESSION['last_name'] ."! </h4>";
                ?>
			</span>
				<button style="display:inline-block;font-weight:bold;cursor:pointer" onclick = "printContent('printableInfo','main2.css')"/>Print</button>
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
                    <div class="entry">
                        <div class="key">Degree: </div>
                        <div class="value"><?php echo $_SESSION['degree']; ?></div>
                    </div>
                    <div class="entry">
                        <div class="key">Major: </div>
                        <div class="value"><?php echo $_SESSION['major']; ?></div>
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
                        <div class="key">Student ID: </div>
                        <div class="value"><?php echo $_SESSION['user_id']?></div>
                    </div>
                    <div class="entry">
                        <div class="key">GPA: </div>
                        <div class="value"><?php echo $_SESSION['gpa']; ?></div>
                    </div>
                </div>
				</div>
				
                    <div class="edit">
                        <a href="editInfo.php">To change personal information please click here</a>
                    </div>
                </div>
				

        </div>
        <div class="tabbedPages">
            <div class="text">
                <h4>Useful Links</h4>
            </div>

            <div class="tabs">
                <ul id="menu">
                    <li><a class="selected" href="grades.php">View Grades</a></li>
                    <li><a href="admin_faculty.php">View Faculty Information</a></li>
                    <li><a href="courseRequirements.php">Course Requirements</a></li>
                    <li><a href="courseRegistration.php">Course Registration</a></li>
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
