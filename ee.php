<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>

<script> 
$(document).ready(function(){
  $(".flip").click(function(){
    $(this).next(".panel").slideToggle("slow");
  });
});
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
<div id="container">
    <div class="grey_box">
                    <a href="index.php" style="margin-left:0px;">
					<img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
                    </a>
    </div>

    <div class="wrapper">
		<div class="leftAndRight">
		<h1>Electrical Engineering (EE) </h1>
				<div class="flip">EE 101: Introduction to Digital Logic
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>08:30-09:50 am</td>
					<td>OHE 230</td>
					<td>3</td>
					<td>Satsuki Takahashi</td>
					<td>PHE 211 8:00-9:00am</td>
					<td>stak@usc.edu</td>
					<td>213-714-8080</td>
					</tr>
					
					<tr>
					<td>101</td>
					<td>Spring</td>
					<td>02:00-03:20 pm</td>
					<td>OHE 230</td>
					<td>3</td>
					<td>Satsuki Takahashi</td>
					<td>PHE 211 8:00-9:00am</td>
					<td>stak@usc.edu</td>
					<td>213-714-8080</td>
					</tr>
					</table>
				</div>
				
				<div class="flip">EE 326L: Essential of Electrical Engineering
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>326</td>
					<td>Spring</td>
					<td>03:30-04:50 pm</td>
					<td>GFS 116</td>
					<td>4</td>
					<td>Douglas Burke</td>
					<td>PHE 341 9:00-10:00am</td>
					<td>dbkr@usc.edu</td>
					<td>213-714-8181</td>
					</tr>
					</table>
				
				</div>
				
				<div class="flip">EE 438L: Processing of Microelectronics
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>438</td>
					<td>Spring</td>
					<td>06:00-07:20 pm</td>
					<td>KAP 167</td>
					<td>3</td>
					<td>Kian Kaviani</td>
					<td>PHE 104 8:00-9:00am</td>
					<td>meh@usc.edu</td>
					<td>213-714-8282</td>
					</tr>
					
					<tr>
					<td>438</td>
					<td>Spring</td>
					<td>09:00-11:50 pm</td>
					<td>VHE 102</td>
					<td>3</td>
					<td>Kian Kaviani</td>
					<td>PHE 104 8:00-9:00am</td>
					<td>meh@usc.edu</td>
					<td>213-714-8282</td>
					</tr>
				
					</table>
				
				</div>
				
				<div class="flip">EE 555: Broadband Network Architectures
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>555</td>
					<td>Spring</td>
					<td>07:30-08:50 am</td>
					<td>OHE 132</td>
					<td>3</td>
					<td>Ali Zahid</td>
					<td>PHE 311 8:00-9:00am</td>
					<td>aliz@usc.edu</td>
					<td>213-714-8383</td>
					</tr>
					
					</table>
				
				</div>
				
				<div class="flip">EE 526: Renewable Energy in Power Systems
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>526</td>
					<td>Spring</td>
					<td>06:40-09:20 pm</td>
					<td>OHE 100D</td>
					<td>3</td>
					<td>Mohammed Beshir</td>
					<td>PHE 259 8:00-9:00am</td>
					<td>mhsbr@usc.edu</td>
					<td>213-714-8484</td>
					</tr>
					
					</table>
				
				</div>
				
				<div class="flip">EE 632: Integrated Communication Systems
				<a href="index.php"><input type="image" id="myimage" style="float:right; height:25px" src="images/add.png" /></a>
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
					<td>632</td>
					<td>Spring</td>
					<td>11:00-12:20 am</td>
					<td>VKC 104</td>
					<td>3</td>
					<td>Hossein Hashemi</td>
					<td>PHE 347 8:00-9:00am</td>
					<td>hh@usc.edu</td>
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
