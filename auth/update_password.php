<?PHP
session_start();

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");

if(isset($_POST["submit"]))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $confirmNewPassword = $_POST["confirmNewPassword"];
    if(isset($userName)&&isset($password)&&isset($confirmNewPassword)&&
    !empty($userName)&& !empty($password)&& !empty($confirmNewPassword)){
        $signer = new Signer($connection);
        $signer -> update_user($userName, $password, $confirmNewPassword);
        header("Location: ../login.php");
    }
}
session_destroy();

?>