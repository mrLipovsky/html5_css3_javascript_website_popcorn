<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <base href="/">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/style_media.css">
    <title>Popcorn registration</title>
</head>
<body>

<!-- =============== 
Header
===============  -->
<?php
    include "./components/header.php";
?>

<!-- =============== 
Register Form
===============  -->
<Section>
    <form id="form__register" 
    class="form__register"
    method="POST" 
    action="./auth/check_signup.php">
    <h1>Sign in</h1>
    <!-- display validation error here-->
            <div class='form__register-input-group input-control'>
                <label for="userName">Email: </label>
                <input type="text" name="userName" id="userName" 
                reguired 
                class="main__input--one"
            </div>
            <div class='form__register-input-group input-control'>
                <label for="password">Password: </label>
                <input type="password"  name="password" id="password" 
                reguired
                class="main__input--one">
            </div>
            <div class='form__register-input-group input-control'>
                <label for="confirmationPassword">Confirm Password: </label>
                <input type="password"  name="confirmationPassword" id="confirmationPassword" 
                reguired
                class="main__input--one">
            </div>
            <div class='form__register-input-group input-control'>
                <label for="firstName">First name: </label>
                <input type="text"  name="firstName" id="firstName" 
    
                class="main__input--one">
            </div>
            <div class='form__register-input-group input-control'>
                <label for="lastName">Last name: </label>
                <input type="text"  name="lastName" id="lastName" 
                class="main__input--one">
            </div>
            <div class='form__register-input-btn'>
                <input type="submit" name="submit" value="register" 
                class="form__register-btn main__button--one">
            </div>
            <div class='form__register-input-info'>
                <p>Already member? <a href="login.php">Log In</a> </p>
            </div>
        </form>  
</Section>
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