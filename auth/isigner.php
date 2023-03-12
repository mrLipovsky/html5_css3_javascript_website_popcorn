<?PHP 

interface ISigner
{
    public function add_user(string $userName,string $password, string $confirmationPassword, string $firstName, string $lastName);
    public function update_user(string $userName,string $newPassword, string $confirmNewPassword) :void;
    public function delete_user(string $userName) : void;
}


?>