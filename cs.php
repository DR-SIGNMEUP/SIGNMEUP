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
function aa(u)
{
    var ddd=u;
    window.location.href="welcome.php?Result=" +ddd;
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
		<h1>Computer Science (CSCI) </h1>
				<div class="flip">CSCI 101L: Fundamentals of Computer Programming
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 101L')"/></a>
				</div>
				<div class="panel">
					<table class="tablename" border="1">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>101</td>
					<td>Spring</td>
					<td>10:00-11:50 am</td>
					<td>ZHS252</td>
					<td>3</td>
					<td>Massoud Ghyam</td>
					<td>SAL 211 8:00-9:00am</td>
					<td>mg@usc.edu</td>
					<td>213-714-8080</td>
					</tr>
					
					<tr>
					<td>101</td>
					<td>Spring</td>
					<td>12:00-01:50 pm</td>
					<td>ZHS252</td>
					<td>3</td>
					<td>Massoud Ghyam</td>
					<td>SAL 211 8:00-9:00am</td>
					<td>mg@usc.edu</td>
					<td>213-714-8080</td>
					</tr>
					</table>
				</div>
				
				<div class="flip">CSCI 200L: Object Oriented Programming
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 200L')"/></a>
				</div>
				<div class="panel">
					<table class="tablename" border="1">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>200</td>
					<td>Spring</td>
					<td>03:00-04:20 am</td>
					<td>KFS259</td>
					<td>3</td>
					<td>Ghanshyam Das</td>
					<td>SAL 341 9:00-10:00am</td>
					<td>gd@usc.edu</td>
					<td>213-714-8181</td>
					</tr>
					</table>
				
				</div>
				
				<div class="flip">CSCI 357: Basic Organisation of Computer Systems
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 357')"/></a>
				</div>
				<div class="panel">
					<table class="tablename" border="1">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>357</td>
					<td>Spring</td>
					<td>09:30-10:50 am</td>
					<td>RTH 105</td>
					<td>3</td>
					<td>Mary Eshaghian</td>
					<td>SAL 104 8:00-9:00am</td>
					<td>meh@usc.edu</td>
					<td>213-714-8282</td>
					</tr>
					
					<tr>
					<td>357</td>
					<td>Spring</td>
					<td>11:00-12:20 am</td>
					<td>RTH 105</td>
					<td>3</td>
					<td>Mary Eshaghian</td>
					<td>SAL 104 8:00-9:00am</td>
					<td>meh@usc.edu</td>
					<td>213-714-8282</td>
					</tr>
				
					</table>
				
				</div>
				
				<div class="flip">CSCI 402: Operating Systems
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 402')"/></a>
				</div>
				<div class="panel">
					<table  class="tablename" border="1">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>402</td>
					<td>Spring</td>
					<td>11:00-12:20 am</td>
					<td>OHE 122</td>
					<td>3</td>
					<td>Bill Cheng</td>
					<td>SAL 311 8:00-9:00am</td>
					<td>chengw@usc.edu</td>
					<td>213-714-8383</td>
					</tr>
					
					</table>
				
				</div>
				
				<div class="flip">CSCI 570: Analysis of Algorithms
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 570')"/></a>
				</div>
				<div class="panel">
					<table class="tablename" border="1">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>570</td>
					<td>Spring</td>
					<td>12:30-01:50 pm</td>
					<td>SOS B46</td>
					<td>3</td>
					<td>Aaron Cote</td>
					<td>SAL 259 8:00-9:00am</td>
					<td>acote@usc.edu</td>
					<td>213-714-8484</td>
					</tr>
					
					<tr>
					<td>570</td>
					<td>Spring</td>
					<td>05:00-07:50 pm</td>
					<td>THH 208</td>
					<td>3</td>
					<td>Shahriar Shamsian</td>
					<td>SAL 223 8:00-9:00am</td>
					<td>ssh@usc.edu</td>
					<td>213-714-8585</td>
					</tr>
					
					</table>
				
				</div>
				
				<div class="flip">CSCI 673: Structure and Dynamics of Networked Information
				<a href="#"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" onclick="aa('CSCI 673')"/></a>
				</div>
				<div class="panel">

					<table class="tablename" border="1" cellspacing="5">
					<tr>
					<th>CourseID</th>
					<th>Semester</th>
					<th>Time</th>
					<th>Location</th>
					<th>Credits</th>
					<th>Professor</th>
					<th>Office Hours</th>
					<th>Email Address</th>
					<th>Phone No.</th>
					</tr>
					
					<tr>
					<td>673</td>
					<td>Spring</td>
					<td>09:30-10:50 am</td>
					<td>KAP 158</td>
					<td>3</td>
					<td>David Kempe</td>
					<td>SAL 347 8:00-9:00am</td>
					<td>dk@usc.edu</td>
					<td>213-714-8686</td>
					</tr>
					
					</table>
				
				</div>
	
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
