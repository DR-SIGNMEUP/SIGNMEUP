<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       $('#logout').click(function(){
           var log_out= confirm("Are you sure you want to log out?");
           if(log_out){
               window.location.href = "logout.php";
           }
        });
    });
</script>

<a href=<?php if(!empty($_SESSION['user_id'])) echo "welcome.php"; else echo "index.php"; ?> style="margin-left:0px;">
    <img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
</a>
<?php if(!empty($_SESSION['user_id'])){ ?>
    <span class="header_right">
            <span class="user_id">
                SignMeUp ID : <?php echo $_SESSION['user_id']; ?>
            </span>
            <a id="logout" href="#">
                Logout
            </a>
    </span>
<?php } ?>