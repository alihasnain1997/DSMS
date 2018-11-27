<?php

include 'connect.php';
?>
<?php
if(isset($_REQUEST['user']))
{
    $username=$_REQUEST['user'];
    $sql = "SELECT name FROM users WHERE name ='" . $username . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            echo json_encode($row);
        }
    } else echo "false";

    $conn->close();
}
else
{
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $result_array = Array();
        while ($row = $result->fetch_assoc()) {
            $result_array[] = $row;
        }
        $json_array = json_encode($result_array);
        echo $json_array;
    }
    else echo "False";

}
?>