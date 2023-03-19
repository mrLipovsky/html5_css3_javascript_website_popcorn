<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="../styles/style.css" rel="stylesheet" media="screen">
    <link href="../styles/style_media.css" rel="stylesheet" media="screen">
    <link href="../styles/style_cookies.css" rel="stylesheet" media="screen">
    <title>popcorn index</title>
</head>
<body>
<!-- =============== 
Header
===============  -->
<?php
    include "../web_popcorn/components/header.php";
?>

<!-- =============== 
popcor
===============  -->
<div class="popcorn__seed--one"></div>
<div class="popcorn__seed--two"></div>
<div class="popcorn__seed--three"></div>
<div class="popcorn__seed--four"></div>
<div class="popcorn__seed--five"></div>

<!-- =============== 
sections main
===============  -->
<main class="main__article">
    <img class="main__article--img" src="./img/popcorn_main_img.png" alt="popcorn">
    <div class="main__article--text" >
        <h1>we like poppin’</h1>
        <p>
        A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14–20% moisture, which turns to steam as the kernel is heated.
        </p>
        <div class="main__article--buttons">
            <button class="main__button--one">
                <a href="../shopping_cart/products.php"><span>Shop</span></a>
            </button>
            <button class="main__button--two"> Contact</button>
        </div>
    </div>
</main>


<!-- =============== 
section motto
===============  -->
<section class="section__motto">
    <h1 class="section__motto--menu" >
        Fun Facts
    </h1>
    <div class="section__motto--section">
        <img class="section__motto--img" src="./img/popcorn_backround.png" alt="popcorn">
        <div class="section__motto--text">
            <h3>
                Simle popcorn
            </h3>
            <p>
                Making popcorn from scratch can be tricky. Not only do you want as many kernels as possible to pop, but you also want to keep the kernels from burning at the bottom of the pan!            
            </p>
        </div>
    </div>
    <div class="section__motto--section">
        <img class="section__motto--img--second" src="./img/popcorn_backround_second.png" alt="popcorn">
        <div class="section__motto--text">
            <h3>
                Nutrition facts            
            </h3>
            <p>
            The favorite choice for the term "Popcorn" is 30g of Air Popped Popcorn which has about 4 grams of fat. The total fat, saturated fat and other fats for a variety of types and serving sizes of Popcorn is shown below.​
            <br>
            <br>
            Popcorn            4 g
            <br>
            Potato Chips      11 g
            <br>
            Tortilla Chips     5 g            
            </p>
        </div>
    </div>
</section>

<!-- =============== 
sections contact 
===============  -->
<section class="section__contact">
    <h1 id="contact" class="section__contact--menu main__grafic--one" >
        Contact
    </h1>
    <div class="section__contact--text">
        <h3>Drop Us A Line</h3>
        <p>
        Don’t be shy. Send us anything. Good recommendations or serious critics, we take it all.
        </p>
    </div>
    <div class="section__contact--details">
        <div class="details">
        <i class="fas fa-phone"></i>        
        <h3>Adress</h3>
        <p>Prague, Czech Republic</p>
        </div>
        <div class="details">
        <i class="fas fa-map-signs"></i>
        <h3>Phone</h3>            
        <p>123 345 555</p>
        </div>
        <div class="details">
        <i class="fas fa-envelope"></i>   
        <h3>E-mail</h3>         
        <p>shop.popcorn.com</p>
        </div>
    </div>
</section>

<!-- =============== 
footer
===============  -->
<?php
include "./components/footer.php";
?>

<!-- =============== 
cookies
===============  -->
<div id="cookie__popup">
        <h4>Cookie Consent</h4>
        <p>Our website uses cookies to provide your browsing experience and relavent informations.Before continuing to use our website, you agree & accept of our 
        <a href="https://www.idoklad.cz/cookie-policy">Cookie Policy & Privacy</a>
        </p>
        <button  onclick="setCookies()" id="acceptCookieBtn">Accept</button> 
        <button id="deleteCookieBtn">Delete</button> 
        <button onclick="showCookies()">Show cookies</button>
        <div>
  <code id="cookies"></code>
</div>

</div>

<!-- =============== 
javascript
===============  -->
    <script src="./script/script.js"></script>
    <script src="./script/script-cookies.js"> </script>
</body>
</html>
