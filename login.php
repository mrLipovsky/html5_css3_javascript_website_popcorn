<?php include('server.php'); 

?>
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
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <title>Popcorn login</title>
</head>
<body>
<!-- =============== 
Header
===============  -->
<?php
    include "./components/header.php";
?>
<!-- =============== 
Login Form
===============  -->
<section>
    <form class="form__login" method="POST" action="login.php">
    <!-- display validation error here-->
        <?php include('errors.php'); ?>
        <div class='form__login-input-group'>
            <label>Email: </label>
            <input type="email" name="email"  id="email" reguired 
            onfocus="elementFocus(this)"
            onblur="elementLostFocus(this)"
            value="<?php echo $email; ?>">
        </div>
        <div class='form__login-input-group'>
            <label>Password: </label>
            <input type="text" name="password" id="password" required 
            onfocus="elementFocus(this)"
            onblur="elementLostFocus(this)"
            >
        </div>
        <div class='form__register-input-btn'>
            <input type="submit" name="submit_two" value="login" class="form__login-btn main__grafic--two">
        </div>
        <div class='form__register-input-info'>
            <p>Not yet member? <a href="register.php">Sign up</a></p>
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
    <script type="application/json" src="script.js"></script>
</body>
</html>