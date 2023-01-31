<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion travel | Discover the World!</title>
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
                    <li><a href="#"><i class="fa-solid fa-house-user"></i> Home</a></li>
                    <li><a href="/"><i class="fa-solid fa-book-open-reader"></i> About Us</a></li>
                    <li><a href="/"><i class="fa-solid fa-route"></i> Services</a></li>
                    <li><a href="/"><i class="fa-solid fa-newspaper"></i> Blog</a></li>
                    <li><a href="./Contact Us.php"><i class="fa-solid fa-address-book"></i> Contact Us</a></li>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Services</a></li>
                    <li><a href="/">Blog</a></li>
                    <li><a href="./Contact Us.php">Contact Us</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myfunction()"><i class="fa-solid fa-bars fa-4x"></i></a>
            </nav>
    </header>
<section class="hero">
    <div class="container">
        <h1>Fusion Travel</h1>
        <p>Let's Discover The World Together!</p>
        <a href="/">Plan Your Trip!</a>
    </div>
</section>
    <section class="introduction flex-container container">
        <div class="welcome flex-container">
            <h1>Welcome to Fusion</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aperiam quia eum ullam cupiditate et porro quibusdam facilis error veniam minima totam, qui natus officia unde officiis maxime quo! Non.</p>
        </div>
        <div class="showoff flex-container">
            <div class="item">
                <div><i class="fa-sharp fa-solid fa-plane-departure fa-2xl"></i></div>
                <h4>Best price guarantee</h4>
                <p>Fast and cheap travels! Never before seen quality, first to fly Man to the moon, Mars and Jupiter. First class flight quality. #1 certified flight and travel agency in the Solar system.</p>
            </div>
            <div class="item">
                <div><i class="fa-sharp fa-solid fa-heart fa-2xl"></i></div>
                <h4>Best travel agency</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, nam!</p>
            </div>
            <div class="item">
                <div><i class="fa-sharp fa-solid fa-star fa-2xl"></i></div>
                <h4>Trust & Safety</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, nam!</p>
            </div>
        </div>
        <div class="decor flex-container">
            <div><i class="fa-regular fa-circle-dot"></i></div>
            <div><i class="fa-regular fa-circle-dot fa-xl"></i></div>
            <div><i class="fa-regular fa-circle-dot"></i></div>
        </div>
    </section>
    <section class="destination container flex-container">
        <div class="find-destination">
            <h1>Find Your Destination</h1>
            <p>Most Popular Places Are Waiting For You</p>
        </div>
        <div class="search flex-container">
            <div><i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="search..."></div>
        </div>
        <div class="loc-content flex-container">
            <div class="locations">
                <a href="/"><div class="thailand">Thailand</div></a>
                <a href="/"><div class="australia">Australia</div></a>
                <a href="/"><div class="indonesia">Indonesia</div></a>
                <a href="/"><div class="france">France</div></a>
                <a href="/"><div class="malaysia">Malaysia</div></a>
                <a href="/"><div class="uae">UAE</div></a>
            </div>
        </div>
        <div class="choose flex-container">
        <a href="/">Choose Now</a>
        </div>
    </section>
    <section class="blogs container flex-container">
        <div class="blog-news">
            <h1>Lastest News From Blog</h1>
            <p>See Whats People Are Sharing Their Thoughts</p>
        </div>
        <div class="blogarticles flex-container">
            <div class="rio"><a href="/"><img src="../Projektas_Rosvaldas/failai/Nuotraukos/Rio de Janeiro.jpg" alt="Rio"></a></div>
            <a href="/"><div class="istanbul flex-container">
                <div><img src="../Projektas_Rosvaldas/failai/Nuotraukos/Istambul.jpg" alt="intambul"></div>
                <div><h3>Most Beautiful Place In The World - Istanbul<br></h3>
                <p>The most beautiful place in the world is Istanbul. It is known for its rich history and architecture, as well as its natural beauty. The city is home to some of the most iconic sites in the world, such as the Hagia Sofia and Blue Mosque.</p></div>
            </div></a>
            <div class="liberty"><a href="/">
                <img src="../Projektas_Rosvaldas/failai/Nuotraukos/statueofliberty_288x206.jpg" alt="libertystatue">
                <h3>The Statue Of Liberty Travel</h3>
                <p>The Statue of Liberty is one of the worlds most cherished monuments, an icon for freedom itself. No matter the time of day, or where you are, you can't ignore the beauty and power that this landmark exudes. With so many reasons to see it, it's a real shame that not everyone has the opportunity to do so. For those lucky enough, be ready to be astounded!</p>
            </div></a>
            <div class="singapore"><a href="/"><img src="../Projektas_Rosvaldas/failai/Nuotraukos/Singapore.jpg" alt="singapore"></a></div>
            <div class="egypt"><a href="/"><img src="../Projektas_Rosvaldas/failai/Nuotraukos/realegypt.jpg" alt="egypt"></a></div>
            <div class="shimla"><a href="/">
                <img src="../Projektas_Rosvaldas/failai/Nuotraukos/Shimla.jpg" alt="shimla">
                <h3>The Best Natural Paradise - Shimla</h3>
                <p>"Shimla is one of the most beautiful and serene places to explore on the planet! From the cool crisp mountain air, to the stunning views this is an experience you don't want to miss! Take a stroll through the park and enjoy the local wildlife while you're at it. This is a place that puts you at total inner peace from the first moment, you will never want to leave this natural paradise."</p>
            </div></a>
        </div>
        <div class="read flex-container">
            <a href="/">Keep reading</a>
        </div>
    </section>
<section class="review container flex-container">
        <div class="review-title">
            <h1>What Our Client Says</h1>
            <p>People's sharing their thought about our works</p>
        </div>
        <div class="review-block flex-container">
            <div class="quote-l"><i class="fa-solid fa-quote-left fa-5x"></i></div>
            <img src="../Projektas_Rosvaldas/failai/Nuotraukos/DimitriVegasTpdnecrop.jpg" alt="dimitri-tpdne">
            <div class="quote-block flex-container">    
                <p>"What an exciting place for any aspiring traveler to be! Fusion Travel offers every kind of travel experience ranging from scenic mountain climbs, all the way to deep sea exploration and beyond! What's more is no trip is like the last. No matter the destination, your travel will never be the same. 10/10 would book a trip again."</p>
                <p>Dimitri Vegas</p>
                <p>London, England</p>
            </div>
            <div class="quote-r flex-container"><i class="fa-solid fa-quote-right fa-5x"></i></div>
        </div>
        <div class="review-dots flex-container">
            <div><i class="fa-regular fa-circle-dot"></i></div>
            <div><i class="fa-regular fa-circle-dot fa-xl"></i></div>
            <div><i class="fa-regular fa-circle-dot"></i></div>
        </div>
</section>
<section class="direction flex-container">
    <div class="special-offer">Get special discount on your first journey</div>
    <a href="/">Book Now</a>
</section>
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