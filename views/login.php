<?php

session_start();

/**
1. koppla upp till databasen
2. hämta användaren från databasen
3. kolla sp att lösenordet stämmer lverens med lösenordet som användaren har skrivit in i formuläre. Kolla med: password_verify

*/

//1. vi behöver pdo uppkoppling
$pdo = new PDO(
"mysql:host=localhost; dbname=FED18; charset=utf8",
    "root",
    "root"
);

//vi sparar i lösenord och användarnamn i nya variabler
//same value in $_POST["username"] and $username
$username=$_POST["username"];
$password=$_POST["password"];


// no whitespace between $pdo and prepare!
$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");

// execute populates the statement ad runs it associative array skickas in i statement
$statement->execute( 
[
    ":username" => $username
]
);

//2. when select is used, fetch must happen
$fetched_user = $statement->fetch();

var_dump($fetched_user["password"]);

//3. compare
$is_password_correct = password_verify($password, $fetched_user["password"]);
if($is_password_correct){
    //save user globally with session
    $_SESSION["username"] = $fetched_user["username"];
    //go back to front page
    header('Location: ../includesAndPartials/registerForm.php');
}else{
    //handle errors, go back to frontpage and populate $_GET
    header('Location: ../includesAndPartials/registerForm.php?login_failed=true');
}


?>