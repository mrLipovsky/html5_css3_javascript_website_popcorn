<?PHP
require_once(__DIR__."/../auth/check_login.php");
?>
<!-- =============== 
Header
===============  -->
<header>
<!-- NAV  -->
<nav>
    <div class="nav__all">
        <div class="nav__left--shop">
            <a href="../shopping_cart/items.php"><span>Shop</span></a>
        </div>

<!-- nav header -->
<!-- social media -->
        <div class="nav__center">
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
                    <i class="fab fa-instagram"></i>
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
        
            <div id="cloud" class="nav__center--logo">
                <a href="../index.php"> <h1>popcorn</h1>
                </a>
            </div>
            <div class="nav__center--toggle" id="js-navbar-toggle"> 
                <i onclick="myFunction(this)" class="fas fa-bars" ></i>
            </div>
        
    <!-- links -->
            <ul class="nav__center--nav" id="js-menu">
                <li>
                    <a 
                    href="../shopping_cart/items.php" 
                    class="nav__center--links"><span>Shop</span></a>
                </li>
                <li>
                    <a 
                    href="../index.php#contact" 
                    class="nav-links">contact</a>
                    
                </li>
                <li>
                    <a
                    href="../recipes.php" 
                    class="nav-links">recipes</a>
                </li>
                <li>
                    <a 
                    href="../index.php#about" 
                    class="nav-links">about</a>
                </li>
            </ul>
        </div>
    <!-- login nav -->
        <div >
            <ul class="nav__center--login" id="">
            <?php 
            session_start();
            if (isset($_SESSION['userName'])): ?>
                    <div class="message__login--text">
                    <li>
                        <p>You are logged in: <strong><?php echo $_SESSION['userName']?></strong></p>
                    </li>
                    <li>
                        <a href="../logout.php"> log out </a>
                    </li>
                    </div>
                <?php else : ?>
                <li>
                    <a href="../login.php" class="nav-links">log in</a>
                </li>
                <li>
                    <a href="../register.php" class="nav-links">sign up</a>
                </li>
                <?php endif  ?>
            </ul>
        </div>    
</nav>
</div> 
</header>