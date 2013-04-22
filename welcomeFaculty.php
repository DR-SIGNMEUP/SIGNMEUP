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
   /* $row = mysql_fetch_assoc($result);
    $_SESSION['office_hours'] = $row['office_hours'];
    $_SESSION['office_location'] = $row['office_location'];
    $_SESSION['subject'] = $row['subject'];
    $_SESSION['course_id'] = $courseid = $row['course_id'];
    $_SESSION['class_location'] = $row['class_location'];
    $_SESSION['class_hours'] = $row['class_timings'];
   */

    $i=0;
    $subject = array();
    $courseid = array();
    $class_location = array();
    $class_hours = array();
    while($row = mysql_fetch_array($result))
    {
        $_SESSION['office_hours'] = $row['office_hours'];
        $_SESSION['office_location'] = $row['office_location'];
        $subject[$i] = $row['subject'];
        $courseid[$i] =  $row['course_id'];
        $class_location[$i] = $row['class_location'];
        $class_hours[$i] = $row['class_timings'];
        $i++;
    }

    $_SESSION['subject'] = $subject;
    $_SESSION['course_id'] = $courseid;
    $_SESSION['class_location'] = $class_location;
    $_SESSION['class_hours'] = $class_hours;
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
                        <div class="entry">
                            <div class="key">Address: </div>
                            <div class="value"><?php echo $_SESSION['address']?></div>
                        </div>
                        <div class="entry">
                            <div class="key">Faculty ID: </div>
                            <div class="value"><?php echo $_SESSION['user_id']?></div>
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
                            <div class="key">Office Location: </div>
                            <div class="value"><?php echo $_SESSION['office_location']?></div>
                        </div>
                        <div class="entry">
                            <div class="key">Office Hours: </div>
                            <div class="value"><?php echo $_SESSION['office_hours']; ?></div>
                        </div>
                    </div>


                    <div class="classesThisSem">
                        <?php
                            if(count($subject) == 1){
                                echo "Class taking this semester :";
                            }
                            else{
                                echo "Classes taking this semester :";
                            }
                        ?>

                        <table border="1" style="margin-top: 10px;">
                            <tr><th style="width:100px">Course Id</th><th>Course Name</th><th>Class Location</th><th>Class Hours</th></tr>
                            <?php
                                for($j=0; $j<count($subject); $j++){
                                    echo "<tr style='text-align:center; padding-left : 5px'><td>".$courseid[$j]."</td><td>".$subject[$j]."</td><td>".$class_location[$j]."</td><td>".$class_hours[$j]."</td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                    <br/>

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
                    <li><a class="selected" href="studentsEnrolled.php?facultyid=<?php echo $id;?>">View Students Enrolled</a></li>
                    <li><a href="addStudent.php?facultyid=<?php echo $id;?>">Add Student</a></li>
                    <li><a href="faculty_info.php">View Faculty Information</a></li>
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