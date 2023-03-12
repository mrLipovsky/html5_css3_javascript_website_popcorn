<?PHP

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/singer.php");

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    if(isset($username)&&isset($password)&&isset($confirmPassword)&&
    !empty($username)&& !empty($password)&& !empty($confirmPassword)){
        $signer = new Signer($connection);
        $signer -> update_user($username, $password, $confirmPassword);
        header("Location: login.php");
    }
}


?>