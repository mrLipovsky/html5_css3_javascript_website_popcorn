<?PHP
   require_once(__DIR__."/config.php");
?>

<header class="header__cart">
      <a href="#">Popcorn Shop</a>
      <a href="products.php">Items</a>
      <?php
         $select_rows = mysqli_query($conn, "SELECT * FROM cart") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);
      ?>
      <a href="cart.php" class="header__cart--order">yor order<span><?php echo $row_count; ?></span> </a>
      <div 
         id="menu-btn" class="fas fa-bars">
      </div>
</header>