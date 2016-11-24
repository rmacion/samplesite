<?php

$connect = mysqli_connect("localhost", "root", "", "ecoaid");

if (!$connect) {
   die("Connection Failed...." .mysqli_connect_error());
}

 ?>
