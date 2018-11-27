<?php
require 'api.php';
$errormsg = "";
$uname = '';
if (isset($_REQUEST["loginbutton"]) == true) {
    $uname = $_REQUEST["uname"];
    $pass = $_REQUEST["pass"];
    $user = verifyuser($uname, $pass);


    if ($user['role'] == 'Admin' || $user['role'] == 'Manager') {
        header('location:userIndex.php');
        // echo json_encode($_SESSION["user"]);
    } else if ($user == false) {
        $errormsg = "UserName or Password  is invalid";
    }
}

?>


<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/Login.css"/>
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="get">
            <input type="text" name="uname" placeholder="username" value="<?php echo $uname ?>" required/>
            <input type="password" name="pass" placeholder="password" required/>
            <input type="submit" class="button" name="loginbutton" value="login"/>
            <span style="color: red"><?php echo $errormsg ?></span>
        </form>
    </div>
</div>
</body>
</html>