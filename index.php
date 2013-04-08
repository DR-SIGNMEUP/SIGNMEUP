<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="jquery-1.7.1.min.js"></script>
<script src="jquery.cross-slide.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

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
function validate(u,p)
{
	var valid=true;
        if(u.value=="" && p.value=="")
        {
            alert("User ID and password cannot be left blank");
            document.getElementById("emailid").focus();
            valid=false;
        }

        else
        {
            if(u.value=="")
            {
                alert("User ID cannot be left blank");
                document.getElementById("emailid").focus();
                valid=false;
            }
            if(p.value=="")
            {
                alert("Password cannot be left blank");
                document.getElementById("password").focus();
                valid=false;
            }
        }
return valid;
}


</script>
</head>

<body>
<div id="container">
            <div class="grey_box">
                    <a href="index.php" style="margin-left:0px;">
					<img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
                    </a>
                    
                    <div class="header_content">
                        <div class="main_navigation">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="signmeup.php">SIGNUP</a></li>
                                <li><a href="#">CONTACT US</a></li>
                                <li><a href="index.php">LOGIN</a></li>
                            </ul>
						</div>
                    </div>
		    </div>
		
		<div class="grey_box_left">
		<div class="left">
		</div>
		<script type="text/javascript">
      $(function() {
    $('.left').crossSlide({
	sleep:3,
	    fade: 1
    }, [
      { src: 'images/1.jpg', dir: 'up' },
      { src: 'images/2.jpg', dir: 'down'},
      { src: 'images/3.jpg', dir: 'left' },
      { src: 'images/4.jpg', dir: 'right' },
	  { src: 'images/5.jpg', dir: 'up' },
      { src: 'images/6.jpg', dir: 'down' },
      { src: 'images/7.jpg', dir: 'right' },
      { src: 'images/8.jpg', dir: 'left' },
	  { src: 'images/9.jpg', dir: 'up' },
      { src: 'images/10.jpg', dir: 'down' }
   
    ])
  });
 ;
 </script>
		<div class="right">
			<form action="login.php" method="post" onsubmit="return validate(emailid,password)">
			<table border="0" align="center">
				<tr><td colspan=2 align=center style="font-size:28px;"><b>Login Information</b></td></tr>
				<tr bordercolor=black>
				<td>EMAIL ID: </td> 
				<td><input type="text" name="emailid" id="emailid" title="Enter your email address"></td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>PASSWORD:</td>
				<td><input type="PASSWORD" name="password" id="password" title="Enter your password which you selected while signing up for the system">     </td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td><span id="help"></span></td>
				<td ><input name="submit" type="Submit" id="submit" value="Submit" class="button"></td>
				</tr>
				<TR></TR><TR></TR>
				<tr bordercolor=black>
				<td>NEW USER</td>
				<td><a href="signmeup.php">Sign up</a></td>
				</tr>
				<TR></TR><TR></TR>
			</table>
			</form>
            <div class="invalidUserNamePassword">
                <?php if(isset($_GET['msg'])){
                echo "Invalid username or password."."<br/> Please try again!";
            }?>
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