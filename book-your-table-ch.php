<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="book-your-table-ch-style.css">
    <link rel="icon" type="image/png" href="/images/no-text.png"/>
    <title>Closing Hours</title>
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
                        <p class="main-error"> UH OH! YOU SELECTED <br /> OUR CLOSING HOURS! </p>
                        <p class="error-desc"> Please choose a different time. </p>
                        <p  class="error-details"> We appreciate you choosing Koi Ramen but you can not reserve during closing hours. Please choose a new time slot. </p>
                        <button type="button" class="return-button" onclick="window.location.href='book-your-table.php'">RETURN TO BOOKING</button>
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