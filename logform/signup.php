<?php

include 'connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$sql = "INSERT INTO users (firstname, lastname, username, email, password, confirmation)
         VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$confirm')";

$result = $connect -> query($sql);

 ?>
