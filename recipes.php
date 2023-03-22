<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="./styles/style.css" rel="stylesheet" media="screen">
    <link href="./styles/style_media.css" rel="stylesheet" media="screen">
    <link href="./styles/style_cookies.css" rel="stylesheet" media="screen">
    <link href="./styles/style_recipes.css" rel="stylesheet" media="screen">
    <title>popcorn recipes</title>
</head>
<body>
<!-- =============== 
Header
===============  -->
<?php
    include "../web_popcorn/components/header.php";
?>

<!-- =============== 
Section recipes
===============  -->
<section class="section__recipes">
<h1 id="about" class="section__recipes--menu main__grafic--one" >
    Recipes
</h1>
<div class="recipes__card-flex">
    <div class="recipes__card">
        <h3> Make Popcorn </h3>
        <p>
            1. Use heavy-bottomed pot.
            2. Do not heat too high. 
            3. Pour popcorn to pot.
            5. wait for popcorn starts poping.
            6. Season with salt. 
        </p>
        <button class="main__button--one"> more</button>
    </div>
    <div class="recipes__img">
        <img src="./img/annie-spratt--lgZua7pnMQ-unsplash.jpg" style="width:100%" />
    </div>
</div>

<div class="recipes__card-flex">
    <div class="recipes__card">
    <h3> Make sweet Popcorn</h3>
        <p>
            1. Use heavy-bottomed pot.
            2. Do not heat too high. 
            3. Pour popcorn and sugar to pot.
            5. wait for popcorn starts poping.
            6. Season with salt. 
        </p>
        <button class="main__button--one"> more</button>
    </div>
    <div class="recipes__img">
            <img src="./img/christian-wiediger-AEeoY_aqvNk-unsplash.jpg" style="width:100%"/>
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
javascript
===============  -->
    <script src="../script/script_recipes.js"></script>
</body>
</html>

</body>
</html>