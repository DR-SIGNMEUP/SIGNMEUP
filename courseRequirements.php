<?php
    
    ?>
<?php
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
<a href="index.php" style="margin-left:0px;">
<img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
</a>
</div>

<div class="wrapper" style="height:720px">
<div class="leftAndRight" style="height:700px">
<h1>Mandatory courses: </h1>


<div class="flip">Computer Science
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>CSCI 101L: Fundamentals of Computer Programming</a></li>
<li><a>CSCI 357: Basic Organisation of Computer Systems</a></li>
</div>

<div class="flip">Electrical Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>EE 201: Introduction to Probability</a></li>
<li><a>EE 430: Introduction to Digital Logic</a></li>
</div>


<div class="flip">Biomedical Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>BME 248: Introduction to Artificial Intelligence</a></li>
<li><a>BME 315: Signals and Systems Analysis</a></li>
</div>


<div class="flip">Environmental Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>ENE 106: Air pollution Fundamentals</a></li>
<li><a>ENE 403: Microbiology for Environmental Engineers</a></li>
</div>

<h2>One course from the following bucket: </h2>

<div class="flip">Computer Science
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>CSCI 402: Operating Systems</a></li>
<li><a>CSCI 470: Data Structures</a></li>
</div>

<div class="flip">Electrical Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>EE 441: Applied Linear Algebra for Engineering</a></li>
<li><a>EE 457: Computer Systems Organization</a></li>
</div>


<div class="flip">Biomedical Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>BME 423: Statistical Methods in Biomedical Engineering</a></li>
<li><a>BME 452: Introduction to Neural Engineering</a></li>
</div>


<div class="flip">Environmental Engineering
<a href="index.php"></a>
</div>
<div class="panel">
<li><a>ENE 505: Energy and the Environment</a></li>
<li><a>ENE 429: Air pollution control</a></li>
</div>
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
