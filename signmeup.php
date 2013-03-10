<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style rel="stylesheet" type="text/css">
.grey_box
{ 
background:url('images/grey_overlay.png') repeat;
padding:10px 15px 15px 15px;
color:#000;
margin: 30px 200px 0px 200px;
<!-- background-color:#FFF; -->
height:60px;
opacity: 0.9;
}
body {background-color:grey;}

label{
width: 100px;
float: left;
text-align: right;
margin-right: 0.5em;
display: block;
color:black;
}
</style>
</head>
<body>
<div id="container">
<div class="grey_box">
                    <a href="/" style="margin-left:0px;">
					<img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
                    </a>
                    
	    <div class="right">
			<form action="welcome.php" method="post">
			<table border="0" align="center">
				<tr><td colspan=2 align=center style="font-size:28px;"><b>User Information</b></td></tr>
				<tr bordercolor=black>
				<td>Student ID: </td> 
				<td><input type="text" name="studentID"></td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>First Name:</td>
				<td><input type="text" name="firstname">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Middle Name:</td>
				<td><input type="text" name="middlename">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Last Name:</td>
				<td><input type="text" name="lastname">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Email:</td>
				<td><input type="text" name="email">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Alternate Email:</td>
				<td><input type="text" name="altEmail">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Address:</td>
				<td><input type="text" name="address">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Degree:</td>
				<td><p>
				<select name="major">
				  <option value="">Select...</option>
				  <option value="BS">Bachelor's</option>
				  <option value="MS">Master's</option>
				  <option value="PHD">PhD</option>
				</select>
				</p>  </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Major:</td>
				<td><p>
				<select name="major">
				  <option value="">Select...</option>
				  <option value="CS">Computer Science</option>
				  <option value="EE">Electrical Engineering</option>
				  <option value="BME">Biomedical Engineering</option>
				  <option value="ENV">Environmental Engineering</option>
				</select>
				</p></td>
				</tr>
				
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Phone Number:</td>
				<td><input type="text" name="phone">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Password:</td>
				<td><input type="PASSWORD" name="password">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td></td>
				<td ><input name="submit" type="Submit" id="submit" value="Submit" class="button"></td>
				</tr>
				<TR></TR><TR></TR>
			</table>
			</form>
		</div>
	</div>
	</div>
</body>
</html>
