<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="stylesheet" href="log-in-style.css">

    <title>Log In</title>
</head>
<body>
    <div class="guide">
        <div class="child">
            <?php 
                //Call Menu Bar
                include 'menu-bar.php'; 
            ?>

            <section class="whole-section">
                <div class="log-in-div">
                    <div class="black-bg">
                        <div>
                            <h1 class="login">LOG IN</h1>
                        </div>
                        <div>
                            <p class="login-text">Please login to save your reservation.</p>
                        </div>
                        <div class="login-form">
                            <form>
                                <p>EMAIL ADDRESS</p>
                                    <input type="email" name="email"  id="email" placeholder="Enter Email">
                                <p>PASSWORD</p>
                                    <input type="password" name="password" id="password" placeholder="Enter Password"><br />
                                    <button class="log-in">LOG IN</button>
                                    <div class="choices">
                                        <div class="line1"></div>
                                        <p class="login-text2">OR</p>
                                        <div class="line2"></div>
                                    </div>
                                    <button class="sign-up">SIGN UP</button>
                            </form>  
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