<?PHP 

require_once(__DIR__."/isigner.php");
require_once(__DIR__."/crypt.php");
require_once(__DIR__."/../db/db.php");


class Signer implements ISigner
{
    private mysqli $connection;
    // protected mysqli $connection;
    private const TABLE_NAME = "users";
    private Crypt $crypt;

    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new Crypt();
    }

    public function add_user(string $userName,string $password, string $confirmationPassword, string $firstName, string $lastName) : void
    {
        if($password === $confirmationPassword)
        {
            $enc_password = $this -> crypt -> encrypt($password);
            $sql = " INSERT INTO ".self::TABLE_NAME."(userName, password, firstName, lastName)VALUES('$userName', '$enc_password', '$firstName', '$lastName')";
            if($this -> connection -> query($sql))
            {
                throw new Exception("Adding new user crashed");
            }
        }
    }

    public function update_user(string $userName,string $newPassword, string $confirmNewPassword) :void
    {
        if($newPassword === $confirmNewPassword)
        {
            $enc_password = $this -> crypt -> encrypt($newPassword);
            $sql = " UPDATE ".self::TABLE_NAME." SET password = '$enc_password' WHERE userName = '$userName' ";
            if($this -> connection -> query($sql))
            {
                throw new Exception("User name update crashed");
            }
        }
    }

    public function delete_user(string $userName) : void
    {
        $sql = " DELETE FROM ".self::TABLE_NAME." WHERE UserName = '$userName'";
            if($this -> connection -> query($sql))
            {
                throw new Exception("User deletion user crashed");
            }
    }

}




?>