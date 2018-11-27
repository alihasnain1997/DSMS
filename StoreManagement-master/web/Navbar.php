<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dollar Industries (Pvt.) Ltd</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
    <link rel="stylesheet" type="text/css" href="../css/Login.css"/>

    <script language="JavaScript" type="text/javascript" src="../js/jqueryimg.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/Pagination.js"></script>
</head>
<body>

<div class="header">
    <ul>
        <li class="setimg"><img src="../img/headimg.png" alt="headimg" align="left" height="100px" width="100px"></li>
        <li align="center"><h1>Pakistan's no 1 Stationary</h1></li>
    </ul>
</div>
<div id="topnav">
    <ul>
        <li><img src="../img/logo.png" alt="logo" style="float:left"></li>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="career.php">Careers</a></li>
        <li><a href="CustomerProduct.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <?php
        include 'user.php';
        ?>
    </ul>
</div>
<br/>



