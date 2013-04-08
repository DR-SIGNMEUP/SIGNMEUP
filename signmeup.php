<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <style>
        .ui-tooltip, .arrow:after {
            background: black;
            border: 2px solid white;

        }
        .ui-tooltip {
            padding: 10px 20px;
            color: white;
            border-radius: 20px;
            font: bold 14px "Helvetica Neue", Sans-Serif;
            text-transform: uppercase;
            box-shadow: 0 0 7px black;
        }
        .arrow {
            width: 70px;
            height: 16px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -35px;
            bottom: -16px;
        }
        .arrow.top {
            top: -16px;
            bottom: auto;
        }
        .arrow.left {
            left: 20%;
        }
        .arrow:after {
            content: "";
            position: absolute;
            left: 20px;
            top: -20px;
            width: 25px;
            height: 25px;
            box-shadow: 6px 5px 9px -9px black;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            tranform: rotate(45deg);
        }
        .arrow.top:after {
            bottom: -20px;
            top: auto;
        }
    </style>
<script src="jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>
        $(document).ready(function(){
            $( document ).tooltip({
                position: {
                    my: "center bottom-10",
                    at: "center top",
                    using: function( position, feedback ) {
                        $( this ).css( position );
                        $( "<div>" )
                            .addClass( "arrow" )
                            .addClass( feedback.vertical )
                            .addClass( feedback.horizontal )
                            .appendTo( this );
                    }
                }
            });
        });
</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#submit').click(function(e){
            if(validate()){
                var sign_up= confirm("Are you sure you want to submit the details. You will not be able to change information after this");
                if(!sign_up){
                    e.preventDefault();
                }
                else{
                    $("#signupForm").submit();
                }
            }
            else{
                e.preventDefault();
            }

        });
    });

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
			<form action="insert.php" method="post" name="SignUpForm" id="signupForm" >
			<table border="0" align="center">
				<tr><td colspan=2 align=center style="font-size:28px;"><b>User Information</b></td></tr>
				<tr bordercolor=black>
				<td>Student ID*: </td>
				<td><input type="text" name="studentID" title="Please enter your unique student id"></td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>First Name*:</td>
				<td><input type="text" name="firstname" title="Enter your First name">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Middle Name:</td>
				<td><input type="text" name="middlename" title="Enter your middle name">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Last Name*:</td>
				<td><input type="text" name="lastname" title="Enter your last name">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Email*:</td>
				<td><input type="text" name="email" title="Enter your email adddress">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Alternate Email:</td>
				<td><input type="text" name="altEmail" title="Enter your alternate email address">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Address*:</td>
				<td><input type="text" name="address" title="Enter your address">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Degree*:</td>
				<td><p>
				<select name="degree" title="Please select your degree objective">
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
				<select name="major" title="Please select your major">
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
				<td><input type="text" name="phone" title="Enter your phone number XXX-XXX-XXXX">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>Password*:</td>
				<td><input type="PASSWORD" name="password" title="Enter your password. Atleast 6 characters in length">     </td>
				</tr>
				<TR></TR><TR></TR>
                <tr bordercolor=black>
                    <td>Confirm Password*:</td>
                    <td><input type="PASSWORD" name="confirmpassword" title="Please confirm your password">     </td>
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
