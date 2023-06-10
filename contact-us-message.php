<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="contact-us-message-style.css">
    <link rel="icon" type="image/png" href="/images/no-text.png"/>

    <title>Message Received</title>
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
                        <p class="main-error"> THANK YOU FOR <br /> CONTACTING US! </p>
                        <p class="error-desc"> Your message has been successfully sent. </p>
                        <p  class="error-details"> We appreciate your time and effort in contacting us, and our team will review your message promptly. If needed, we will get back to you as soon as possible.</p>
                        <button type="button" class="return-button" onclick="window.location.href='index.php'">RETURN TO HOME</button>
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