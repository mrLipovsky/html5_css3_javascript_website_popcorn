<?PHP 

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");
require_once(__DIR__."/auth.php");



if(isset($_POST["submit"]))
{
    session_start();
    $signer = new Signer($connection);
    $signer -> delete_user($_SESSION["userName"]);
    $auth = new Auth($connection);
    $auth -> logout();
    session_destroy();
}


?>