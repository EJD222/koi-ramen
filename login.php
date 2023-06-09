<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
<link rel="stylesheet" href="login-style.css">



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    <div class="guide">
        <div class="child">
    <?php 
        //Call Menu Bar
        include 'menu-bar.php'; 
    ?>

    <section class="whole-section">

    <!---BACKGROUND--->

    <div class= "login-bg">
    <img src="images/login.png" alt= "Login">
    </div>

    <div class="black-bg"></div>


    <!---LOGINFORM--->
    <div>
        <h1  class="login">LOG IN
    </div>

    <div>
        <p  class="login-text">Please login to save your reservation.
    </div>

    <div class="line1"></div>

    <div><p class="login-text2">OR</div>

    <div class="line2"></div>

    <form action="login-function.php" method="POST">
    <div class="login-form">
        <p>EMAIL ADDRESS</ADDRESS><p>
            <input type="email" name="email" placeholder="Enter Email">

        <p>PASSWORD<p>
            <input type="password" name="password" placeholder="Enter Password">

            <button class="log-in">LOG IN</button>

            <button type="button" class="sign-up" onclick="window.location.href='signup.php'">SIGN UP</button>
    </div>
    </form>
    </section>

    <?php 
        //Call Footer
        include 'footer.php'; 
    ?> 
    </div>
        </div>
</body>
</html>