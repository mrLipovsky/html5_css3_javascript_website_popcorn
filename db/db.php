<?PHP
session_start();

require_once(__DIR__."/../db/db.php");

global $mysqli;

$servername = 'localHost';
$username = 'web_user';
$password = 'heslo';
$database = 'registration';

//Register form Connect to DB
$connection = mysqli_connect($servername, $username, $password, $database) or die('bad connection: '.mysqli_connect_error());

if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }
  echo "Connect Successfully. Host info: " . mysqli_get_host_info($connection);


// // receive all input values from the form by press input button
// if (isset($_POST['submit_one'])) {
//     $username = mysqli_real_escape_string($db, $_POST['username']);
//     $email =  mysqli_real_escape_string($db, $_POST['email']);
//     $password = mysqli_real_escape_string($db, $_POST['password']);

// //Registration form field errors
// if (empty($username)) {
//     array_push($errors, "Username is reguired");
// }
// if (empty($email)) {
//     array_push($errors, "Email is reguired");
// }
// if (empty($password)) {
//     array_push($errors, "Password is reguired");
// }

// // Not error save user to DB
// if (count($errors) == 0) {
//     $sql = "INSERT INTO users(username,email,password) 
//     VALUES('$username', '$email', '$password')";
//     mysqli_query($db, $sql);
//     $_SESSION['message'] = " You are now logged in";
//     $_SESSION['username'] = $username;
//     header("Location: index.php");
//     }
// }

// //Login form Connect to DB
// if (isset($_POST['submit_two'])){
//     $email = mysqli_real_escape_string($db, $_POST['email']);
//     $password = mysqli_real_escape_string($db, $_POST['password']);

// //Login form field errors
// if (empty($email)) {
//     array_push($errors, "Email is reguired");
// }
// if (empty($password)) {
//     array_push($errors, "Password is reguired");
// }
// if (count($errors) == 0) {
//     $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//     $result = mysqli_query($db, $query);
//         if (mysqli_num_rows($result) == 1) {
//             $_SESSION['email'] = $email;
//             header('Location: index.php');
//         } else {
//             array_push($errors, "Wrong email and password combination ");
//         }
//     }
// }
?>