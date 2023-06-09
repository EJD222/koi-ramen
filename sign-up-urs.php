<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="sign-up-urs-style.css">

    <title>Successful Registration</title>
</head>
<body>
    <div class="guide">
        <div class="child">
            <?php 
                //Call Menu Bar
                include 'menu-bar.php'; 
            ?>

            <section class="message-section">
                <div class="message-div">
                    <div class="message-container">
                        <p class="main-error"> USER REGISTERED <br /> SUCCESSFULLY! </p>
                        <p class="error-desc"> Your can now use your registered account. </p>
                        <p  class="error-details"> Please use the email and password you entered during the Sign Up to Log In and book your table. Thank you. </p>
                        <button type="button" class="return-button" onclick="window.location.href='login.php'">PROCEED TO LOG IN</button>
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