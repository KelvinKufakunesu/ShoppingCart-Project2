<?php
//Prepare a SQL-statement
$statement = $pdo->prepare("SELECT * FROM products");
//Execute it
$statement->execute();
//Fetch every row that it returns. $products is now an Associative array
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

//print_r($products);// check that I have the associative array
?>

