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
   <title>shopping cart</title>
</head>
<body>

<?php
   require_once(__DIR__."/../auth/cart_admin.php");
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

<div class="section__cart">
   <section class="section__cart--container">
      <h4>shopping cart</h4>
      <table class="section__cart--table" cellspacing="0">
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>total price</th>
            <th>action</th>
            <?php 
               $select_cart = mysqli_query($connection, "SELECT * FROM `cart`");
               $grand_total = 0;
               if(mysqli_num_rows($select_cart) > 0){
                  while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            ?>
            <form  class="section__cart--form" action="" method="POST">
               <tr >
                  <td>
                     <img 
                        src="../uploaded_img/<?php echo $row['image']; ?>" 
                        height="100" width="100">   
                  </td>
                  <td>
                     <?php echo $fetch_cart['name']; ?>
                  </td>
                  <td>
                     <?php echo number_format($fetch_cart['price']); ?> EUR
                  </td>
                  <td>
                     <input 
                        type="hidden" 
                        name="update_quantity_id"  
                        class="main__input--one"
                        value="<?php echo $fetch_cart['id']; ?>">
                     <input
                        type="number" 
                        name="update_quantity" 
                        min="1"  
                        class="section__cart--form-number"
                        value="<?php echo $fetch_cart['quantity']; ?>">
                  </td>
                  <td>
                     <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?> EUR
                  </td>
                  <td>
                     <input
                        type="submit" 
                        name="update_update_btn" 
                        min="1"  
                        value="update" 
                        class="main__button--one">
                     <a 
                        href="/../auth/cart_admin.php?remove=<?php echo $fetch_cart['id']; ?>" 
                        onclick="return confirm('remove item from cart?')" 
                        class="main__button--one"> 
                        remove
                     </a>
                  </td>
               </tr>
            <!-- </form>    -->
            <?php
               $grand_total += $sub_total;  
            };
            };
            ?>
            </table>
            <table class="shopping__cart--table-bottom">
            <tr >
               <div>
                  <td> 
                     grand total <?php echo $grand_total; ?>EUR
                  </td>
                  <td>
                     <a 
                        href="items.php" 
                        class="main__button--one" 
                        >continue shopping
                     </a>
                     <a 
                        href="shopping_cart.php?delete_all" 
                        onclick="return confirm('are you sure you want to delete all?');" 
                        class="main__button--one">
                        delete all 
                     </a>
                  </td>
               </div>
                  <td>
                     <a 
                        href="checkout.php" 
                        class="main__button--one <?= ($grand_total > 1)?'':'disabled'; ?>">
                        procced to checkout
                     </a>
                  </td>
            </tr>
      </table>
   </section>
</div>

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