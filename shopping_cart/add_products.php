
<?php
require_once(__DIR__."/../auth/cart_admin.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>
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
<div class="container">
   <section>
      <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
         <h3>add a new product</h3>
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
         class="main__button--one" 
         required>
         <input 
         type="submit" 
         value="add the product" 
         name="add_product" 
         class="main__button--one">
      </form>
   </section>

   <section class="display-product-table">
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
               <td><img src="../uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['price']; ?>EUR</td>
               <td>
                  <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
                  <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
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
   <section class="edit-form-container">
      <?php
      if(isset($_GET['edit'])){
         $edit_id = $_GET['edit'];
         $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
         if(mysqli_num_rows($edit_query) > 0){
            while($fetch_edit = mysqli_fetch_assoc($edit_query)){
      ?>
      <form action="" method="post" enctype="multipart/form-data">
         <img src="../uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
         <input 
         type="hidden" 
         name="update_p_id" 
         value="<?php echo $fetch_edit['id']; ?>">
         <input 
         type="text" 
         class="main__input--one" 
         required name="update_p_name" 
         value="<?php echo $fetch_edit['name']; ?>">
         <input 
         type="number" 
         min="0" 
         class="main__input--one" 
         required name="update_p_price" 
         value="<?php echo $fetch_edit['price']; ?>">
         <input 
         type="file" 
         class="main__input--one" 
         required name="update_p_image" 
         accept="image/png, image/jpg, image/jpeg">
         <input 
         type="submit" 
         value="update the prodcut" 
         name="update_product" 
         class="main__button--on">
         <input 
         type="reset" 
         value="cancel" 
         id="close-edit" 
         class="main__button--on">
      </form>
      <?php
               };
            };
            echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
         };
      ?>
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