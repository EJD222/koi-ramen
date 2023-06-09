<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dynalight&family=Inter:wght@300&family=Syncopate:wght@700&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="book-your-table-style.css">
    <title>Book Your Table</title>
</head>
<body>
    <div class="guide">
        <div class="child">

            <?php 
                //Call Menu Bar
                include 'menu-bar.php'; 
            ?> 

            <section class="byt-section">
                <div class="byt-div">
                    <div class="welcome-title">
                        <p class="title">BOOK YOUR TABLE!</p>
                        <p class="tagline">Feel free to fill-out the form below for your reservations.</p>
                    </div>
                    
                    <div class="form-details-container">
                        <div class="form-container">
                            <form>
                                <label for="name">FULL NAME<span class="required">*</span></label>
                                <input type="text" name="name" required/><br />

                                <label for="email">RESERVATION FOR<span class="required">*</span></label>
                                <p class="email-container">Call Email Here.</p>
                                <hr>

                                <label for="phone-number">PHONE NUMBER<span class="required">*</span></label>
                                <input type="tel" name="phone-number" required/><br />

                                <label for="reservation-date">RESERVATION DATE<span class="required">*</span></label>
                                <input type="date" name="reservation-date" required/><br />

                                <label for="reservation-date">RESERVATION TIME<span class="required">*</span></label>
                                <input type="time" name="reservation-time" required/><br />

                                <label for="persons">HOW MANY PERSONS WILL YOU BE WITH?<span class="required">*</span></label>
                                <input type="text" name="persons" required/><br />

                                <label for="notes">NOTES</label>
                                <textarea name="notes" id="notes"></textarea><br />

                                <button type="submit" value="reserve" class="reserve-button">RESERVE</button>
                            </form>
                        </div>  

                        <div class="details-container">

                            <div class="line"></div>
                        
                            <div class="schedule">
                                <div class="schedule-title">
                                    <p class="oh">OPENING HOURS</p>
                                </div>
                                <div class="mon-to-fri">
                                    <p class="mtf">MONDAY TO FRIDAY</p>
                                    <p class="time">11 AM TO 10PM</p>
                                </div>
                                <div class="sat-and-sun">
                                    <p class="sas">SATURDAY AND SUNDAY</p>
                                    <p class="time">11 AM TO 12AM</p>
                                </div>
                            </div>

                        </div> 

                    <div>  

                <div>
            </section>

            <?php 
                //Call Footer
                include 'footer.php'; 
            ?> 

        </div>
    </div>
</body>
</html>