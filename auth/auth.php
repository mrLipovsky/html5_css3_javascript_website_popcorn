<?PHP

require_once(__DIR__."/crypt.php");
require_once(__DIR__."/iauth.php");


class Auth implements IAuth   
{
    private mysqli $connection;
    private const TABLE_NAME = "users";
    private Crypt $crypt;
    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new Crypt();
    }
    public function check_user(string $userName, string $password) : bool
    {
        $enc_password = $this -> crypt -> encrypt($password);
        $sql = " SELECT * FROM ".self::TABLE_NAME." WHERE userName = '$userName' AND password = '$enc_password'";
        $res = $this -> connection -> query($sql);
        if($res -> num_rows === 0){
            echo "chyba checkuser";
            return false;
        }
        return true;
    }
    public function logout() : void
    {
        session_start();
        setcookie("username", "", time() - 8640 *10);
        unset($_COOKIES["username"]);

        session_start();
        setcookie("password", "", time() - 8640 *10);
        unset($_COOKIES["password"]);

        session_start();
        setcookie("remember", "", time() - 8640 *10);
        unset($_COOKIES["remember"]);

        unset($_COOKIES["name"]);
        unset($_COOKIES["heslo"]);
    }
}



?>