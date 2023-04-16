<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="ruhaadesigns";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn) {
    echo "connection failed: ".mysqli_connect_error();
    exit;
  }
$your_address= $_POST['address'];
$payment_method= $_POST['payment'];


$sql= "INSERT INTO checkout (your_address,payment_method) VALUES ('$your_address','$payment_method')";

$result = mysqli_query ($conn,$sql);
if(!$result) {
    echo "Error: ".mysqli_error ($conn);
    exit;
}
echo "order placed";
mysqli_close($conn);
?> 