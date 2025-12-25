<?php

$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password;
$conn = new mysqli("localhost","root","Vibin@#123","javapro");
if($conn->connect_error){
    die("connection Failed !");
}
echo("Connection Succesfull !");

?>