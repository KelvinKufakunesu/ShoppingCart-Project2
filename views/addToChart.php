<?php
session_start();

//data base connection
$pdo = new PDO(
    "mysql:host=localhost;dbname=FED18;charset=utf8",
    "root", //user
    "root"  //password
);
    
//include product array
//Prepare a SQL-statement
$statement = $pdo->prepare("SELECT * FROM products");
//Execute it
$statement->execute();
//Fetch every row that it returns. $products is now an Associative array
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

//print_r($products);// check that I have the associative array


foreach($products as $product){
    
    if ($_POST[$product["name"]] >= 1){
    
    $_SESSION[$product["name"]] = $_POST[$product["name"]];
        
    $name = $product["name"];
    $price = $product["price"];
    $amount = $_SESSION[$product["name"]];
    $username = $_SESSION["username"];
    
    $statement = $pdo->prepare("INSERT INTO orders (name, price, amount, username) VALUES(:name, :price, :amount, :username)");

    $statement->execute( 
    [
        ":name" => $name,
        ":price" => $price,
        ":amount" => $amount,
        ":username" => $username
    ]
    );
        
    }    
}
header('Location: checkout.php');




//die();


   
?>



