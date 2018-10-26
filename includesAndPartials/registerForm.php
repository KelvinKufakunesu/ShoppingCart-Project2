<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- include Head -->

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
    <!-- include Header -->
    <header>
        <div class="col-12 flexthis">
            <a href="/linda_storgard_crud/index.php"><i class="fas fa-apple-alt icon"></i></a>
            <p class="heading">The Apple Shop</p>
        </div>
    </header>

    <div class="container">
        <div class="row appleForm">
            <section class="col-12">
                <h1 class="welcomeHeader">Please register with username and password</h1>
                <p class="welcomeText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto velit minima consequuntur officia harum odio saepe, voluptate minus!</p>
            </section>
        </div>
    </div>

    <div class="container">
        <main class="row checkoutForm">
            <section class="col-12">
                <div class="loginText">Register</div>

                <!--   post for to register.php-->
                <form action="register.php" method="POST">
                    <label for="register_username"></label>
                    <input type="text" name="username" id="register_username" placeholder="Username" required>
                    <label for="register_password"></label>
                    <input type="text" name="password" id="register_password" placeholder="Password" required>
                    <input class="btn btn-dark" type="submit" value="Register">
                </form>
                
                <div class="loginText">Login</div>
                <form action="../views/login.php" method="POST">
                    <label for="login_username"></label>
                    <input type="text" name="username" id="login_username" placeholder="Username" required>
                    <label for="login_password"></label>
                    <input type="text" name="password" id="login_password" placeholder="Password" required>
                    <input class="btn btn-dark" type="submit" value="Login">
                </form>

                <?php
                //handle failed login
                if(isset($_GET["login_failed"])){
                    echo '<div class="orderText">Skriv in rätt användarnamn och lösenord</div>';
                }
                
                //if login is done correctly -> show welcome message
                if (isset($_SESSION["username"])){
                    echo '<div class="orderText">Welcome ' . $_SESSION["username"] . '</div>';
                    echo '<a class="btn btn-dark logoutButton" href="../index.php" role="button">Start shopping</a>';
                }?>
                
            </section>
        </main>
    </div>

    <footer>
        <p class="footerText">Shop 'til you drop</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>