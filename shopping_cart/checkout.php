<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
   <link rel="stylesheet" href="../styles/style_shoping.css">
   <link rel="stylesheet" href="../styles/style.css">
   <link rel="stylesheet" href="../styles/style_media.css">
   <title>checkout</title>
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
   include '../components/header-cart.php'; 
?>

<?php
// conect to db
   require_once(__DIR__."/../db/db.php");
   require_once(__DIR__."/../auth/checkout_admin.php");
?>

<section class="checkout__form">
<h4>Your order sum: </h4>
   <form action="" method="post">
         <?php
            $select_cart = mysqli_query($connection, "SELECT * FROM cart");
            $total = 0;
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0)
            {
               while($fetch_cart = mysqli_fetch_assoc($select_cart)){
               $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
               $grand_total = $total += $total_price;

               $name = $fetch_cart['name'];
               $quantity = $fetch_cart['quantity'];
            
               echo "<p> your order: {$name}; {$quantity}  x</p>";
               echo "<p class='checkout__form-grand-total'> grand total: {$grand_total}; EUR </p>";
            ?>
            <div class="checkout__form-display-">
            <div>
            <div class="checkout__form-input">
            <p>full name</p>
            <input 
            type="text" 
            placeholder="full name" 
            name="name" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>phone number</p>
            <input 
            type="number" 
            placeholder="phone number" 
            name="number" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>your email</p>
            <input 
            type="email" 
            placeholder="enter your email"
            name="email" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>street and number</p>
            <input 
            type="text" 
            placeholder="street and number" 
            name="street" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>city</p>
            <input 
            type="text"
            placeholder="city" 
            name="city" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>country</p>
            <input 
            type="text"
            placeholder="contry" 
            name="country" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input">
            <p>post code</p>
            <input 
            type="text" 
            placeholder="post code" 
            name="post code" 
            required
            class="main__input--one">
         </div>
         <div class="checkout__form-input ">
            <p>payment method</p>
            <select  class="checkout__form-option" name="method">
               <option class="checkout__form-option" value="cash on delivery" selected>cash on delivery</option>
               <option class="checkout__form-option" value="pick up in the shop">pick up in the shop</option>
            </select>
         </div>
         <div class="checkout__form-btn">
            <input 
            type="submit" 
            value="order now" 
            name="order_btn" 
            id="order_btn"
            class="main__button--one">
         </div>
         <?php
            }
         } else
         {
            echo "<div class='checkout__form-display-message'><p>your cart is empty!</p></div>";
         }
         ?>
      </div>

   </form>
</section>

<!-- =============== 
Footer
===============  -->
<?php
   include "../components/footer.php";
?>

<!-- custom js file link  -->
<script src="../script/script-cart.js"></script>
   
</body>
</html>