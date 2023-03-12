<?php

require_once(__DIR__."/config.php");

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['post_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo"
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."</span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>
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
Header-cart menu
===============  -->
<?php 
include 'header-cart.php'; 
?>

<div class="container">
   <section class="checkout-form">
      <h1 class="heading">complete your order</h1>
      <form action="" method="post">
         <div class="display-order">
            <?php
               $select_cart = mysqli_query($conn, "SELECT * FROM cart");
               $total = 0;
               $grand_total = 0;
               if(mysqli_num_rows($select_cart) > 0){
                  while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                  $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                  $grand_total = $total += $total_price;
            ?>
            <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
            <?php
               }
            }else{
               echo "<div class='display-order'><span>your cart is empty!</span></div>";
            }
            ?>
            <span class="grand-total"> grand total : <?= $grand_total; ?>EUR </span>
         </div>
         <div>
            <div class="inputBox">
               <p>your name</p>
               <input 
               type="text" 
               placeholder="name" 
               name="name" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>your number</p>
               <input 
               type="number" 
               placeholder="number" 
               name="number" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>your email</p>
               <input 
               type="email" 
               placeholder="enter your email"
               name="email" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>payment method</p>
               <select name="method">
                  <option value="cash on delivery" selected>cash on devlivery</option>
                  <option value="pick up in shop">pick up in shop</option>
               </select>
            </div>
            <div class="inputBox">
               <p>address line 1</p>
               <input 
               type="text" 
               placeholder="e.g. flat no." 
               name="flat" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>address line 2</p>
               <input 
               type="text" 
               placeholder="e.g. street name" 
               name="street" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>city</p>
               <input 
               type="text"
               placeholder="e.g. mumbai" 
               name="city" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>state</p>
               <input 
               type="text" 
               placeholder="e.g. maharashtra" 
               name="state" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>country</p>
               <input 
               type="text"
               placeholder="e.g. india" 
               name="country" 
               required
               class="main__input--one">
            </div>
            <div class="inputBox">
               <p>post code</p>
               <input 
               type="text" 
               placeholder="e.g. 123456" 
               name="pin_code" 
               required
               class="main__input--one">
               
            </div>
            <div class="checkout__form--btn">
               <input 
               type="submit" 
               value="order now" 
               name="order_btn" 
               class="main__button--one">
            </div>
      </form>
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