<?php
session_start();

//connect to data base
$pdo = new PDO(
"mysql:host=localhost; dbname=FED18; charset=utf8",
    "root",
    "root"
);

//save as $username and $password
$username=$_POST["username"];
$password=$_POST["password"];

//get username from database
$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
//execute
$statement->execute( 
[
    ":username" => $username
]
);

//fetch
$fetched_user = $statement->fetch();

//var_dump($fetched_user["password"]);

//check if password is correct
$is_password_correct = password_verify($password, $fetched_user["password"]);

if($is_password_correct){
    //save user globally with session
    $_SESSION["username"] = $fetched_user["username"];
    //go back to front page
    header('Location: ../includesAndPartials/registerForm.php');
}else{
    //handle errors, go back to register form
    header('Location: ../includesAndPartials/registerForm.php?login_failed=true');
}?>