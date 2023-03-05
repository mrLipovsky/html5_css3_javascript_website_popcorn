<?php include('server.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <base href="/">
    <link rel="stylesheet" href="./style.css">
    <title>Popcorn login</title>
</head>
<body>

<header>
<!-- NAV  -->
<nav>
    <div class="nav__all">
        <div class="nav__left--shop">
            <a href=""><span>Shop</span></a>
        </div>

<!-- nav header -->
        <div class="nav__center">
<!-- social media -->
            <ul class="nav__center--social">
                <li>
                <a href="https://www.twitter.com">
                    <i class="fab fa-facebook"></i>
                </a>
                </li>
                <li>
                <a href="https://www.twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li>
                <a href="https://www.twitter.com">
                    <i class="fab fa-behance"></i>
                </a>
                </li>
                <li>
                <a href="https://www.twitter.com">
                    <i class="fab fa-linkedin"></i>
                </a>
                </li>
                <li>
                <a href="https://www.twitter.com">
                    <i class="fab fa-sketch"></i>
                </a>
                </li>
            </ul>
            <div class="nav__center--logo">
                <a href="./index.php" >popcorn</a>
                
                <button class="nav__header--toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

    <!-- links -->
            <ul class="nav__center--menu">
                <li>
                    <a href="#shop"><span>Shop</span></a>
                </li>
                <li>
                    <a href="#contact">contact</a>
                    
                </li>
                <li>
                    <a href="#recipes">recipes</a>
                </li>
                <li>
                    <a href="#about">about</a>
                </li>
            </ul>
        </div>
    <!-- login nav -->
        <div class="nav__right">
            <ul class="nav__right--login">
                <li>
                    <a href="./login.php">log in</a>
                </li>
                <li>
                    <a href="./register.php">sing up</a>
                </li>
            </ul>
        </div>
    </div>    
</nav>
</header>

<section>

    <form class="form__login" method="POST" action="login.php">
    <!-- display validation error here-->
        <?php include('errors.php'); ?>
        <div class='form__login-input-group'>
            <label>Email: </label>
            <input type="email" name="email"  id="email" reguired value="<?php echo $email; ?>">
        </div>
        <div class='form__login-input-group'>
            <label>Password: </label>
            <input type="text" name="password" required id="password">
        </div>
        <div class='form__register-input-btn'>
            <input type="submit" name="submit_two" value="login" class="form__login-btn main__grafic--two">
        </div>
        <div class='form__register-input-info'>
            <p>Not yet member? <a href="register.php">Sign up</a></p>
        </div>
    </form>  
</section>


<!-- =============== 
javascript
===============  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async src="script.js"></script>
</body>
</html>