<?php

$pdo = new PDO(
"mysql:host=localhost; dbname=FED18; charset=utf8",
    "root",
    "root"
);

$amount1=$_POST["amount1"];


$statement = $pdo->prepare("INSERT INTO shoppingChart (amount1) VALUES(:amount1)");

$statement->execute([
  ":amount1" => $amount1,
]);


//header('Location: ../index.php');

echo "Hej"

?>