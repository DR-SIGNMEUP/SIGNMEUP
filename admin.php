<?php
include("dbConnection.php");
session_start();

if(!empty($_GET))
{
	extract($_GET);
	echo $Result;
	$sql = "DELETE FROM user_info where user_id=
			 (".$Result.")";
	$result = mysql_query($sql);

	if(!$result){
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
}
$sql = "SELECT * FROM user_info ui WHERE ui.user_id = 1";
$result = mysql_query($sql);

if(!$result){
    echo 'Could not run query: ' . mysql_error();
    exit;
}
else{
    $row = mysql_fetch_assoc($result);
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['user_email'] = $row['user_email'];
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['phone_no'] = $row['phone_no'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['user_type'] = $row['user_type'];
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

    <div class="middleContainer" id="adminMiddleContainer" >
        <div class="middle student_info">
            <div class="text" id="adminText">
				<span style="display:inline-block;margin-right:650px;">
                <?php
                echo "<h4>Welcome Admin! </h4>";
                ?>
				</span>
				<button style="display:inline-block;font-weight:bold;cursor:pointer" onclick = "printContent('printableInfo','main2.css')"/>Print</button>
				<div id = "printableInfo">
                <div class="subHeading">Personal Information</div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Name: </div>
                        <div class="value"><?php echo $_SESSION['first_name']?></div>
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
             
				</div>
                    
                </div>
        </div>

        <div class="tabbedPages" id="adminTabbedPages">
            <div class="text">
                <h4>Useful Links</h4>
            </div>

            <div class="tabs">
                <ul id="menu">
                    <li><a class="selected" href="admin_students.php">Student Information</a></li>
                    <li><a href="faculty_info.php">Faculty Information</a></li>
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