<?php
session_start();

//connection to data base
$pdo = new PDO(
"mysql:host=localhost; dbname=FED18; charset=utf8",
    "root",
    "root"
);

//save as $username
$username=$_POST["username"];
$password=$_POST["password"];

//make hashed password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//insert username and password into database
$statement = $pdo->prepare("INSERT INTO users(username, password) VALUES(:username, :password)");

//execute
$statement->execute( 
[
    ":username" => $username,
    ":password" => $hashed_password
]
);

//redirect to register form
header('Location: registerForm.php');
?>