<?php
/*Foreach loop 
 * - echoes out amount ordered of each product 
 * - checks if prices needs to be altered (Monday, Wednesday & Friday) 
 * - saves in session */

$totalShoppingChart = 0;
foreach($products as $index => $product){
    if(isset($_POST["amount"][$index]) && $_POST["amount"][$index] > 0){
        if(date("l") === "Monday"){
            $product["price"] = ($product["price"] / 2); //calculate product price for Monday
            $totalPrice = ($_POST["amount"][$index] * $product["price"]); //Save as total price
            $totalShoppingChart += $totalPrice; //Calculate total sum of shopping cart
            echo '<div class="orderText">' . $_POST["amount"][$index] . ' ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece = ' . number_format($totalPrice, 2) . ' kr</div>';
            $_SESSION["amount"][$index] = $_POST["amount"][$index];
        }else if(date("l") === "Wednesday"){
            $product["price"] = ($product["price"] * 1.1); //calculate product price for Wednesday
            $totalPrice = ($_POST["amount"][$index] * $product["price"]); //Save as total price
            $totalShoppingChart += $totalPrice; //Calculate total sum of shopping cart
            echo '<div class="orderText">' . $_POST["amount"][$index] . ' ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece = ' . number_format($totalPrice, 2) . ' kr</div>';
            $_SESSION["amount"][$index] = $_POST["amount"][$index];
        }else if(date("l") === "Friday" && ($product["price"] > 200)){
            $product["price"] = ($product["price"] - 20); //calculate product price for Friday
            $totalPrice = ($_POST["amount"][$index] * $product["price"]); //Save as total price
            $totalShoppingChart += $totalPrice; //Calculate total sum of shopping cart
            echo '<div class="orderText">' . $_POST["amount"][$index] . ' ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece = ' . number_format($totalPrice, 2) . ' kr</div>';
            $_SESSION["amount"][$index] = $_POST["amount"][$index];
        }else{
            $totalPrice = ($_POST["amount"][$index] * $product["price"]); //Save as total price
            $totalShoppingChart += $totalPrice; //Calculate total sum of shopping cart
            echo '<div class="orderText">' . $_POST["amount"][$index] . ' ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece = ' . number_format($totalPrice, 2) . ' kr</div>';
            $_SESSION["amount"][$index] = $_POST["amount"][$index];
        }
    }
} echo '<div class="orderText">Total: '  . number_format($totalShoppingChart, 2) . ' kr</div>'; //Total shopping cart
?>