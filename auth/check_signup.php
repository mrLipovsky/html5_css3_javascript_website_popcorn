<?PHP

require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/signer.php");
require_once(__DIR__."/auth.php");


$auth = new Auth($connection);

if(isset($_POST["submit"]))
{
    $userName = $_POST["UserName"];
    $password = $_POST["Password"];
    $confirmationPassword = $_POST["ConfirmationPassword"];
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    if(isset($userName) && isset($password) && !empty($confirmationPassword) && !empty($FirstName) && !empty($LastName) 
    && !isset($userName) && isset($password) && !empty($confirmationPassword) && !empty($FirstName) && !empty($LastName))
    {
        $signer = new Signer($sonnection);
        $signer -> add_user($userName, $password, $confirmPassword, $firstName, $lastName);
    }

}
header("Location: ../login.php")

?>