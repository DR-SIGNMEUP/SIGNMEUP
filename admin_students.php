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

<script>
function deleteMe(u)
{
	var ddd=u
	var del= confirm("Are you sure you want to delete this student?");
	if(del){
	   window.location.href="admin.php?Result=" +ddd;
    }
   e.preventDefault();
}
</script>
<script> 
$(document).ready(function(){
	$("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".flip").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
    });
  $(".flip").click(function(){
    $(this).next(".panel").slideToggle("slow");
  });
});
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
<div id="containerNew">
     <div class="header">
        <?php include("header.php"); ?>
    </div>
	 <div class="middleContainer">
		<div class="middle">
		<h1>List of students:</h1>
		<?php
			$sql = "SELECT * FROM user_info WHERE user_type='student'";
			$result = mysql_query($sql);

			if(!$result){
				echo 'Could not run query: ' . mysql_error();
				exit;
			}else{ 
				while ( $row = mysql_fetch_assoc($result) ){
					$_SESSION['user_id'] = $row['user_id'];
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

    <div class="footer">
        <center>
            &copy; Team_6 SignMeUp
        </center>
    </div>
</div>	



</body>
</html>
