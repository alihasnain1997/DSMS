<?php
require ('connect.php');

function verifyuser($username,$userpassword){
    global $conn;
    $sql="select name,password,role from users where name='".$username."'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        if($row = $result->fetch_assoc()) {
            if ($row["password"]==$userpassword){
                $row["password"]="";

                session_start();
                $_SESSION["user"] = $row;
                return  $row;
            }
        }

    }
    return false ;
}
?>
