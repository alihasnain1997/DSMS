<?php
if (!isset($_SESSION['user'])) {
    ?>
    <li><a style="float:right" href="LogIn.php">Log in</a></li>
    <?php
}
if (isset($_SESSION['user'])) {
    ?>
    <li>
        <div class="dropdown">
            <button class="dropbtn"> <?php echo $_SESSION['user']['name'] ?>
                <div class="arrow-down"></div>
            </button>
            <div class="dropdown-content">
                <a href="changepassword.php">Change Password</a>
                <a href="logout.php">logout</a>

            </div>
        </div>
    </li>
<?php }
?>