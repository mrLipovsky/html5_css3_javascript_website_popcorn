<?PHP

require_once(__DIR__."/../interface/icrypt.php");

class Crypt implements ICrypt   
{
    private string $ciphering = "AES-256-CTR";
    private string $key = "asd1231-fhsjkah";
    private string $iv = "adsf123--kHS49-5";
    private int $options = 0;

    public function decrypt(string $password) : string
    {
        return openssl_decrypt($password, $this -> ciphering, $this -> key, $this -> options,$this -> iv);
    }
    public function encrypt(string $password) : string
    {
        return openssl_encrypt($password, $this -> ciphering, $this -> key, $this -> options,$this -> iv);
    }
}



?>