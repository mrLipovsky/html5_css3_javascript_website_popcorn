<?PHP

interface ICrypt 
{
    public function decrypt(string $password) : string;
    public function encrypt(string $password) : string;

}



?>