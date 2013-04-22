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

    <div class="middleContainer" style="min-height:720px">
        <div class="middle" style="min-height:700px">
            <h1>Departments </h1>
            <div class="flip">
            <li><a class="selected" href="courses.php?course=CS">Computer Science</a></li>
            </div>


            <div class="flip">
            <li><a class="selected" href="courses.php?course=EE">Electrical Engineering</a></li>
            </div>


            <div class="flip">
            <li><a class="selected" href="courses.php?course=BME">Biomedical Engineering</a></li>
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
