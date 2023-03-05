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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <base href="/">
    <link rel="stylesheet" href="./style.css">
    <title>popcorn website</title>
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
                <a href="./index.php">popcorn</a>
                
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
                    <p>Welcome <strong><?php echo $_SESSION['email']?> </strong></p>
                    <p><a href="index.php?logout='1'" style="color:red;"> &nbsp Logout</a></p>
                    </div>
                <?php endif  ?>
            </div>
        </div>
     
    </div>    
</nav>

</header>


<!-- =============== 
popcor
===============  -->
<div class="popcorn_seed_one"></div>
<div class="popcorn_seed_two"></div>

<!-- =============== 
sections main
===============  -->
    <main class="article__one">
      <div>
        <img class="article__one--img" src="./img/popcorn_main_img.png" alt="glass">
      </div>
      <div class="article__one--text" >
        <h1>we like poppin’</h1>
        <div class="article__one--line"></div>          
        <p>
          A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14–20% moisture, which turns to steam as the kernel is heated.
        </p>
        <div class="article__one--buttons">
          <button class="main__grafic--one"><span>Shop</span></button>
          <button class="main__grafic--two"> Contact</button>
        </div>
      </div>
    </main>


<!-- =============== 
section motto
===============  -->
<div class="section__motto--background">
  <h1 class="section__motto--menu main__grafic--one" >
    Fun Facts
  </h1>
  <section class="section__motto">
    <div class="section__motto--img main__grafic--one" >
        <img src="./img/popcorn_backround.jpg" alt="glass">
    </div>
    <div class="section-motto_text" >
      <hr>
      <h3>
        POWERFUL AND SIMPLE ONLINE ORDERING
      </h3>
      <p>
        A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14–20% moisture, which turns to steam as the kernel is heated.      
      </p>
    </div>
</section>
</div>


<!-- =============== 
sections contact 
===============  -->
        <section id="contact" class="section__contact">
          <h1 class="section__contact--menu main__grafic--one" >
            Contact
          </h1>
            <div class="section-property">
              <div class="section-property__one">
                <h2>CONTACT.</h2>
              </div>
              <div>
                <h2>Drop Us A Line</h2>
                <hr>
                <p>
                  Don’t be shy. Send us anything. Good recommendations or serious critics, we take it all.
                </p>
              </div>
            </div>
        </section>
   

<!-- =============== 
sections footer
===============  -->

    <footer class="footer">
      <p class="copyright">
      <a href="https://graphiqstudio.eu/"> © 2022 Graphiq Studio.</a>
      </p>

        <ul class="social-icons">
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
    </footer>

<!-- =============== 
cookies
===============  -->
  

<!-- =============== 
javascript
===============  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async src="script.js"></script>
</body>
</html>


</body>
</html>