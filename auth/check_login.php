<?PHP
session_start();

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/auth.php");

$auth = new Auth($connection);

if(isset($_POST["submit"]))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    if(isset($userName) && isset($password) && !empty($userName) && !empty($password))
    {
        if($auth -> check_user($userName, $password))
        {
            $_SESSION["userName"] = $userName;
            $_SESSION["password"] = $password;
            
            header("Location: ../index.php");
        } 
        // validator
        if(!empty($_POST["remember"]))
        {
            if(!isset($_COOKIE["remember"])){
                setcookie("remember", 1, time() + 86400 * 10); // vyprsi za 10 dnu
            }
            
            if(!isset($_COOKIE["userName"])){
                setcookie("username", $userName, time() + 86400 * 10); // vyprsi za 10 dnu
            }
            
            if(!isset($_COOKIE["password"])){
                setcookie("password", $password, time() + 86400 * 10); // vyprsi za 10 dnu
            } 
        }

        // else {
    //     if(empty($_POST["remember"]))
    //     {
    //         if(isset($_COOKIE["remember"])){
    //            setcookie("remember", 1,  null, -1, '/'); // vyprsi za 10 dnu
    //         }
            
    //         if(!isset($_COOKIE["userName"])){
    //             setcookie("userName", $userName,  null, -1, '/'); // vyprsi za 10 dnu
    //         }
            
    //         if(!isset($_COOKIE["password"])){
    //             setcookie("password", $password,  null, -1, '/'); // vyprsi za 10 dnu
    //         }
    //     }
    //     if($auth -> check_user($userName, $password))
    //     {
    //         session_start();
    //         $_SESSION["userName"] = $userName;
    //         $_SESSION["password"] = $password;
    //         header("Location: ../index.php");
    //     }
    }
}


?>