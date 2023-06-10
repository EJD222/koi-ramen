<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="thank-you-style.css">
    <link rel="icon" type="image/png" href="/images/no-text.png"/>
    <title>Thank You for Booking!</title>
</head>
<body>
<div class="guide">
        <div class="child">
            <header>
            <?php 
                //Call Menu Bar
                include 'menu-bar.php'; 
            ?> 
            </header>

            <section class="thank-you-section">
                <div class="thank-you-div">
                    <div class="thank-you-details">
                        <p class="ty-title">THANK YOU <br /> FOR CHOOSING <br /> KOI RAMEN!</p>
                        <p class="ty-details"> 
                            We are thrilled to confirm your reservation for <span><?php echo $_GET['date']; ?></span> at <span><?php echo $_GET['time']; ?></span>. We look <br />
                            forward to welcoming you and ensuring a delightful culinary journey at our<br />
                            restaurant.<br />
                            <br />
                            Please note that your reservation is for <span><?php echo $_GET['guests']; ?></span> persons. If <br />
                            there are any changes or updates to your reservation, kindly inform us in <br />
                            advance, and we will be happy to assist you.<br />
                            <br />
                            At Koi Ramen, we strive to provide an exceptional dining experience, offering<br />
                            a wide selection of authentic Japanese ramen dishes crafted with the utmost <br />
                            care and attention to detail. Our team of talented chefs will be preparing each <br />
                            bowl with the freshest ingredients and a dedication to culinary excellence.
                        </p>

                        <button type="button" class="return-button" onclick="window.location.href='reset-session.php'">RETURN</button>
                    </div>
                    <div class="thank-you-image">
                        <img src = "/images/japanese-restaurant.jpg" alt="Japanese Restaurant" class="japanese-restaurant"/>
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