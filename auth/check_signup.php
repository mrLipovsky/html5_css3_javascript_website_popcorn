<?PHP
session_start();

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");
require_once(__DIR__."/auth.php");


$auth = new Auth($connection);

if(isset($_POST["submit"]))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $confirmationPassword = $_POST["ConfirmationPassword"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    if(isset($userName) && isset($password) && !empty($confirmationPassword) && !empty($firstName) && !empty($lastName) 
    && !isset($userName) && isset($password) && !empty($confirmationPassword) && !empty($firstName) && !empty($lastName))
    {
        $signer = new Signer($sonnection);
        $signer -> add_user($userName, $password, $confirmationPassword, $firstName, $lastName);
    }
} 
header("Location: ../login.php");

?>