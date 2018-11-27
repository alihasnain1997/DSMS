<?php

include 'connect.php';
?>
<?php
$data = file_get_contents("php://input");

$json_data = json_decode($data, true);

$name = $json_data['name'];
$password = $json_data['password'];
$role = $json_data['role'];
$sql = "INSERT INTO users(name,password,role) VALUES('$name','$password','$role')";

if($conn->query($sql) === TRUE){
echo $conn->insert_id;
}else echo FALSE;

$conn->close();
?>