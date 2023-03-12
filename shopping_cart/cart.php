<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
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
   <section class="shopping__cart">
      <h1>shopping cart</h1>
      <table>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>total price</th>
            <th>action</th>
            <?php 
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $grand_total = 0;
               if(mysqli_num_rows($select_cart) > 0){
                  while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            ?>
            <tr>
               <td>
                  <img src="./uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt="">
               </td>
               <td>
                  <?php echo $fetch_cart['name']; ?>
               </td>
               <td>
                  $<?php echo number_format($fetch_cart['price']); ?>
               </td>
               <td>
                  <form action="" method="post">
                     <input 
                     type="hidden" 
                     name="update_quantity_id"  
                     value="<?php echo $fetch_cart['id']; ?>" 
                     class="">
                     <input
                     type="number" 
                     name="update_quantity" 
                     min="1"  
                     value="<?php echo $fetch_cart['quantity']; ?>" 
                     class="">
                  </form>   
               </td>
               <td>
                  $<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>
               </td>
               <td>
                  <a              
                     type="submit" 
                     value="update"
                     name="update_update_btn"
                     class="main__button--one">
                     update
                  </a>
                  <a 
                     href="cart.php?remove=<?php echo $fetch_cart['id']; ?>"
                     onclick="return confirm('remove item from cart?')" 
                     class="main__button--one delete-btn"> 
                     remove
                  </a>
               </td>
            </tr>
            <?php
               $grand_total += $sub_total;  
            };
            };
            ?>
            <tr class="shopping__cart--table-bottom">
               <div>
                  <td> 
                     grand total $<?php echo $grand_total; ?>
                  </td>
                  <td>
                     <a 
                        href="products.php" 
                        class="main__button--one" 
                        >continue shopping
                     </a>
                     <a 
                        href="cart.php?delete_all" 
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
<script src="js/script.js"></script>
</body>
</html>