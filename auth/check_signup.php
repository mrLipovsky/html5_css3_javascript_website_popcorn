<?PHP

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");
require_once(__DIR__."/auth.php");

$auth = new Auth($connection);


if(isset($_POST["submit"]))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $confirmationPassword = $_POST["confirmationPassword"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $admin = $_POST["admin"];
    if(isset($userName) && isset($password) && isset($confirmationPassword) && isset($firstName) && isset($lastName) && isset($admin)
    && !empty($userName) && !empty($password) && !empty($confirmationPassword) && !empty($firstName) && !empty($lastName) && !empty($admin))
    {
        $signer = new Signer($connection);
        $signer -> add_user($userName, $password, $confirmationPassword, $firstName, $lastName, $admin);
    }   
} 

header("Location: ../login.php");

?>