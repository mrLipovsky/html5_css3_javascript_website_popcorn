<?php 
session_start();

$username = "";
$email = "";
$password = '';
$errors = array();

global $mysqli;

//Connect to DB
$db = mysqli_connect('localhost', 'root', '', 'registration') or die('bad connection: '.mysqli_connect_error());

// receive all input values from the form by press input button
if (isset($_POST['submit_one'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email =  mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

//Registration form field errors
if (empty($username)) {
    array_push($errors, "Username is reguired");
}
if (empty($email)) {
    array_push($errors, "Email is reguired");
}
if (empty($password)) {
    array_push($errors, "Password is reguired");
}

// Not error save user to DB
if (count($errors) == 0) {
    $password = md5($password); //encrypt password before starting in DB(security)
    $sql = "INSERT INTO users(username,email,password) 
    VALUES('$username', '$email', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = " You are now logged in";
    $_SESSION['username'] = $username;
    header("location: Login.php");
    }
}

//Connect to DB
if (isset($_POST['submit_two'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

//Login form field errors
if (empty($email)) {
    array_push($errors, "Email is reguired");
}
if (empty($password)) {
    array_push($errors, "Password is reguired");
}
if (count($errors) == 0) {
    $password = md5($password); //encrypt password before starting in DB(security)
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are logged in";
            header('location: index.php'); //redirect to home page
        } else {
            array_push($errors, "Wrong email and password combination ");
        }
    }
}

//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}


?>