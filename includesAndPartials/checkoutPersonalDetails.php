<?php
//Posting Personal Information on logout page and saving in session       
if (isset($_POST["name"]) && (strlen($_POST["name"]) >= 1)){
    $_SESSION["name"] = $_POST["name"];
    echo '<div class="orderTextTop">' . 'Name: ' . $_SESSION["name"] . '</div>';
}  
if (isset($_POST["address"]) && (strlen($_POST["address"]) >= 1)){
    $_SESSION["address"] = $_POST["address"];
    echo '<div class="orderText">' . 'Address: ' . $_SESSION["address"] . '</div>';
}
if (isset($_POST["number"]) && (strlen($_POST["number"]) >= 1)){
    $_SESSION["number"] = $_POST["number"];
    echo '<div class="orderText">' . 'Mobile number: ' . $_SESSION["number"] . '</div>';
}   
if (isset($_POST["email"]) && (strlen($_POST["email"]) >= 1)){
    $_SESSION["email"] = $_POST["email"];
    echo '<div class="orderText">A confirmation will be sent to:</div>';
    echo '<div class="orderText">' . 'E-mail: ' . $_SESSION["email"] . '</div>';
}?>