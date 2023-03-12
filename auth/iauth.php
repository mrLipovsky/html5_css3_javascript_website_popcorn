<?PHP

interface IAuth 
{
    public function check_user(string $username, string $password) : bool;
    public function logout() : void;
}


?>