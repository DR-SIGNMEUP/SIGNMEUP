<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>

<script> 
$(document).ready(function(){
  $(".flip").click(function(){
    $(this).next(".panel").slideToggle("slow");
  });
});
</script>
<script>
function deleteMe(u)
{
	var ddd=u
	var del= confirm("Are you sure you want to delete this professor?");
	if(del){
	   window.location.href="admin.php?Result=" +ddd;
    }
   e.preventDefault();
}
</script>
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
<div id="container">
     <div class="grey_box">
        <?php include("header.php"); ?>
    </div>
	 <div class="wrapper">
		<div class="leftAndRight">
		<h1>List of professors:</h1>
		<?php
			include("dbConnection.php");
			session_start();
			
			$sql = "SELECT * FROM user_info WHERE user_type='professor'";
			$result = mysql_query($sql);

			if(!$result){
				echo 'Could not run query: ' . mysql_error();
				exit;
			}else{ 
				while ( $row = mysql_fetch_assoc($result) ){
					echo "<div class='flip'>".$row['first_name']." ".$row['last_name']."";
					echo "<a href='#'><input type='image' id='myimage' style='float:right; height:25px' src='images/delete.png' onclick='deleteMe(".$row['user_id'].")'/></a>";
					echo "</div>";
					echo "<div class='panel'>";
					echo "<table class='tablename' border='0'>";
					echo "<tr>"; 
					echo "<td>User ID: ".$row['user_id']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>User Email: ".$row['user_email']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>Phone No: ".$row['phone_no']."</td>";
					echo "</tr>";
					echo "<tr>"; 
					echo "<td>Address: ".$row['address']."</td>";
					echo "</tr>";
					echo "</table>";
					echo "</div>";
					
				}
			}
		?>
	</div>
	</div>
</div>	

    <div class="footer">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>

</body>
</html>

