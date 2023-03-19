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
   <title>add product</title>
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
   include '../components/header-cart.php'; 
?>
<section class="add__product--container">
      <form 
      action="" 
      method="post" 
      class="add__product--form" 
      enctype="multipart/form-data">
      <h4>add products</h4>
         <input 
         type="text" 
         name="p_name" 
         placeholder="enter the product name" 
         class="main__input--one" 
         required>
         <input 
         type="number" 
         name="p_price" 
         min="0" 
         placeholder="enter the product price" 
         class="main__input--one" 
         required>
         <input 
         type="file" 
         name="p_image" 
         accept="image/png, image/jpg, image/jpeg" 
         value="add picture"
         class="main__input--one" 
         required>
         <input 
         type="submit" 
         value="add the product" 
         name="add_product" 
         class="main__button--one">
      </form>
</section>

<section class="add__product-display-table">
   <table>
      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>action</th>
      </thead>
      <tbody>
         <?php
            $select_products = mysqli_query($connection, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
         ?>
         <tr>
            <td>
               <img 
               src="../uploaded_img/<?php echo $row['image']; ?>" 
               height="100" width="100">
            </td>
            <td>
               <?php echo $row['name']; ?>
            </td>
            <td>
               <?php echo $row['price']; ?>EUR
            </td>
            <td>
               <a href="add_products.php?delete=<?php echo $row['id']; ?>" class="main__button--one"" onclick="return confirm('are your sure you want to delete this?');"> delete </a>
               <a href="add_products.php?edit=<?php echo $row['id']; ?>" class="main__button--one"> update </a>
            </td>
         </tr>
         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>
</section>

<section class="update__product-form-container">
   <?php
      if(isset($_GET['edit']))
      {
         $edit_id = $_GET['edit'];
         $edit_query = mysqli_query($connection, "SELECT * FROM `products` WHERE id = $edit_id");
         if(mysqli_num_rows($edit_query) > 0)
         {
            while($fetch_edit = mysqli_fetch_assoc($edit_query))
            {
   ?>
   <form 
      action="" 
      method="post" 
      id="update__product--form"
      class="update__product--form"
      enctype="multipart/form-data">
         <h4>update item</h4>
         <img
         src="../uploaded_img/<?php echo $fetch_edit['image']; ?>" 
         height="100" width="100"
         alt="">
         <input 
         type="hidden" 
         name="update_p_id" 
         value="<?php echo $fetch_edit['id']; ?>">

         <input 
         type="text" 
         class="main__input--one" 
         required 
         name="update_p_name" 
         value="<?php echo $fetch_edit['name']; ?>">

         <input 
         type="number" 
         min="0" 
         class="main__input--one" 
         required 
         name="update_p_price" 
         value="<?php echo $fetch_edit['price']; ?>">

         <input 
         type="file" 
         id="file"
         class="main__input--one"
         value="add picture"
         required 
         name="update_p_image"
         accept="image/png, image/jpg, image/jpeg">

         <input 
         type="submit" 
         value="update item" 
         name="update_product" 
         class="main__button--one">

         <input 
         type="reset" 
         value="cancel" 
         id="close-edit" 
         class="main__button--one">
   </form>
</section>

<?php
         };
      };
      echo "<script>document.querySelector('.update__product--form').style.display = 'flex';</script>";
   };
?>


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