<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>

<body>
<div id="containerNew" >
    <div class="header">
        <a href="index.php" style="margin-left:0px;">
            <img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
        </a>
    </div>

    <div class="middleContainer" >
        <div class="middle student_info">
            <div class="text">
                <?php
                echo "<h4>Welcome User. You have been successfully logged into the system</h4>";
                ?>
                <div class="subHeading">Personal Information</div>
                <div class="row">
                    <div class="entry">
                        <div class="key">First Name: </div>
                        <div class="value">Kushalpreet</div>
                    </div>
                    <div class="entry">
                        <div class="key">Last Name: </div>
                        <div class="value">Kaur</div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Degree: </div>
                        <div class="value">Masters</div>
                    </div>
                    <div class="entry">
                        <div class="key">Major: </div>
                        <div class="value">Computer Science</div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry" id="addressEntry">
                        <div class="key">Address: </div>
                        <div class="value">123 XYZ Street, Apt #111, Los Angeles, CA 90007</div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Phone: </div>
                        <div class="value">(111)111-1111</div>
                    </div>
                    <div class="entry">
                        <div class="key">Email: </div>
                        <div class="value">kkaur@usc.edu</div>
                    </div>
                </div>
                <div class="row">
                    <div class="entry">
                        <div class="key">Student ID: </div>
                        <div class="value">2222222</div>
                    </div>
                    <div class="entry">
                        <div class="key">GPA: </div>
                        <div class="value">3.8</div>
                    </div>
                </div>
                    <div class="edit">
                        <a href="editInfo.php">To change personal information please click here</a>
                    </div>
                </div>


        </div>
        <div class="tabbedPages">
            <div class="text">
                <h4>Useful Links</h4>
            </div>

            <div class="tabs">
                <ul id="menu">
                    <li><a class="selected" href="grades.php">View Grades</a></li>
                    <li><a href="courseRequirements.php">Course Requirements</a></li>
                    <li><a href="courseRegistration.php">Course Registration</a></li>
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