<?php
include'database.php';

$name =$_GET['name'];
$email = $_GET['email'];

$sql = "INSERT INTO omg (name, email) VALUES ('$name','$email')";

// $sql=" SELECT * FROM omg";

if($conn->query($sql) === TRUE){
	echo "Your details have been submitted successfully";

}else{
	echo "Error" .$conn->error;

}
$conn->close();
?>