<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
   <link rel="stylesheet" type="text/css" href="../styles/style.css">
   <link rel="stylesheet" type="text/css" href="../styles/style_media.css">
   <link rel="stylesheet" type="text/css" href="../styles/style_shoping.css">
   <title>Items page</title>
</head>
<body>

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

<!-- =============== 
Header
===============  -->
<?php
   include "../components/header.php";
?>


<!-- =============== 
Header-cart menu 
===============  -->
<?php
   include '../components/header-cart.php';
?>
<!-- =============== 
Message 
===============  -->
<?php
   if(isset($message))
   {
      foreach($message as $message){
         echo '<div class="message"><p>'.$message.'</p> 
         <i onclick="this.parentElement.style.display = `none`;"></i> 
         </div>';
      }
   }
?>

<section class="section__products">
   <h4>latest products</h4>
   <div class="section__products--container">
      <?php
      $select_products = mysqli_query($connection, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
      <form action="" method="post">
         <div class="section__products--box">
            <img 
               src="../uploaded_img/<?php echo $fetch_edit['image']; ?>" 
               height="100" width="100"
               alt="">            
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