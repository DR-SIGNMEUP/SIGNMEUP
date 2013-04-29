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
    <script>
        function add(cid,pid)
        {
            var ddd=cid;			
			var eee=pid;
			var conf= confirm("Are you sure you want to add this course?");
			if(conf){
			   window.location.href="addCourse.php?courseID="+ddd+"&profMail="+eee;
			}
		    e.preventDefault();
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
            display:none;
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
        <?php
        $course_type = $_GET['course'];
        switch($course_type){
            case 'CS' : echo "<h1>Computer Science (CS) </h1>"  ;     break;
            case 'EE' : echo "<h1>Electrical Engineering (EE) </h1>"  ;     break;
            case 'BME' : echo "<h1>Biomedical Engineering (BME) </h1>"  ;         break;
        }

        $sql = "SELECT * from user_info ui, course_info ci, professor_info pi where ci.course_id like '".$course_type."%' and ci.semester = '". CURRENT_SEM."' and ci.course_id = pi.course_id and pi.user_id = ui.user_id"  ;
        $result = mysql_query($sql);
        if(!$result){
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        else{
            $info=array();
            while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
                array_push($info,$row);
            }

            for($j=0; $j< count($info); $j++) {
				$course_id = $info[$j]['course_id'];
				$prof_email = $info[$j]["user_email"];
                echo '<div class="flip">'.$course_id.': '. $info[$j]['course_name'];
                echo "<a href='#'><input type='image' id='myimage' style='float:right; height:25px' src='images/add.png' onClick='add(\"".$course_id."\",\"".$prof_email."\")'/></a>";
				echo '</div>';
                echo '<div class="panel">  <table class="tablename" border="1"> <tr> <th>CourseID</th> <th>Semester</th> <th>Time</th>';
                echo '<th>Location</th> <th>Credits</th> <th>Professor</th> <th>Office Hours</th> <th>Email Address</th> <th>Phone No.</th> </tr>';
                echo '<tr> <td>'.$info[$j]["course_id"].'</td> <td>'.$info[$j]["semester"].'</td> <td>'.$info[$j]["class_timings"].'</td>';
                echo '<td>'.$info[$j]["class_location"].'</td> <td>'.$info[$j]["no_of_credits"].'</td> <td>'.$info[$j]["first_name"].' '.$info[$j]["last_name"].'</td>';
                echo '<td>'.$info[$j]["office_location"].' '.$info[$j]["office_hours"].'</td> <td>'.$info[$j]["user_email"].'</td> <td>'.$info[$j]["phone_no"].'</td></tr>';
                echo '</table></div>';
	
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
