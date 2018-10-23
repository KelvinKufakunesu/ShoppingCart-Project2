<?php
/**
tar in lösenordet och lägger in det i databasen - redirectar till index.php för att logga in

No HTML
mission: spara användare i databasen
1. handtera post variabler: $_POST
2. koppling till databas: PDO
3. spara användaren i databasen
*/

$pdo = new PDO(
"mysql:host=localhost; dbname=FED18; charset=utf8",
    "root",
    "root"
);


//same value in $_POST["username"] and $username
$username=$_POST["username"];
$password=$_POST["password"];

//password_hash must always have two arguments
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


//LÄGG IN HÄR!!!! -----> if lösenord är true etc etc kontrollera med if sats

// no whitespace between $pdo and prepare!
$statement = $pdo->prepare("INSERT INTO users(username, password) VALUES(:username, :password)");

// execute populates the statement ad runs it associative array skickas in i statement
$statement->execute( 
[
    ":username" => $username,
    ":password" => $hashed_password
]
);

header('Location: registerForm.php');


?>
