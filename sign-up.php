<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="sign-up-style.css">

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
                <div class= "sign-up-div">
                    <div class="black-bg">
                        <div>
                            <h1  class="signup">SIGN UP</h1>
                        </div>
                        <div>
                            <p  class="signup-text">Please create an account.</p>
                        </div>
                        <div class="signup-form">
                            <form>
                                <p>USER NAME</p>
                                    <input type="text" name="username"  id="user_name" placeholder="Enter Email">
                                <p>EMAIL ADDRESS</p>
                                    <input type="email" name="email_address" id="email_address" placeholder="Enter Password">
                                <p>PASSWORD</p>
                                    <input type="password" name="password" id="password" placeholder="Enter Password">
                                <p>CONFIRM PASSWORD</p>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"> <br /  >
                                    <button class="sign-up">SIGN UP</button>
                            </form>
                        </div>
                        <div>
                            <p class="signup-text2">Already have an account? <a href="log-in.php">Login</a></p>
                        </div>

                    </div>
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