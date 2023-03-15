<?PHP
require_once(__DIR__."/../db/db.php");

?>

<header class="header__cart">
      <a href="#">Popcorn Shop</a>
      <a href="products.php">Items</a>
      <?php 
         $result = $connection->query("SELECT * FROM users");
         while ($row = $result->fetch_assoc()) {
            if ($row['admin'] == "admin") {
               echo "<a href='admin.php'>add products</a>";
            } 
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