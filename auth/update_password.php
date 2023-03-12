<?PHP
session_start();

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/singer.php");

if(isset($_POST["submit"]))
{
    $username = $_POST["userName"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmationPassword"];
    if(isset($username)&&isset($password)&&isset($confirmationPassword)&&
    !empty($username)&& !empty($password)&& !empty($confirmationPassword)){
        $signer = new Signer($connection);
        $signer -> update_user($userName, $password, $confirmationPassword);
        header("Location: login.php");
    }
}


?>