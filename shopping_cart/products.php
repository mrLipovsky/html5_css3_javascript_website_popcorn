<?php

require_once(__DIR__."/../db/db.php");

   if(isset($_POST['add_to_cart'])){
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];
      $product_quantity = 1;

      $select_cart = mysqli_query($connection, " SELECT * FROM `cart` WHERE name = '$product_name'");

      if(mysqli_num_rows($select_cart) > 0){
         $message[] = 'product already added to cart';
      } else {
         $insert_product = mysqli_query($connection, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
         $message[] = 'product added to cart succesfully';
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="../styles/style_shoping.css">
   <link rel="stylesheet" href="../styles/style.css">
   <link rel="stylesheet" href="../styles/style_media.css">
</head>
<body>
<!-- =============== 
Header
===============  -->
<?php
include "../components/header.php";
?>

<!-- =============== 
Message 
===============  -->
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };
?>
<!-- =============== 
Header-cart menu 
===============  -->
<?php
   include './header-cart.php';
?>
<div class="container">
   <section class="section__products">
      <h1>latest products</h1>
      <div class="section__products--container">
         <?php
         $select_products = mysqli_query($connection, "SELECT * FROM `products`");
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
         ?>
         <form action="" method="post">
            <div class="section__products--box">
               <img 
               src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
               <h3><?php echo $fetch_product['name']; ?></h3>
               <div class="price"><?php echo $fetch_product['price']; ?>EUR</div>
               <input 
               type="hidden" 
               name="product_name" 
               class="main__input--one"
               value="<?php echo $fetch_product['name']; ?>">
               <input 
               type="hidden" 
               name="product_price" 
               class="main__input--one"
               value="<?php echo $fetch_product['price']; ?>">
               <input 
               type="hidden" 
               name="product_image" 
               class="main__input--one"
               value="<?php echo $fetch_product['image']; ?>">
               <input 
               type="submit" 
               class="main__button--one" 
               value="add to cart" 
               name="add_to_cart">
            </div>
         </form>
         <?php
            };
         };
         ?>
      </div>
   </section>
</div>
<!-- =============== 
Footer
===============  -->
<?php
   include "../components/footer.php";
?>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>