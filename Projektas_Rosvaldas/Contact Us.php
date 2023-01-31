<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Fusion travel</title>
    <link rel="stylesheet" href="../Projektas_Rosvaldas/css/normalize.css">
    <link rel="stylesheet" href="../Projektas_Rosvaldas/css/Style.css">
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script> -->
    <script>
        function myfunction() {
            var x = document.getElementById("mMenu")
            if(x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>

<body>
<header class="site-header">
            <nav class="main-nav container flex-container">
                <ul class="flex-container">
                    <li><a href="./Projektas.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                    <li><a href="/"><i class="fa-solid fa-book-open-reader"></i> About Us</a></li>
                    <li><a href="/"><i class="fa-solid fa-route"></i> Services</a></li>
                    <li><a href="/"><i class="fa-solid fa-newspaper"></i> Blog</a></li>
                    <li><a href="#"><i class="fa-solid fa-address-book"></i> Contact Us</a></li>
                </ul>
                <ul class="flex-container">
                    <li><a href="tel.+5162600598"><i class="fa-solid fa-phone"></i> +516 260 0598</a></li>
                    <li><a href="/"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
                    <li><a href="/"><i class="fa-solid fa-plus"></i> Sign Up</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav flex-container">
                <ul class="mtlf">
                    <li><a href="tel.+5162600598"><i class="fa-solid fa-phone">tel.+516..</i></a>
                </ul>
                <ul id="mMenu" class="flex-container">
                    <li><a href="./Projektas.php">Home</a></li>
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Services</a></li>
                    <li><a href="/">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myfunction()"><i class="fa-solid fa-bars fa-4x"></i></a>
            </nav>
    </header>
    <section>
        <div class="contact-one">
            <h1>Contact Us!</h1>
            <h3>By hotline</h3>
            <a href="tel.+5162600598">+516 260 0598</a>
            <h3>By email</h3>
            <a href="mailto:travelnow@fusiontravel.com">travelnow@fusiontravel.com</a>
            <h3>...Or visit one of our offices!</h3>
            <a href="maps.google.com">Find one closest to you!</a><br>
        </div>
    </section>
    <section>
<div class="contact-two">
    <h1>Have one of our agents call YOU!</h1>
    <form id="contact" action="Contact Us.php" method="post">
        <input type="text" name="name" placeholder="Your name" required autofocus>
        <input type="text" name="lname" placeholder="Your last name" required>
        <input type="email" name="email" placeholder="Your email">
        <input type="tel" name="phone_number" placeholder="Tel. 123456789 " pattern="[0-9]{3}[0-9]{3}[0-9]{3}">
        <textarea placeholder="Your message" name="message" required></textarea>
        <button name="submit" type="submit" id="contact_submit">Submit</button>
    </form>
    </section>
<?php
require __DIR__ . '/../Projektas_Rosvaldas/formos/formos-db/app.php';
?>
<footer class="flex-container">
        <div class="footercol container flex-container">
            <div class="col">
                <ul><h3>About Us</h3>
                <li><a href="/">About Us</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="../Projektas_Rosvaldas/Contact Us.php">Contact Us</a></li>
            </ul>
            </div>
            <div class="col">
                <ul><h3>Address</h3>
                <li><p>4433 Heavner Court<br>Plaiview, NewYork</p></li>
                </ul>
            </div>
            <div class="col">
                <ul><h3>Contact Us</h3>
                    <li>Email: <a href="mailto:travelnow@fusiontravel.com">travelnow@fusiontravel.com</a></li>
                    <li>Cell: <a href="tel.+5162600598">+5162600598</a></li>
                </ul>
            </div>
            <div class="col">
                <ul><h3>Follow Us</h3>
                    <a href="/"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
                    <a href="/"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
                    <a href="/" style="color: orange"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                </ul>
            </div>
        </div>
        
    </footer> 
<div class="copy flex-container">&copy; 2023, all rights negotiable.</div>
</body>
</html>