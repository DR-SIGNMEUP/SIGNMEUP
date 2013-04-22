
<script src="jquery-1.7.1.min.js"></script>
<script>
    $(document).ready(function(){
       $('#logout').click(function(e){
           var log_out= confirm("Are you sure you want to log out?");
           if(log_out){
               window.location.href = "logout.php";
           }
           e.preventDefault();
        });
    });
</script>

<a href=<?php

        if(!empty($_SESSION['user_type'])){
              if($_SESSION['user_type'] == "professor"){
                  echo "welcomeFaculty.php";
              }
			  else if($_SESSION['user_type']=="admin"){
					echo "admin.php";
				}
              else{
                  echo "welcome.php";
              }
        }
        else{
              echo "index.php";
        }
        ?> style="margin-left:0px;">
    <img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
</a>
<?php
if(!empty($_SESSION['user_id'])){ ?>
    <span class="header_right">
            <span style="margin-right: 20px"><?php echo CURRENT_SEM; ?></span>
            <span class="user_id">
                SignMeUp ID : <?php echo $_SESSION['user_id']; ?>
            </span>
            <a id="logout" href="#">
                Logout
            </a>
    </span>
<?php } ?>