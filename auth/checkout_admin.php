<?PHP

if(isset($_POST['order_btn']))
   {
      $name = $_POST['name'];
      $number = $_POST['number'];
      $email = $_POST['email'];
      $method = $_POST['method'];
      $street = $_POST['street'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $post_code = $_POST['post_code'];

      $cart_query = mysqli_query($connection, "SELECT * FROM `cart`");
      $price_total = 0;

      if(mysqli_num_rows($cart_query) > 0)
      {
         while($product_item = mysqli_fetch_assoc($cart_query))
         {
               $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
               $product_price = number_format($product_item['price'] * $product_item['quantity']);
               $price_total += $product_price;
         };
      } 

      $total_product = implode(', ',$product_name);
      $detail_query = mysqli_query($connection, "INSERT INTO `order`(name, number, email, method, street, city, country, post_code, total_products, total_price) 
      VALUES('$name','$number','$email','$method','$street','$city','$country','$post_code','$total_product','$price_total')") or die('query failed');
      
      // show order message sum
      if($cart_query && $detail_query) 
         {
            echo"
            <div class='checkout__message-container'>
               <h4>thank you for order: </h4>
               <div class='checkout__message'>
                  <p>your order: ".$total_product."</p>
                  <p>total to pay: ".$price_total." EUR</p>
               </div>
               <div class='checkout__message-customer-details'>
                     <p> your name: ".$name." </p>
                     <p> your number: ".$number." </p>
                     <p> your email: ".$email." </p>
                     <p> your address: ".$street.", ".$city.", ".$country." - ".$post_code." </p>
                     <p> your payment mode: ".$method." </p>
                     <p>(*pay when product arrives*)</p>
               </div>
               <div class='checkout__message-btn'>
                  <a href='items.php' class='main__button--one'>continue shopping</a>
               </div>
            </div>
            <div class='checkout__form'><p>your cart is empty!</p></div>";
         }
         else {
               echo "<div class='checkout__form-display-message'><p>please register to continue</p></div>";
               echo " <a href='../login.php'>Login</a>";
         }
   }

?>