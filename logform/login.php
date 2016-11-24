<?php

include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email = '$email' AND password = '$password'";

$result = $connect -> query($sql);

if (!$row = $result -> fetch_assoc()) {
   echo  alert('CREATE YOUR ACCOUNT FIRST');
}

else {
   echo  "<h1>SUCCESSFULLY LOGGED IN....</h1>";
}

 ?>
