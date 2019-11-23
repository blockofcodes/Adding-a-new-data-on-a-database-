<?php
//INSERTING DATA INTO TABLE
$host ="localhost";
$dbusername="db_username";
$dbpassword="password";
$dbname="dbname";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error){
die ("connection failed:" . $conn->connect_error);
}
$School = $_POST['School'];
$ID = $_POST['ID'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$Grade = $_POST['Grade'];

$sql = "INSERT INTO studentdata (School,ID,firstname,lastname,username,Grade)
VALUES ('$School','$ID','$firstname','$lastname','$username','$Grade')";

if ($conn->query($sql) === TRUE) {


header('location:http://www.blockofcodes.com/schoolproject.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

