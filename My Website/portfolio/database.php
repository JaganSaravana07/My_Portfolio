<?php
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

$conn = mysqli_connect('localhost', 'root', '','db_connect');

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact(txtName, txtEmail, txtMessage)
	values(?, ?, ?)");
}
    $stmt->bind_param("sss",$txtName, $txtEmail, $txtMessage);
    $stmt->execute();
	echo "Information Sent Successfully...";
	$stmt->close();
	$conn->close();
?>

