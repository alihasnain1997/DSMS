<?php
session_start();
require 'ManagerTest.php';
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
    <link rel="stylesheet" type="text/css" href="../css/Login.css"/>

    <script language="JavaScript" type="text/javascript" src="../js/jqueryimg.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/User.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/product.js"></script>

</head>
<body style="background: #757575">

<div class="header">
    <ul>
        <li><img class="setimg" src="../img/headimg.png" alt="headimg" align="left" height="100px" width="100px"></li>
        <li align="center"><h1>Pakistan's no 1 Stationary</h1></li>
    </ul>
</div>
<div id="topnav">
    <ul>
        <li><img src="../img/logo.png" alt="logo" style="float:left"></li>
        <li><a href="UserIndex.php" class="active">Home</a></li>
        <li>
            <?php $user = $_SESSION['user'];
            if ($user['role'] == 'Admin')
                echo '<a href="ManageUser.php">Manage Users</a>' ?> </li>
        <li><a href="ManageProduct.php">Manage Products</a></li>
    <?php include 'user.php'?>
    </ul>
</div>
<br><br><br><br>

