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
        <h1>Mandatory courses: </h1>


        <div class="flip">Computer Science
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>CS101: Fundamentals of Computer Programming</a></li>
        <li><a>CSCI 382: Operating Systems</a></li>
        </div>

        <div class="flip">Electrical Engineering
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>EE265: Introduction to Digital Logic</a></li>
        <li><a>EE467: Introduction to Computer Networks</a></li>
        </div>


        <div class="flip">Biomedical Engineering
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>BME101: Biomedical Programming</a></li>
        <li><a>BME382: Signals and Systems Analysis</a></li>
        </div>

        <h2>One course from the following bucket: </h2>

        <div class="flip">Computer Science
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>CS467: Artificial Intelligence</a></li>
        <li><a>CS503: Analysis of Algorithms</a></li>
        </div>

        <div class="flip">Electrical Engineering
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>EE382: Linear Algebra</a></li>
        <li><a>EE503: VLSI Design</a></li>
        </div>


        <div class="flip">Biomedical Engineering
        <a href="index.php"></a>
        </div>
        <div class="panel">
        <li><a>BME265: Medical Electronics</a></li>
        <li><a>BME467: Biomedical Imaging</a></li>
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
