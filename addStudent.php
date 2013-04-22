<?php
include("dbConnection.php");
session_start();
$facultyid = $_GET['facultyid'];
?>

<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>

<body>
<div id="containerNew" >
    <div class="header">
        <?php include("header.php");
        $subject = $_SESSION['subject'];
        $course_id = $_SESSION['course_id'];
        ?>

    </div>

    <div class="middleContainer" id="facultyMiddleContainer2" >
        <div class="middle student_info add_student_wrapper">
            <div class="add_student">
                <?php
                echo "<h4>Welcome Faculty Member - ".$_SESSION['first_name']." ".$_SESSION['last_name'] ."!  </h4>";
                ?>
                <h5>Please fill in the information below: </h5>
                <form action="addStudentInDB.php" method="GET">
                    <label> Class :</label>
                    <select name="courseid">
                        <?php
                           for($j=0; $j<count($_SESSION['subject']); $j++){
                                echo "<option value='".$course_id[$j]."'>".$subject[$j]." (".$course_id[$j].")</option>"  ;
                           }
                        ?>
                    </select>
                    <br/><br/>
                    <label> UserID :</label>
                    <input type="text" name="userid" id="userid" placeholder="User ID (Numeric value)">
                    <br/><br/>
                    <input type="submit" name="submit" value = "Submit" id="submit">
                    <input type="hidden" name="facultyid" value = "<?php echo $facultyid;?>">
                </form>
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
        $('form').submit(function(e){
             var userid = $('#userid').val();
             if(userid == ""){
                 alert("Field can not be left blank. \nPlease enter a user id which you want to add to your class");
                 e.preventDefault();
             }
             else{
                 var useridRegex =  /^\d+$/;
                 if(!useridRegex.test(userid)){
                     alert("Please enter a valid numeric user id.");
                     e.preventDefault();
                 }
                 else{
                     var add_student= confirm("Are you sure you want to add this student to your class?");
                     if(!add_student){
                         e.preventDefault();
                     }
                     else{
                         window.location.href = loc;
                     }
                 }
             }
        });
    });
</script>

</body>