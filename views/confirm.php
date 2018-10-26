<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Montserrat" rel="stylesheet">

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My css-->
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <title>The Apple Shop</title>
</head>

<body>
    <header>
        <div class="col-12 flexthis">
            <a href="/linda_storgard_crud/index.php"><i class="fas fa-apple-alt icon"></i></a>
            <p class="heading">The Apple Shop</p>
        </div>
    </header>

    <div class="container">
        <div class="row appleForm">
            <section class="col-12">
                <h1 class="welcomeHeader">Thank you for shopping with us <?=$_SESSION["username"]?></h1>
                <p class="welcomeText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto velit minima consequuntur officia harum odio saepe, voluptate minus!</p>
            </section>
        </div>
    </div>

    <div class="container">
        <main class="row checkoutForm">
            <section class="col-12">
                <h2 class="orderHeading">Your order</h2>
                
                <!-- php för checkout -->
                <?php
                $pdo = new PDO(
                "mysql:host=localhost;dbname=FED18;charset=utf8",
                "root", //user
                "root"  //password
                );
                
                $username = $_SESSION["username"];
                //Prepare a SQL-statement
                $statement = $pdo->prepare("SELECT * FROM orders WHERE username = :username");
                //Execute it
                $statement->execute(
                [
                    ":username" => $username
                ]
                );
                //Fetch every row that it returns. $products is now an Associative array
                $products = $statement->fetchAll(PDO::FETCH_ASSOC);
                
                //check if I get the right array back
                //highlight_string("<?php =\n" . var_export($products, true) . ";\n");
                
                //loop through product array
                $totalShoppingChart = 0;
                foreach($products as $product){
                    $totalPrice = ($product["amount"] * $product["price"]); //Save as total price
                    $totalShoppingChart += $totalPrice; //Calculate total sum of shopping cart
                    echo '<div class="orderText">' . $product["amount"] . ' ' . str_replace("_", " ", $product["name"]) . ' ' . $product["price"] . ' kr/styck = ' . $totalPrice . ' kr</div>'; 
                }
                echo '<div class="orderText">Total: '  . number_format($totalShoppingChart, 2) . ' kr</div>'; 
                echo '<div class="orderText">A confirmation has been sent to: '  . $_SESSION["username"] . '</div>'; //confirmation sent to username 
                
                
                //when confirmation is done delete all products from chart where username is logged in username
                $username = $_SESSION["username"];                

                $statement = $pdo->prepare("DELETE FROM orders WHERE username = :username");
                $statement->execute(
                [
                    ":username" => $username
                ]);
                ?>

            </section>
        </main>
    </div>

    <div class="container">
        <div class="row">
            <form class="col-12">
                <a class="btn btn-dark checkoutButton" href="../includesAndPartials/logout.php" role="button">Logout</a>
            </form>
        </div>
    </div>

    <!-- include Footer -->
    <?php include '../includesAndPartials/footer.php';?>

</body>
</html>