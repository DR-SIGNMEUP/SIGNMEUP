<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript">
        function validate(){
            var fields = document.SignUpForm;

            if(fields.studentID.value == ""){
                alert("Student ID cannot be left blank");
                fields.studentID.focus();
                return false;
            }
            if(fields.firstname.value == ""){
                alert("First Name cannot be left blank");
                fields.firstname.focus();
                return false;
            }
            if(fields.lastname.value == ""){
                alert("Last Name cannot be left blank");
                fields.lastname.focus();
                return false;
            }
            if(fields.email.value == ""){
                alert("Email cannot be left blank");
                fields.email.focus();
                return false;
            }
            var emailRegex = /^\S+@\S+\.\S+$/;
            var phoneRegex = /^\d{3}-?\d{3}-?\d{4}$/;
            if(fields.email.value !="" && !emailRegex.test(fields.email.value)) {
                alert("Please enter a valid email address");
                fields.email.focus();
                return false;
            }

            if(fields.altEmail.value !="" && !emailRegex.test(fields.altEmail.value)) {
                alert("Please enter a valid alternate email address");
                fields.altEmail.focus();
                return false;
            }

            if(fields.phone.value !="" && !phoneRegex.test(fields.phone.value)) {
                alert("Please enter a valid 10 digit phone number");
                fields.phone.focus();
                return false;
            }

            if(fields.address.value == ""){
                alert("Address cannot be left blank");
                fields.address.focus();
                return false;
            }
            if(fields.degree.value == ""){
                alert("Please select a Degree");
                fields.degree.focus();
                return false;
            }
            if(fields.major.value == ""){
                alert("Please select a Major");
                fields.major.focus();
                return false;
            }
            if(fields.password.value == ""){
                alert("Please select atleast 6 characters long password");
                fields.password.focus();
                return false;
            }
            if(fields.password.value.length < 6){
                alert("Please select atleast 6 characters long password");
                fields.password.focus();
                return false;
            }
            if(fields.confirmpassword.value == ""){
                alert("Please confirm your password");
                fields.confirmpassword.focus();
                return false;
            }
            if(fields.password.value != fields.confirmpassword.value){
                alert("Your passwords do not match. Please type your password again!");
                fields.password.focus();
                return false;
            }



            return true;
        }



</script>
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
			<form action="welcome.php" method="post" name="SignUpForm" onsubmit="return validate()">
			<table border="0" align="center">
				<tr><td colspan=2 align=center style="font-size:28px;"><b>User Information</b></td></tr>
				<tr bordercolor=black>
				<td>Student ID*: </td>
				<td><input type="text" name="studentID"></td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>First Name*:</td>
				<td><input type="text" name="firstname">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Middle Name:</td>
				<td><input type="text" name="middlename">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Last Name*:</td>
				<td><input type="text" name="lastname">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Email*:</td>
				<td><input type="text" name="email">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Alternate Email:</td>
				<td><input type="text" name="altEmail">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Address*:</td>
				<td><input type="text" name="address">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Degree*:</td>
				<td><p>
				<select name="degree">
				  <option value="">Select...</option>
				  <option value="BS">Bachelor's</option>
				  <option value="MS">Master's</option>
				  <option value="PHD">PhD</option>
				</select>
				</p>  </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Major*:</td>
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
				<td>Password*:</td>
				<td><input type="PASSWORD" name="password">     </td>
				</tr>
				<TR></TR><TR></TR>
                <tr bordercolor=black>
                    <td>Confirm Password*:</td>
                    <td><input type="PASSWORD" name="confirmpassword">     </td>
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

    <div class="footer">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>
    </div>

</body>
</html>
