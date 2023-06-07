<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dynalight&family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">

    <title>Home</title>
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

            <section class="welcome-section">
                <div class="welcome-div">
                    <p class="tagline">experience noodle nirvana!</p>
                    <p class ="brand-name">KOI RAMEN</p>
                </div>
                <div class ="welcome-images">
                    <img src = "/images/ramen-bar.jpg" alt="Ramen Bar" style="width: 1182.52px; height: 462.6px; object-fit: cover;" class="ramen-bar-w"/>
                    <img src = "/images/center-piece.png" alt="Ramen" style="width: 957.07px; height: 959.33px; object-fit: cover;" class="center-piece-w"/>
                </div>
            </section>

            <section class="icons-section">
                <div class="authentic-div">
                    <div class="authentic-details">
                        <img src = "/images/authentic.png" alt="Authentic" class="authentic"/>
                        <p class="authentic-lbl">Authentic</p>
                    </div>
                </div>
                <div class="flavorful-div">
                    <div class="horizontal-line-1"></div>
                    <div class="flavorful-details">
                        <img src = "/images/flavorful.png" alt="Flavorful" class="flavorful"/>
                        <p class="flavorful-lbl">Flavorful</p>
                    </div>
                    <div class="horizontal-line-2"></div>
                </div>
                <div class="quality-div">
                    <img src = "/images/quality.png" alt="Quality" width="100" height="100" class="quality"/>
                    <p class="quality-lbl">Quality</p>
                </div>
            </section>

            <section class="about-us-section">
                <div class="about-details">
                    <p class="about-tagline">Indulge in the Artistry of <br />Flavor at Koi Ramen: <br />Where Culinary Mastery <br />Meets Noodle Bliss!</p>
                    <p class="about-tagline-details">Experience the exquisite fusion of culinary mastery <br />
                    and noodle bliss at Koi Ramen, where every bowl is a <br />
                    celebration of artistry and flavor, tantalizing your <br />
                    taste buds with each savory spoonful. Discover the <br />
                    harmonious fusion of artistry and noodle perfection <br />
                    that awaits you at our esteemed establishment. <br />
                    <button type="button" class="about-button" onclick="window.location.href='about-us.php'">ABOUT US</button>
                </div>
                <img src = "/images/about-ramen.png" alt="About Ramen" class="about-ramen"/>
                <img src = "/images/wave2.png" alt="Wave 2" class="wave2" />
            </section>
    
            <section class="ramen-chronicles-section">
                <div class="ramen-chronicles-div">
                    <div class="ramen-chronicles-div2">
                        <p class= "rc-title">RAMEN CHRONICLES</p>
                        <div class="ramen-chronicles-testimonials">
                            <div class="ramen-testimonials-1">
                                <p class="testimonials">“Koi Ramen has taken the Philippine <br />
                                    food scene by storm, earning accolades <br />
                                    from local food magazines like Flavors <br />
                                    of Manila. Their authentic ramen bowls <br />
                                    are a gastronomic delight that keeps  <br />
                                    patrons coming back for more.” <br />
                                </p>
                                <p class="critic-author1">— Maria Santos, Flavors <br />
                                    of Manila Magazine
                                </p>
                            </div>
                            <div class="ramen-testimonials-2">
                                <p class="testimonials">“Food Explorer Magazine raves about <br />
                                    Koi Ramen, the new ramen sensation <br />
                                    captivating taste buds across the <br />
                                    Philippines. From the rich broths to the <br />
                                    perfectly cooked noodles, Koi Ramen <br />
                                    delivers an unforgettable dining <br />
                                    experience.” <br />
                                <p class="critic-author2">— Carlos Gomez, 
                                    Food <br /> Explorer Magazine 
                                </p>
                            </div>
                            <div class="ramen-testimonials-3">
                                <p class="testimonials">"Renowned food critic Juanita <br />
                                    Fernandez applauds Koi Ramen's artful <br />
                                    approach to ramen. The harmonious <br />
                                    blend of flavors and top-notch <br />
                                    ingredients make Koi Ramen a standout <br />
                                    destination for ramen enthusiasts." <br />
                                </p>
                                <p class="critic-author3">— Juanita Fernandez, <br />
                                    Food Critic <br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="menu-section">
                <div class="menu-div">
                    <div class="gradient-top">
                        <p class="sb-title"> RAMEN HIGHLIGHTS </p>
                    </div>

                    <div class="menu-selection">

                        <div class="menu-images">
                            <div class="menu-1">
                                <img src = "/images/spicy-beef-ramen.png" alt="Spicy Beef Ramen" class="spicy-beef-ramen" id="spicy-beef-ramen"/>
                            </div>
                            <div class="menu-2">
                                <img src = "/images/hokkaido-miso-ramen.png" alt="Hokkaido Miso Ramen" class="hokkaido-miso-ramen" id="hokkaido-miso-ramen"/>
                            </div>
                            <div class="menu-3">
                                <img src = "/images/black-garlic-chicken-ramen.png" alt="Black Garlic Chicken Ramen" class="black-garlic-chicken-ramen" id="black-garlic-chicken-ramen"/>
                            </div>
                        </div>

                        <div class="menu-swipe">
                            <div class="arrow-1">
                                <img src = "/images/left-arrow.png" alt="Left Arrow" width="100" height="88"/>
                            </div>
                            <div class="menu-name">
                                <p class="ramen-name">Hokkaido Miso Ramen</p>
                            </div>
                            <div class="arrow-2">
                                <img src = "/images/right-arrow.png" alt="Right Arrow" width="100" height="88"/>
                            </div>
                        </div>   
                        
                        <div class="menu-details">
                            <p class="ramen-detail" id="ramen-detail">
                            A delectable and savory dish <br />
                            originating from the northernmost <br />
                            island of Japan, Hokkaido. 
                            </p>
                            <p class="ramen-price" id="ramen-price">P500</p>
                        </div>   
                        
                        <div class="menu-bt-container" id="menu-button-container">
                            <button type="button" class="menu-button" onclick="window.location.href='menu-ramen.php'">MENU</button>
                        </div>  
                    </div>

                    <div class="gradient-bottom">
                    </div>
            </section>

            <section class="contact-us-section">
                <div class="contact-us-div">
                    <img src = "/images/contact-us-background.png" alt="Contact Us Background" class="contact-us-bg"/> 
                    <div class="contact-us-details">
                        <div class="contact-us-text">
                            <p class="cs-title">Reach Out and Let Your<br />
                                Ramen Cravings Be <br />
                                Heard - We're Here to <br />
                                Listen and Serve You! <br />
                            </p>
                            <p class="cs-details">Thank you for your interest in Koi Ramen! We  
                            value your feedback and are excited to hear from 
                            you. Whether you have a question, comment, or suggestion, 
                            please feel free to reach out to us. 
                            Our dedicated team is here to assist you in any 
                            way we can. 
                            </p>
                            <button type="button" class="contact-button" onclick="window.location.href='contact-us.php'">CONTACT US</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="quote-section">
                <div class="quote-div">
                    <div class="q-wave">
                        <img src="/images/wave6.png" alt="Wave 6" width="1485" height="653" class="wave6" />
                    </div>
                    <div class="quote-container">
                        <p class="ramen-quote">“Ramen: A culinary<br>masterpiece that<br>warms the heart and<br>satisfies the soul.”</p>
                        <img src="/images/springbits-group.png" alt="Spring Bits Group" width="602" height="449" class="springbits-group" />
                    </div>
                    <div class="q-creamy-ramen">
                        <img src="/images/creamy-ramen.png" alt="Creamy Ramen" width="690" height="485" class="creamy-ramen" />
                </div>
                </div>
            </section>

            <section class="mq-section">
                <div class="mq-div">
                    <marquee loop>
                    <p>
                        <span class="ramen-magic">RAMEN MAGIC,</span>
                        <span class="made-inclusive"> made inclusive!</span>
                        <span class="space"> </span>
                        <span class="ramen-magic">RAMEN MAGIC,</span>
                        <span class="made-inclusive">made inclusive!</span>
                        <span class="space"> </span>
                        <span class="ramen-magic">RAMEN MAGIC,</span>
                        <span class="made-inclusive">made inclusive!</span>
                        <span class="space"> </span>
                        <span class="ramen-magic">RAMEN MAGIC,</span>
                        <span class="made-inclusive">made inclusive!</span>
                        <span class="space"> </span>
                        <span class="ramen-magic">RAMEN MAGIC,</span>
                        <span class="made-inclusive">made inclusive!</span>
                    </p>
                    </marquee>
                </div>
            </section>

            <section class="chef-section">
                <div class="chef-div">
                  <img src = "/images/chef.jpg" alt="Chef" width="663" height="994" class="chef"/>
                </div>
            </section>

            <section class="book-now-section">
                <div class="book-now-div">
                    <div class="resrv-and-button">
                        <p class = "reserve-now">Reserve Your Spot for a<br/> Memorable 
                        Ramen Experience!
                        </p>
                        <button type="button" class="book-now-button" onclick="window.location.href='book-now.php'">BOOK NOW</button>
                    </div>   
                    <div class="bk-images">
                        <img src = "/images/lantern.jpg" alt="Lantern" class="lantern"/>
                        <img src = "/images/eating-ramen.jpg" alt="Eating Ramen" class="eating-ramen"/>
                        <img src = "/images/chef2.jpg" alt="Chef 2" class="chef2"/>
                    </div>   
                </div>
            </section>

            <footer>
                <?php 
                //Call Footer
                include 'footer.php'; 
                ?> 
            </footer>
                
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>