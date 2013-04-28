<?php
include("dbConnection.php");
session_start();
$id = $_SESSION['user_id'];

echo $id;

?>

<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="main2.css">
    <script src="print.js"></script>
</head>

<body>
<div id="container" >
    <div class="grey_box">
        <?php include("header.php"); ?>
    </div>

    <div class="wrapper" >
        <div class="leftAndRight">
            <div class="text" style="height:485px">
                <span >
                    <?php
                    echo "<h4 style='margin-left:20px'>Welcome ".$_SESSION['first_name']." ".$_SESSION['last_name'] ."! <br/>Please enter the information which you want to update. </h4>";
                    ?>
                </span>

            <form action="updateUserInfo.php" method="post" name="SignUpForm" id="editUserInfo">
                <table border="0" align="center">

                    <tr bordercolor=black>
                        <td>First Name*:</td>
                        <td><input type="text" name="firstname" title="Enter your First name" value="<?php echo $_SESSION['first_name'];?>"></td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Middle Name:</td>
                        <td><input type="text" name="middlename" title="Enter your middle name" value="<?php echo $_SESSION['middle_name'];?>"></td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Last Name*:</td>
                        <td><input type="text" name="lastname" title="Enter your last name" value="<?php echo $_SESSION['last_name'];?>"></td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Email*:</td>
                        <td><input type="text" name="email" title="Enter your email adddress" value="<?php echo $_SESSION['user_email'];?>">     </td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Alternate Email:</td>
                        <td><input type="text" name="altEmail" title="Enter your alternate email address" value="<?php echo $_SESSION['alternate_email'];?>">     </td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Address*:</td>
                        <td><input type="text" name="address" title="Enter your address" value="<?php echo $_SESSION['address'];?>">     </td>
                    </tr>
                    <TR></TR><TR></TR>


                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phone" title="Enter your phone number XXX-XXX-XXXX" value="<?php echo $_SESSION['phone_no'];?>">     </td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>New Password*:</td>
                        <td><input type="PASSWORD" name="password" title="Enter your password. Atleast 6 characters in length" value="<?php echo $_SESSION['password'];?>" >     </td>
                    </tr>
                    <TR></TR><TR></TR>
                    <tr bordercolor=black>
                        <td>Confirm Password*:</td>
                        <td><input type="PASSWORD" name="confirmpassword" title="Please confirm your password" value="<?php echo $_SESSION['password'];?>">     </td>
                    </tr>
                    <TR></TR><TR></TR>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['user_id'];?>">
                    <input type="hidden" name="user_type" value="<?php echo $_SESSION['user_type'];?>">
                    <tr bordercolor=black>
                        <td></td>
                        <td ><input name="submit" type="Submit" id="submit" value="Submit" class="button" style="margin-left: 0px"></td>
                    </tr>
                    <TR></TR><TR></TR>
                </table>
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



</body>


</html>