<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=FED18;charset=utf8",
    "root", //user
    "root"  //password
);

//Prepare a SQL-statement
$statement = $pdo->prepare("SELECT * FROM products");
//Execute it
$statement->execute();
//And fetch every row that it returns. $products is now an Associative array
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


//print_r($products);


//Loops through products and echoes to index-page
foreach($products as $product){
    echo "<div class='form-group col-md-6 appleForm'>";
    echo "<img src='images/apple.jpg' alt='apple'>"; 
    echo '<label class="appleText" for=' . $product["name"] . '> ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
    echo '<input class="amountInputField" id=' . $product["name"] . 'name="amount[]" type="number" min="0">';
    echo "</div>";
}



?>






<!--
//Product Array
//$products = [
//  [
//    "name" => "Ingrid Marie",
//    "price" => "2.00",
//    "label" => "ingrid",
//  ],
//  [
//    "name" => "Honey crunch",
//    "price" => "3.00",
//    "label" => "honey",
//  ],
//  [
//    "name" => "Rubinstar",
//    "price" => "4.00",
//    "label" => "rubinstar",
//  ],
//  [
//    "name" => "Discovery",
//    "price" => "250.00",
//    "label" => "discovery",
//  ]
//];
-->
