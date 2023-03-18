


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


<!-- =============== 
Header-cart menu
===============  -->
<?php 
    include '../components/header-cart.php'; 
?>

<section>
    <div class='order-message-container'>
        <div class='message-container'>
        <h3>thank you for shopping!</h3>
        <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
        </div>
        <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
        </div>
            <a href='items.php' class='btn'>continue shopping</a>
        </div>
        </div>
    ";
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