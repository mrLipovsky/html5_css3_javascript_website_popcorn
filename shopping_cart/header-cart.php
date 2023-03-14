<?PHP
require_once(__DIR__."/../db/db.php");
// require_once(__DIR__."/../shopping_cart/admin.php");
?>

<header class="header__cart">
      <a href="#">Popcorn Shop</a>
      <a href="products.php">Items</a>
      <!-- <?php if(!$isNotLoggedIn){
            echo ("<a class='navitem' href='index-test.php'>MŮJ ÚČET</a>");
            }else{
            echo ("<a class='navitem' href='index-chilli-login.php'>CHILLI CLUB</a>");
            }
            ?> 
      <?php
         $select_rows = mysqli_query($connection, " SELECT * FROM cart") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);
      ?>
      <a href="cart.php" class="header__cart--order">yor order<span><?php echo $row_count; ?></span> </a>
      <div 
         id="menu-btn" class="fas fa-bars">
      </div>
</header>