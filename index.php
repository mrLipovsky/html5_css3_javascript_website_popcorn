<?php include('server.php'); 
    //if user is not ogged than can not acces this page 
    if (empty($_SESSION['email'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <base href="/">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/style_media.css">
    <title>popcorn website</title>
</head>

<body>
<!-- =============== 
Header
===============  -->
<?php
include "./components/header.php";
?>
<!-- PHP FORM SUCCESS MESSAGE -->
<div class="message__login--success">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="message__login--text">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            
        <?php endif  ?>
        <?php if (isset($_SESSION['email'])): ?>
            <div class="message__login--text">
            <p>Welcome <strong><?php echo $_SESSION['email']?></strong> you are log in.</p>
            <p><a href="index.php?logout='1'" style="color:red;"> &nbsp Logout</a></p>
            </div>
        <?php endif  ?>
    </div>
</div>


<!-- =============== 
popcor
===============  -->
<div class="popcorn_seed_one"></div>
<div class="popcorn_seed_two"></div>

<!-- =============== 
sections main
===============  -->
<main class="main__article">
    <img class="main__article--img" src="./img/popcorn_main_img.png" alt="glass">
    <div class="main__article--text" >
        <h1>we like poppin’</h1>
        <p>
        A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14–20% moisture, which turns to steam as the kernel is heated.
        </p>
        <div class="main__article--buttons">
            <button class="main__button--one"><span>Shop</span></button>
            <button class="main__button--two"> Contact</button>
        </div>
    </div>
</main>
<hr>


<!-- =============== 
section motto
===============  -->
<section class="section__motto">
    <h1 class="section__motto--menu main__grafic--one" >
        Fun Facts
    </h1>
    <div class="section__motto--text">
            <img class="section__motto--img main__grafic--one"
            src="./img/popcorn_backround.jpg" alt="glass">
            <h3>
                Powerfull and simle online ordering
            </h3>
            <p>
                A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14–20% moisture, which turns to steam as the kernel is heated.      
            </p>
        </div>
    </div>
</section>
<hr>

<!-- =============== 
sections contact 
===============  -->
<section class="section__contact">
    <h1 class="section__contact--menu main__grafic--one" >
        Contact
    </h1>
    <div class="section__contact--text">
        <h2>CONTACT.</h2>
        <h3>Drop Us A Line</h3>
        <p>
        Don’t be shy. Send us anything. Good recommendations or serious critics, we take it all.
        </p>
    </div>
</section>
<hr>

<!-- =============== 
footer
===============  -->
<?php
    include "./components/footer.php";
?>

<!-- =============== 
cookies
===============  -->


<!-- =============== 
javascript
===============  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./script/script.js"></script>
</body>
</html>
