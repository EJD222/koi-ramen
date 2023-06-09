<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
<link rel="stylesheet" href="signup-style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="signup-validation.js"></script>
    <title>Sign Up</title>
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

    <div class= "signup-bg">
    <img src="images/signup.png" alt= "SignUp">
    </div>

    <div class="black-bg"></div>

    <!---SIGN UP FORM--->
    <div>
        <h1  class="signup">SIGN UP
    </div>

    <div>
        <p  class="signup-text">Please create an account.
    </div>

    <form name="signupform" action="signup-function.php" method="POST" onsubmit="return validateForm()">
    <div class="signup-form">
        <p>USER NAME</ADDRESS><p>
            <input type="text" name="user_name" placeholder="Enter Username" required>

        <p>EMAIL ADDRESS<p>
            <input type="email" name="email"  placeholder="Enter Email Address" required>

        <p>PASSWORD<p>
            <input type="password" name="password" placeholder="Enter Password" minlenght = 8 required>

        <p>CONFIRM PASSWORD<p>
            <input type="password" name="confirm_password" placeholder="Confirm Password">

            <button class="sign-up">SIGN UP</button>
    </div>
    </form>

    <div>
        <p class="signup-text2">Already have an account? <a href="login.php">Login</a></p>
    </div>
    </section>

    <?php 
        //Call Footer
        include 'footer.php'; 
    ?> 
    </div>
        </div>
</body>
</html>