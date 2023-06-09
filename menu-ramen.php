<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dynalight&family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="menu-ramen-style.css">

    <title>Menu</title>
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

        <section class="menu-banner">
            <div class="menu-banner-div">
                <p class="menu-title">MENU</p>
                <img src = "/images/menu-header.jpg" alt="Japanese Lights" class="japanese-lights"/>
            </div>
        </section>

        <section class="wave-top">
            <div class="wave-t-container">
                <img src = "/images/wave2.png" alt="Wave 2" class="wave2" />
            </div>
        </section>

        <section class="menu-list">
            <div class="menu-div">
                <div class="sb-div">
                    <p class="sb-title">SIGNATURE BOWLS</p>
                </div>

                <div class="ramen-bowls-div">
                    <div class="ramen-bowls-left">
                        <div class="hm-ramen">
                            <img src = "/images/hokkaido-miso-bowl.png" alt="Hokkaido Miso Bowl" class="hokkaido-miso-bowl" />
                            <p class="ramen-title">Hokkaido Miso Ramen</p>
                            <p class="ramen-details">A delectable and savory dish originating from the northernmost <br/>
                               island of Japan, Hokkaido. Known for its rich flavors and hearty <br/>
                               ingredients, this ramen variation is beloved for its satisfying and <br/>
                               comforting qualities. 
                            </p>
                            <p class="ramen-price">P560</p>
                        </div>
                        <div class="bgc-ramen">
                            <img src = "/images/black-garlic-chicken-bowl.png" alt="Black Garlic Chicken Ramen" class="black-garlic-chicken-bowl" />
                            <p class="ramen-title">Black Garlic Chicken Ramen</p>
                            <p class="ramen-details">
                            A captivating and aromatic twist on the traditional Japanese<br/>
                            noodle dish. This unique ramen variation combines the richness of <br/>
                            black garlic with tender, succulent chicken to create a <br/>
                            truly exceptional culinary experience.
                            </p>
                            <p class="ramen-price">P520</p>
                        </div>
                        <div class="tys-ramen">
                            <img src = "/images/tom-yum-shrimp-bowl.png" alt="Tom Yum Shrimp Ramen" class="tom-yum-shrimp-bowl" />
                            <p class="ramen-title">Tom Yum Shrimp Ramen</p>
                            <p class="ramen-details">
                            A delightful fusion of Thai and Japanese cuisines. This <br/>
                            exquisite ramen variation combines the aromatic and tangy notes <br/>
                            of Tom Yum, a popular Thai soup, with the comforting and <br/>
                            satisfying elements of traditional ramen.
                            </p>
                            <p class="ramen-price">P500</p>
                        </div>                 
                        <div class="sm-ramen">
                            <img src = "/images/spicy-miso-bowl.png" alt="Spicy Red Miso Ramen" class="spicy-miso-bowl" />
                            <p class="ramen-title">Spicy Red Miso Ramen</p>
                            <p class="ramen-details">
                            A captivating and bold rendition of the classic Japanese noodle soup. <br/>
                            This mouthwatering dish combines the complex flavors of red miso  <br/>
                            paste with a kick of heat, resulting in a harmonious blend of richness <br/>
                            and spice that will leave you longing for each delectable slurp.
                            </p>
                            <p class="ramen-price">P520</p>
                        </div>
                    </div>

                    <div class="menu-line">
                    </div>

                    <div class="ramen-bowls-right">
                        <div class="ramen-top">
                            <div class="hsm-ramen">
                                <img src = "/images/hokkaido-spicy-miso-bowl.png" alt="Hokkaido Spicy Miso Ramen" class="hokkaido-spicy-miso-bowl" />
                                <p class="ramen-title">Hokkaido Spicy Miso Ramen</p>
                                <p class="ramen-details">
                                A tantalizing variation of the classic Japanese dish, originating <br/>
                                from the northernmost island of Hokkaido. This fiery and flavorful ramen is <br/>
                                renowned for its harmonisous blend of umami-rich ingredients and a <br/>
                                kick of spice that will ignite your taste buds.
                                </p>
                                <p class="ramen-price">P550</p>
                            </div>
                        </div>

                        <div class="ramen-bottom">
                            <div class="cc-ramen">
                                <img src = "/images/creamy-chicken-bowl.png" alt="Creamy Chicken Ramen" class="creamy-chicken-bowl" />
                                <p class="ramen-title">Creamy Chicken Ramen</p>
                                <p class="ramen-details">
                                Indulge in the heavenly richness of our creamy chicken ramen. <br/>
                                Immerse your taste buds in a luscious blend of chicken broth, infused <br/>
                                with the delicate flavors. Each spoonful delivers a harmonious <br/>
                                symphony of textures, leaving you craving for more.
                                </p>
                                <p class="ramen-price">P520</p>
                            </div>
                            <div class="p-ramen">
                                <img src = "/images/paitan-bowl.png" alt="Paitan Ramen" class="paitan-bowl" />
                                <p class="ramen-title">Paitan Ramen</p>
                                <p class="ramen-details">
                                A culinary delight hailing from Japan. This exquisite <br/>
                                ramen style boasts a velvety and luxurious broth <br/>
                                that is sure to captivate your taste buds and <br/>
                                leave you craving more.
                                </p>
                                <p class="ramen-price">P540</p>
                            </div>                 
                            <div class="sm-ramen">
                                <img src = "/images/spicy-beef-bowl.png" alt="Spicy Beef Ramen" class="spicy-beef-bowl" />
                                <p class="ramen-title">Spicy Beef Ramen</p>
                                <p class="ramen-details">
                                A robust dish that will awaken your senses. This fiery variation <br/>
                                of the beloved Japanese noodle soup features succulent <br/>
                                beef and a tantalizing blend of spices, creating a truly <br/>
                                unforgettable culinary experience.
                                </p>
                                <p class="ramen-price">P500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wave-top">
            <div class="wave-t-container">
                <img src = "/images/wave2.png" alt="Wave 2" class="wave2" />
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