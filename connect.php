<?php
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$contact_no = filter_input(INPUT_POST, 'contact_no');

$password = filter_input(INPUT_POST, 'password');
if (!empty($first_name)){
if (!empty($last_name)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "transfer";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (first_name, last_name)
values ('$first_name','$last_name')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "last name should not be empty";
die();
}
}
else{
echo "first name should not be empty";
die();
}
?>
