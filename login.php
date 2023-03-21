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
    <title>login page</title>
</head>
<body>
<!-- =============== 
Header
===============  -->
<?php
    include "../web_popcorn/components/header.php";
?>

<!-- =============== 
Login Form
===============  -->
<section>
    <form id="form__login" class="form__login" method="POST" action="../auth/check_login.php">
    <h1>Login</h1>
    <!-- display validation error here-->
        <div class='form__login-input-group'>
            <label>Email: </label>
            <input  
            type="text" 
            name="userName" 
            reguired 
            class="main__input--one">
        </div>
        <div class='form__login-input-group'>
            <label>Password: </label>
            <input 
            type="password" 
            name="password" 
            required 
            class="main__input--one">
        </div>
        <div class='form__register-input-group input-control'>
            <label>Remember me: </label>
            <input 
            type="checkbox"  
            name="remember"
            class="">
        </div>
        <div class='form__register-input-btn '>
            <input 
            type="submit" 
            name="submit" 
            value="login" 
            class="form__login-btn main__button--one">
        </div>
        <div class='form__register-input-info'>
            <p>Not yet member: 
                <a href="./register.php">Sign up</a></p>
            <br>
            <p>
                <a href="./forgot.php">Reset password up</a></p>
        </div>
    </form>  
</section>
<!-- =============== 
Footer
===============  -->
<?php
    include "./components/footer.php";
?>

<!-- =============== 
javascript
===============  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./script/script.js"></script>
</body>
</html>