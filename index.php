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
                <p class="welcomeText">Welcome to our appelicious web shop. Please register or sign in to start shopping!</p>

                <!-- include discount text if Monday or Friday -->
                <?php include 'includesAndPartials/indexDiscountText.php';?>

                <a class="btn btn-dark registerButton" href="includesAndPartials/registerForm.php" role="button">Register or sign in</a>

                <?php 
                if(isset($_SESSION["username"])){
                    echo '<div class="orderHeading">Välkommen ' . $_SESSION["username"] . '</div>';
                    echo '<div class="orderText">Happy shopping!</div>';
                } 
                ?>

            </section>
        </div>
    </div>



    <div class="container">
        <div class="row">
<!--            <form class="col-12" action="linda_storgard_crud/view/checkout.php" method="POST">-->
                <div class="row">
                
                <!-- include product array from database -->
                <?php include 'includesAndPartials/productArray.php';?>
                
                

<!--
                    <div class='form-group col-md-6 appleForm'>
                        <img src='images/apple.jpg' alt='apple'>
-->
<!--
                        <label class="appleText" for='ingrid'>Ingrid Marie 2 kr</label>
                        <input class="amountInputField" id="ingrid" name="amount" type="number" min="0">
-->

<!--
                        <form action="views/addToChart.php" method="POST">
                            <label for="amount1"></label>
                            <input class="btn btn-dark" type="submit" id="amount1" name="amount1" value="Add to Chart">
                        </form>
-->
                        
<!--
                    <form action="views/addToChart.php" method="POST">
                    <label for="amount1">amount</label>
                    <input type="text" name="amount1" id="amount1">
                    <input type="submit" value="Register">
                    </form>
-->
             
<!--
                        <form action="views/removeFromChart.php" method="POST">
                            <label for="amount1"></label>
                            <input class="btn btn-dark" type="submit" id="amount1" name="amount1" value="Remove from Chart">
                        </form>
-->
<!--                    </div>-->

<!--
                    <div class='form-group col-md-6 appleForm'>
                        <img src='images/apple.jpg' alt='apple'>
                        <label class="appleText" for='honey'>Honey Crunch 3 kr</label>
                        <input class="amountInputField" id="honey" name="amount" type="number" min="0">

                        <form action="views/addToChart.php" method="POST">
                            <label for="amount2"></label>
                            <input class="btn btn-dark" type="submit" value="Add to Chart">
                        </form>

                        <form action="views/removeFromChart.php" method="POST">
                            <label for="amount2"></label>
                            <input class="btn btn-dark" type="submit" value="Remove from Chart">
                        </form>
                    </div>

                    <div class='form-group col-md-6 appleForm'>
                        <img src='images/apple.jpg' alt='apple'>
                        <label class="appleText" for='rubinstar'>Rubinstar 4 kr</label>
                        <input class="amountInputField" id="ingrid"  name="amount" type="number" min="0">

                        <form action="views/addToChart.php" method="POST">
                            <label for="amount3"></label>
                            <input class="btn btn-dark" type="submit" value="Add to Chart">
                        </form>

                        <form action="views/removeFromChart.php" method="POST">
                            <label for="amount3"></label>
                            <input class="btn btn-dark" type=" submit" value="Remove from Chart">
                        </form>
                    </div>

                    <div class='form-group col-md-6 appleForm'>
                        <img src='images/apple.jpg' alt='apple'>
                        <label class="appleText" for="discovery">Discovery 250 kr</label>
                        <input class="amountInputField" id="discovery" name="amount" type="number" min="0">

                        <form action="views/addToChart.php" method="POST">
                            <label for="amount4"></label>
                            <input class="btn btn-dark" type="submit" value="Add to Chart">
                        </form>

                        <form action="views/removeFromChart.php" method="POST">
                            <label for="amount4"></label>
                            <input class="btn btn-dark" type="submit" name="amount4" value="Remove from Chart">
                        </form>
                    </div>
-->

                </div>


                <?php
//                    $pdo = new PDO(
//                    "mysql:host=localhost; dbname=FED18; charset=utf8",
//                    "root",
//                    "root"
//                    );
                ?>


<!--            </form>-->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col-12">
                <button type="submit" class="btn btn-dark checkoutButton">Go to checkout</button>
                <a class="btn btn-dark checkoutButton" href="includesAndPartials/logout.php" role="button">Logout</a>
            </form>
        </div>
    </div>

    <?php
//    if(isset($_GET["error"])) {
//    echo ($_GET["error"]);
//    }
    ?>

    <!-- include Footer -->
    <?php include 'includesAndPartials/footer.php';?>

</body>

</html>
