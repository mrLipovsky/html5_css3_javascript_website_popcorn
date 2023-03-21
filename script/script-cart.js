

document.querySelector('#close-edit').onclick = () =>{
   document.getElementsByClassName('.update__product--form').style.display = 'none';
   window.location.href = '../shopping_cart/add_products.php';
};



document.querySelector('#order_btn').onclick = () =>{
   document.getElementsByClassName('checkout__form').style.display = 'none';
   window.location.href = '../shopping_cart/checkout.php';
};
