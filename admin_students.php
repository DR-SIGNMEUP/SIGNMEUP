

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
			include("dbConnection.php");
			session_start();
			
			$sql = "SELECT * FROM user_info WHERE user_type='student'";
			$result = mysql_query($sql);

			if(!$result){
				echo 'Could not run query: ' . mysql_error();
				exit;
			}else{
				while ( $db_field = mysql_fetch_assoc($result) ) {
					
						echo "<h2> ".$db_field['first_name']." ".$db_field['last_name']."</h2>";
						echo "<h3> ".$db_field['user_email']." </h3>";
						echo "\n";
					
				}
			}
		?>
	</div>
	</div>
</div>
<body>
</html>
