<?PHP 
session_start();
// session_start();

// require_once(__DIR__.'/dal/Repository.php');
// require_once(__DIR__.'/db/db.php');
// require_once(__DIR__.'/model/User.php');
// require_once(__DIR__.'/dal/UsersRepository.php');
// require_once(__DIR__.'/dal/GroupRepository.php');
// require_once(__DIR__.'/dal/ItemRepository.php');
// require_once(__DIR__.'/model/Group.php');
// require_once(__DIR__.'/auth/crypt.php');
// require_once(__DIR__.'/auth/auth.php');
// require_once(__DIR__.'/login.php');

// $auth = new Auth($connection);

// if(!isset($_SESSION["email"]))
// {
//     header("Location: auth/login.php");
// }

// if(!$auth -> check_user($_SESSION["name"], $_SESSION["heslo"]))
// {
//     header("Location: auth/login.php");
// }
// ssjhjjs

// $repo = new ItemRepository($connection);
// $crypt = new Crypt();

// $input = array("Username" => "PeterLipo", "Password" => "ssjhjjs", "FirstName" => "Peter", "LastName"=> "Lipo");
// $newUserId = $repo -> create($input);

// var_dump( $repo -> retrieve("Id = 1"));

// $input = array("FirstName" => "Martin");
// $podminka = "Id = 1";

// $repo -> update($input, $podminka);

// $input = "Id = 2";
// $repo -> delete($input);

// $res = $repo -> get_Items_by_group("PeterLipo");

// var_dump($res);

// echo $crypt -> encrypt("ssjhjjs");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <base href="/">
    <link href="/styles/style.css" rel="stylesheet" media="screen">
    <link href="/styles/style_media.css" rel="stylesheet" media="screen">
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
        <?php if (isset($_SESSION['userName'])): ?>
            <div class="message__login--text">
            <p>Welcome <strong><?php echo $_SESSION['userName']?></strong> you are log in.</p>
            <p><a href="index.php?logout='1'" style="color:red;"> &nbsp Logout</a></p>
            </div>
        <?php endif  ?>
    </div>
</div>


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
    <script src="./script/script.js"></script>
</body>
</html>
