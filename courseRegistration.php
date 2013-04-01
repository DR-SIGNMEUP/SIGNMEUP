<?php
    session_start();
?>
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

<div class="wrapper" style="height:720px">
<div class="leftAndRight" style="height:700px">
<h1>Departments </h1>
<div class="flip">
<li><a class="selected" href="cs.php">Computer Science</a></li>
</div>


<div class="flip">
<li><a class="selected" href="cs.php">Electrical Engineering</a></li>
</div>


<div class="flip">
<li><a class="selected" href="cs.php">Biomedical Engineering</a></li>
</div>


<div class="flip">
<li><a class="selected" href="cs.php">Environmental Engineering</a></li>
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
