<?php
include("dbConnection.php");
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main2.css">
<script src="jquery-1.7.1.min.js"></script>
<script src = "toggle.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>

<script type="text/javascript">
var map = new Object(); 
map["A"] = "4";
map["A-"] = "3.7";
map["B+"] = "3.3";
map["B"] = "3";
map["B-"] = "2.7";
map["C+"] = "2.3";
map["C"] = "2";
map["D"] = "0";
function getGrade(k) {
    return map[k];
}

</script>
<style type="text/css"> 
.panel,.flip
{
padding:5px;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
.panel
{
padding-top:10px;
display:block;
}
table.tablename td 
{
font-size:15px;
}

</style>
</head>
<body>
<div id="containerNew">

    <div class="header">
        <?php include("header.php"); ?>
    </div>

	<div class="middleContainer">
		<div class="middle">
		<h1>Grades Information:</h1>
		<?php

			
			$sql = "SELECT * 
					FROM student_info, student_courses, course_info
					WHERE student_info.user_id = student_courses.user_id
					AND student_courses.course_id = course_info.course_id 
					AND student_info.user_id=".$_SESSION['user_id']." 
					AND student_courses.grade IS NOT NULL AND student_courses.semester = 'Fall 2012'";
			$result = mysql_query($sql);
			if(!$result){
				echo 'Could not run query: ' . mysql_error();
				exit;
			}else{ 
				echo "<div>".$_SESSION['first_name']." ".$_SESSION['last_name']."";
				echo "</div>";
				$cumulativeGrade = 0;
				$totalCredits = 0;
				$gpa = 0;
				while ( $row = mysql_fetch_assoc($result) ){
					echo "<div class='panel'>";
					echo "<table class='tablename' border='0'>";
					echo "<tr>"; 
					echo "<td>Course ID: ".$row['course_id']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>Course Name: ".$row['course_name']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>Number of Credits ".$row['no_of_credits']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>Grade: ".$row['grade']."</td>";
					echo "</tr>";
					echo "</table>";
					echo "</div>";
					//$grade = getGrade($row['grade']);
					if($row['grade']=='A')
						$grade = 4*$row['no_of_credits'];
					else if($row['grade']=='A-')
						$grade = 3.7*$row['no_of_credits'];
					else if($row['grade']=='B+')
						$grade = 3.3*$row['no_of_credits'];
					else if($row['grade']=='B')
						$grade = 3*$row['no_of_credits'];
					else if($row['grade']=='B-')
						$grade = 2.7*$row['no_of_credits'];	
					else if($row['grade']=='C+')
						$grade = 2.3*$row['no_of_credits'];
					else if($row['grade']=='C')
						$grade = 2*$row['no_of_credits'];
					else
						$grade = 0*$row['no_of_credits'];
					$cumulativeGrade+=$grade; 
					$totalCredits+=$row['no_of_credits'];
				}	
				$gpa = $cumulativeGrade/$totalCredits;
				$roundedGpa = sprintf ("%.2f", $gpa);
				
				$sql = "update student_info set gpa='$roundedGpa' where user_id = ".$_SESSION['user_id'];
    //echo $sql;

				$result = mysql_query($sql);
				if(!$result){
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
				else{
					echo "<table>";
					echo "<tr>"; 
					echo "<td>GPA : ".$roundedGpa."</td>";
					echo "</tr>";
					echo "</table>";
				}
				
			}
		?>
	</div>
	</div>

    <div class="footer">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>
</div>	



</body>
</html>