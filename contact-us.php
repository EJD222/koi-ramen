<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="contact-us-style.css">

    <title>Contact Us</title>
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

            <section class="contact-us-section">
                <div class="cs-welcome">
                    <div class="cs-w2">
                            <div class="contact-us-details">
                                <p class="cs-text">CONTACT US!</p>
                                <p class="cs-tagline">We’d love to hear from you!</p>
                                <br/>
                                <p class="cs-details">At Koi Ramen, we truly value your feedback and opinions. Your satisfaction
                                is our top priority, and we strive to provide the best dining experience 
                                possible. We believe that constructive criticism and suggestions are vital in 
                                helping us grow and improve. Whether you had an amazing dining 
                                experience or encountered any issues, we genuinely want to hear from 
                                you. Your comments and suggestions allow us to understand your needs 
                                better, tailor our services to exceed your expectations, and create
                                memorable moments for you and all our valued guests. 
                                <br/>
                                <br/>
                                Whether you have a question, suggestion, or comment, we're here to 
                                listen. Your feedback helps us understand what we're doing right and 
                                where we can make enhancements. We want to ensure that every visit to 
                                our restaurant exceeds your expectations.
                                <br/>
                                <br/>
                                Please feel free to reach out!
                            </div>    
                            <div class="contact-us-photo">
                                <img src = "/images/night-market.jpg" alt="Night Market" class="night-market"/>
                            </div> 
                    </div>   
                </div>
            </section>

            <section class="contact-us-form-section">    
                <div class="cs-form">
                    <div class="form-container">
                        <form action="contact-function.php" method="POST">
                            <label for="name">NAME</label>
                            <input type="text" name="name" required/><br />

                            <label for="email">EMAIL ADDRESS</label>
                            <input type="email" name="email" required/><br />

                            <label for="subject">SUBJECT</label>
                            <input type="text" name="subject" required/><br />

                            <label for="message">MESSAGE</label>
                            <textarea name="message" id="message"></textarea><br />

                            <button type="submit" value="Submit" class="submit-button">SUBMIT</button>
                        </form>
                    </div>

                    <div class="cs-logo-info">
                        <div class="cs-logo-info-container">
                            <div class="ad-div">
                                <div class="logo-cont">
                                    <img src = "/images/address-icon.png" alt="Address Icon" class="address-icon"/>
                                </div>
                                <div class="address-info">
                                    <p class="logo-info-title">ADDRESS</p>
                                    <p class="logo-info-details">Unit 01 Building A, Manuel A. Roxas <br />
                                    Highway, Clark Freeport Zone, Angeles City, <br />
                                    Pampanga<br />
                                    </p>  
                                </div> 
                            </div>

                            <div class="cn-div">
                                <div class="logo-cont">
                                    <img src = "/images/contact-icon.png" alt="Contact Icon" class="contact-icon"/>
                                </div>
                                <div class="contact-number-info">
                                    <p class="logo-info-title">CONTACT NUMBER</p>
                                    <p class="logo-info-details">0912-345-6789</p>  
                                </div> 
                            </div>

                            <div class="em-div">
                                <div class="logo-cont">
                                    <img src = "/images/email-icon.png" alt="Email Icon" class="email-icon"/>
                                </div>
                                <div class="email-info">
                                    <p class="logo-info-title">EMAIL ADDRESS</p>
                                    <p class="logo-info-details">koiramen@gmail.com</p>  
                                </div> 
                            </div> 
                        </div> 
                    </div>  
                </div>
            </section>    
            
            <section class="ramen-bar-section">
                <div class="ramen-bar-img">
                    <img src = "/images/customer.jpg" alt="Customer" class="customer" />
                    <p class="soc-med-tag">@koiramen</p>
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