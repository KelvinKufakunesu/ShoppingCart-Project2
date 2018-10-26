<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- include Head -->
<?php include 'includesAndPartials/head.php';?>

<body>

    <!-- include Header -->
    <?php include 'includesAndPartials/header.php';?>

    <div class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="welcomeHeader">Hi Apple Lover</h1>
                <div class="welcomeText">Welcome to our appelicious web shop. Please register or sign in to start shopping!</div>

                <?php 
                //welcome message to username
                if(isset($_SESSION["username"])){
                    echo '<div class="orderHeading">Välkommen ' . $_SESSION["username"] . '</div>';
                }
                
                //if user is not signed in with username -> error message 
                if(isset($_GET["not_registered"])){
                    echo '<div class="orderText">Register or sign in to start shopping!</div>';
                }?>

                <a class="btn btn-dark registerButton" href="includesAndPartials/registerForm.php" role="button">Register or sign in here</a>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col-12" action="views/addToChart.php" id="formId" method="POST">
                <div class="row">

                    <?php
                    //connect to data base
                    include 'includesAndPartials/databaseConnection.php';
                    
                    include 'includesAndPartials/productArray.php';

                    //Loops through products and echoes to index-page
                    foreach($products as $product){
                        echo "<div class='form-group col-md-6 appleForm'>";
                        echo "<img src='images/apple.jpg' alt='apple'>";
                        echo '<label class="appleText" for=' . $product["name"] . '> ' . str_replace("_", " ", $product["name"]) . ' ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
                        echo '<input class="amountInputField" id=' . $product["name"] . ' name=' . $product["name"] . ' type="number" min="0">';
                        echo "</div>";
                    }?>
                    <button type="submit" class="btn btn-dark addButton">Add to apple chart</button>
                    <a class="btn btn-dark" href="views/removeFromChart.php" role="button">Delete your shopping chart</a>
                    
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col-12">
                <div class="row">
                    <a class="btn btn-dark checkoutButton" href="includesAndPartials/logout.php" role="button">Logout</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_GET["error"])) {
    echo ($_GET["error"]);
    }
    ?>

    <!-- include Footer -->
    <?php include 'includesAndPartials/footer.php';?>

</body>
</html>