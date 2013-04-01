<a href=<?php if(!empty($_SESSION['user_id'])) echo "welcome.php"; else echo "index.php"; ?> style="margin-left:0px;">
    <img id="HeaderLogo" src="images/SMU4ColorLogo.png" alt="SignMeUp">
</a>
<?php if(!empty($_SESSION['user_id'])){ ?>
    <span class="header_right">
            <span class="user_id">
                SignMeUp ID : <?php echo $_SESSION['user_id']; ?>
            </span>
            <a href="logout.php">
                Logout
            </a>
    </span>
<?php } ?>