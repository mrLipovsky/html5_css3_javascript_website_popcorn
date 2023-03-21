<?PHP

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");

$auth = new Auth($connection);

if(isset($_POST["submit"]))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    if(isset($userName) && isset($password) && !empty($userName) && !empty($password))
    {
        // validator
        if(!empty($_POST["remember"]))
        {
            if(!isset($_COOKIE["remember"])){
                setcookie("remember", 1, time() + 86400 * 10); // vyprsi za 10 dnu
            }
            
            if(!isset($_COOKIE["username"])){
                setcookie("userName", $userName, time() + 86400 * 10); // vyprsi za 10 dnu
            }
            
            if(!isset($_COOKIE["password"])){
                setcookie("password", $password, time() + 86400 * 10); // vyprsi za 10 dnu
            } else {
                setcookie("userName","");
                setcookie("password","");
                echo "Cookies Not Set";
            }
        }
        if($auth -> check_user($userName, $password))
        {
            $_SESSION["userName"] = $userName;
            $_SESSION["password"] = $password;

            header("Location: ../index.php");
        }
        // header("Location: ../login.php");
    }
    // header("Location: ../index.php");
}





?>