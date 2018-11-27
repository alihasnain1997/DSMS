<?php

include 'nave.php';
require 'AdminTest.php'
?>
<script type="text/javascript" src="../js/User.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.2.js"></script>
<link rel="stylesheet" type="text/css" href="../css/Login.css"/>
<div class="login-page">
<div class="form">
<table class="login-form">
    <tr>
        <input type="text" id="adduser" placeholder="username" required><br>
        <input type="password" id="userpass" placeholder="Password" required>
        <input type="submit" onclick="PostUser()" class="button" name="add" value="ADD"/>
    </tr>
</table>
</div>
</div><br><br>

<?php
include 'footer.php';

?>


</body>
</html>

