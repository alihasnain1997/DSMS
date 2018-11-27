<?php
include 'connect.php';
session_start();
?>

<?php
// get JSON data
$data = file_get_contents("php://input");
// convert json data to array
$json_data = json_decode($data, true);

$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_detail = $_POST['p_detail'];
$uname = $_SESSION['user']['name'];
///$uname='azam';

$baseFromJavascript = $_POST['base64']; //your data in base64 'data:image/png....';
// We need to remove the "data:image/png;base64,"
$base_to_php = explode(',', $baseFromJavascript);
// the 2nd item in the base_to_php array contains the content of the image
$data = base64_decode($base_to_php[1]);

$imgName = time();
$filepath = "../img/DBImg" . $imgName . ".png";

// Save the image in a defined path
file_put_contents($filepath, $data);

$sql = "INSERT INTO product(p_name,p_price,p_detail,p_image,createdby) VALUES('$p_name','$p_price','$p_detail','$filepath','$uname')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else echo FALSE;

$conn->close();
?>