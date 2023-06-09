<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="book-now-style.css">

    <title>Book Now</title>
</head>
<body>
    <div class="guide">
        <div class="child">
            <?php 
                //Call Menu Bar
                include 'menu-bar.php'; 
            ?> 

            <section class="bookatn-section">
                <div class="bookatn-div">
                    <div class="batn-img">
                        <img src = "/images/book-now.jpeg" alt="Book Now" class="book-now"/>
                    </div>
                    <div class="batn-details">
                        <p class="batn-title">BOOK A TABLE<br />NOW!</p>
                        <p class="batn-tagline">We are pleased to serve you.</p>
                        <p class="batn-desc">Here at KOI RAMEN, we believe that exceptional dining experiences <br />
                           go beyond just great food. Our warm and attentive staff is dedicated to <br />
                           providing impeccable service, ensuring that your visit is nothing short <br />
                           of extraordinary. Whether you're joining us for a romantic dinner, a <br />
                           casual lunch, or a gathering with friends, our team is here to create <br />
                           lasting memories.<br />
                           <br />
                           So, why wait? Come and embark on a culinary journey that celebrates <br />
                           the art of ramen at Koi Ramen. Indulge your senses, embrace the warmth of <br />
                           Japanese hospitality, and discover why we are the destination for the <br />
                           finest ramen in. Book your table today and prepare to be captivated by <br />
                           the exquisite flavors and enchanting atmosphere that await you at Koi Ramen.<br />
                        </p>
                        <button type="button" class="book-now-button" onclick="window.location.href='login.php'">BOOK NOW</button>
                    </div>
                </div>
            </section>

            <section class="lfq-section">
                <div class="lfq-div">
                    <div class="lq-div">
                        <div class="hr-line">
                            <hr>
                        </div>
                        <div class="quote">
                            <pc class="quote-text">“Experience the soulful allure of Ramen, where <br />
                                every bite takes you on a tantalizing adventure <br />
                                of flavors. At Koi Ramen, we serve more than <br />
                                just a dish – we serve a captivating tale woven <br />
                                with passion and culinary expertise.” <br />
                            </p>
                        </div>
                    </div>
                    <div class="fish">
                        <img src = "/images/koi-fish2.png" alt="Koi Fish 2" class="koi-fish2"/>
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