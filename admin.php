
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
	<script src="print.js"></script>
</head>
<body>
<div id="containerNew" >
    <div class="header">
        <?php include("header.php"); ?>
    </div>
	<div class="middleContainer" >
	<div class="header">
		<?php
		echo "<h1>Welcome Admin! </h1>";
		echo "<h2>To view student or faculty information click on the tab below:</h2>";
		?>
	</div>
	</div>
	 <div class="tabbedPages">
            <div class="tabs">
                <ul id="menu">
                    <li><a class="selected" href="admin_students.php">Student Information</a></li>
                    <li><a href="admin_faculty.php">Faculty Information</a></li>
                </ul>
            </div>
        </div>
</div>
<body>
</html>
