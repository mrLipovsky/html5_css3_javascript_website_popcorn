<?PHP 

interface ISigner
{
    public function add_user(string $username,string $password, string $confirmPassword, string $firstName, string $lastName);
    public function update_user(string $username,string $newPassword, string $confirmNewPassword) :void;
    public function delete_user(string $username) : void;
}


?>