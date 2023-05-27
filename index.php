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
                    <img src = "/images/ramen-bar.jpg" alt="Ramen Bar" width="700" height="500" class="ramen-bar-w"/>
                    <img src = "/images/center-piece.png" alt="Ramen" width="500" height="500" class="center-piece-w"/>
                </div>
            </section>

            <section class="icons-section">
                <div class="authentic-div">
                    <div class="authentic-details">
                        <img src = "/images/authentic.png" alt="Authentic" width="100" height="100" class="authentic"/>
                        <p class="authentic-lbl">Authentic</p>
                    </div>
                </div>
                <div class="flavorful-div">
                    <div class="horizontal-line-1"></div>
                    <div class="flavorful-details">
                        <img src = "/images/flavorful.png" alt="Flavorful" width="100" height="100" class="flavorful"/>
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
                <img src = "/images/about-ramen.png" alt="About Ramen" width="1903" height="1925" class="about-ramen"/>
                <img src = "/images/wave2.png" alt="Wave 2" width="1903" height="110" class="wave2"/>
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
                                <p class="critic-author2">— Carlos Gomez, Food <br />
                                    Explorer Magazine 
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
                <p> SIGNATURE BOWLS </p>
                <img src = "/images/koi.png" alt="Koi Circle" width="400" height="450"/>
                <img src = "/images/hokkaido-miso-ramen.png" alt="Hokkaido Miso Ramen" width="300" height="300"/>
                <img src = "/images/spicy-beef-ramen.png" alt="Spicy Beef Ramen" width="200" height="200"/>
                <img src = "/images/black-garlic-chicken-ramen.png" alt="Black Garlic Chicken Ramen" width="200" height="200"/>
                <img src = "/images/arrow.png" alt="Arrow" width="100" height="88"/>
                <p>Hokkaido Miso Ramen</p>
                <img src = "/images/arrow.png" alt="Arrow" width="100" height="88"/>
                <p>A rich and hearty noodle soup with <br />
                a savory miso broth, topped with <br />
                various ingredients. <br />
                </p>
                <p>P500</p>
                <button type="button">MENU</button>
            </section>

            <section class="contact-us-section">
                <div class="contact-us-div">
                    <div class="contact-us-images">
                        <img src = "/images/wave4-cropped.png" alt="Wave 4 Cropped" width="1347.99" height="607.89" class="wave-4-cropped"/>
                        <img src = "/images/night-market.jpg" alt="Wave 4" style="width: 758px; height: 968px; object-fit: cover;" class="night-market"/>
                    </div>
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
                        <img src = "/images/wave4-cropped-2.png" alt="Wave 4 Cropped 2" width="557" height="382" class="wave-4-cropped2"/>
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



</body>
</html>