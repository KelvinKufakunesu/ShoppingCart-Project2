<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- include Head -->
<?php include '../includesAndPartials/head.php';?>

<body>
    <!-- include Header -->
    <?php include '../includesAndPartials/header.php';?>
    
    <div class="container">
        <div class="row appleForm">
            <section class="col-12">
                <h1 class="welcomeHeader">Shopping cart</h1>
                <p class="welcomeText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto velit minima consequuntur officia harum odio saepe, voluptate minus!</p>
            </section>
        </div>
    </div>

    <div class="container">
        <main class="row checkoutForm">
            <section class="col-12">
                <h2 class="orderHeading">This is your appelicious order:</h2>
                
                <!-- include Product Array -->
                <?php include '../includesAndPartials/productArray.php';?>
                
                <!-- include Foreach Loop for Checkout -->
                <?php include '../includesAndPartials/checkoutForeachLoop.php';?>
                
                <!-- include Personal Details from form -->
                <?php include '../includesAndPartials/checkoutPersonalDetails.php';?>

                <a class="btn btn-dark returnButton" href="../index.php" role="button">Return to start</a>
            </section>
        </main>
    </div>
    
    <!-- include Footer -->
    <?php include '../includesAndPartials/footer.php';?>

</body>
</html>