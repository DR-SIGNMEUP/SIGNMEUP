<?php
include("dbConnection.php");
session_start();
?>

<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>

<body>
<div id="containerNew" >
    <div class="header">
        <?php include("header.php"); ?>
    </div>

    <div class="middleContainer" id="facultyMiddleContainer" >
        <div class="middle student_info">
            <div class="list_of_students">
                <?php
                echo "<h4>Welcome Faculty Member - ".$_SESSION['first_name']." ".$_SESSION['last_name'] ."!  </h4>";
                ?>
                <?php
                $facultyid = $_GET['facultyid'];
                $courseid = $_GET['courseid'] ;
                $sql = "SELECT * from student_courses sc, user_info ui where sc.course_id = '".$courseid."' and sc.faculty_id='".$facultyid."' and sc.semester = '". CURRENT_SEM."' and sc.user_id = ui.user_id order by sc.user_id"  ;
                $result = mysql_query($sql);
                $num_rows = mysql_num_rows($result);

                if(!$result){
                    echo 'Could not run query: ' . mysql_error();
                    exit;
                }
                else{
                    echo "There ";
                    if($num_rows == 1)
                        echo "is ". $num_rows." student" ;
                    else
                       echo "are ".$num_rows." students" ;
                    echo " registered for this class!";

                    echo "<div class='mytable'><div class='myrow mytable_header'><div class='col1'>User ID</div><div class='col2'>Student Name</div><div class='col3'>Remove from class?</div></div> ";
                    while($row = mysql_fetch_array($result))
                    {
                        echo "<div class='myrow' id='".$row['user_id']."'><div class='col1'>".$row['user_id']."</div><div class='col2'>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</div>
                        <div class='col3'><a class='delete' href='deleteStudent.php?facultyid=".$facultyid."&courseid=".$courseid."&semester=".CURRENT_SEM."&userid=".$row['user_id']."'>Delete</a></div>
                        </div>";
                    }
                    echo "</div>";

                }
                ?>
            </div>
        </div>
    </div>

    <div class="footer" id="newFooter">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>

</div>

<script>
    $(document).ready(function(){
        $('.delete').click(function(e){
            var delete_student= confirm("Are you sure you want to remove this student from your class?");
            if(delete_student){
                var  loc = $(this).attr('href');
                window.location.href = loc;
            }
            e.preventDefault();
        })  ;

    });
</script>


</body>