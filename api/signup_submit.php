<?php
require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
	echo "This email id is already registered with us!";
	exit;
}

$sql = "INSERT INTO users (email, password, full_name, phone) VALUES ('$email', '$password', '$full_name', '$phone')";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}
else
echo "Your account has been created successfully!";
?>

Click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);
