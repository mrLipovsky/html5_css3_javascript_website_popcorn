<?php

require_once(__DIR__."/../db/db.php");

if(isset($_POST['add_product']))
{
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = '../uploaded_img/' . $p_image;

   $insert_query = mysqli_query($connection, " INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete']))
{
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($connection, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('Location: add_products.php');
      $message[] = 'product has been deleted';
   }else{
      header('Location: add_products.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product']))
{
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = '../uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($connection, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query)
   {
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('Location:  /../shopping_cart/add_products.php');
   }else{
      $message[] = 'product could not be updated';
      header('Location: /../shopping_cart/add_products.php');
   }
}

if(isset($_POST['update_update_btn']))
{
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($connection, " UPDATE `cart` SET quantity = '$update_value'
   WHERE id = '$update_id'");
if($update_quantity_query)
   {
         header('location: /../shopping_cart/shopping_cart.php');
   }
}

if(isset($_GET['remove']))
{
   $remove_id = $_GET['remove'];
   mysqli_query($connection, " DELETE FROM `cart` WHERE id = '$remove_id'");
   header('Location: /../shopping_cart/shopping_cart.php');
}

if(isset($_GET['delete_all']))
{
   mysqli_query($connection, "DELETE FROM `cart`");
   header('Location: /../shopping_cart/shopping_cart.php');
}

?>
