<?php
if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'Manager')
    header('location:UserIndex.php');
else if (!isset($_SESSION['user']))
    header('location:index.php');
?>
