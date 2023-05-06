<?php
include('connection.php');

// Collecting info
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// Inserting to database table

$sql = "INSERT INTO `users`(`name`, `phone`, `email`, `address`, `password`, `cpassword`) VALUES ('$username','$phone','$email','$address','$password','$cpassword')";

$query = $conn->query($sql);

if ($query) {
    echo "Data insertion successful";
} else {
    echo "Failed to insert data";
}
