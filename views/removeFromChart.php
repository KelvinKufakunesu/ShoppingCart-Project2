<?php
session_start();

//data base connection
$pdo = new PDO(
    "mysql:host=localhost;dbname=FED18;charset=utf8",
    "root", //user
    "root"  //password
);
    
/**
 * We navigate to this file by clicking a link to the file with a search query:
 * remove_animal.php?animal=cat
 * The value of the animal differs depending on which link we click. The value
 * is created by looping through each animal in 'index.php'
 */

$username = $_SESSION["username"];                

$statement = $pdo->prepare("DELETE FROM orders WHERE username = :username");
$statement->execute([
    ":username" => $username
]);


// check that I have the associative array

/**
 * This file has now filled its purpose, it should only insert into the database and the
 * move on to a new file. In this case we are redirecting to the index-php again
 * because index will fetch all the animals anew and the new animal will be there
 */
header('Location: ../index.php');