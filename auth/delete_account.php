<?PHP 

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/singer.php");
require_once(__DIR__."/auth.php");



if(isset($_POST["submit"]))
{
    session_start();
    $signer = new Signer($connection);
    $signer -> delete_user($_SESSION["email"]);
    $auth = new Auth($connection);
    $auth -> logout();
}


?>