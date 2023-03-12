<?PHP


require_once(__DIR__."/Repository.php");
require_once(__DIR__."/../model/User.php");


class UserRepository extends Repository 
{
    private const TABLE_NAME = "Users";

    public function __construct(mysqli $connection)
    {
        parent::__construct($connection, self::TABLE_NAME);
    }

    public function get_user(string $userName) : User
    {
        $output = new User();
        $sqlSelect = $this -> connection -> prepare(" SELECT * FROM ".self::TABLE_NAME. " WHERE UserName = ?");
        $sqlSelect -> bind_param("s", $userName);
        $sqlSelect -> execute();
        $res = $sqlSelect -> get_result();
        if($res -> num_rows > 0)
        {
            while ($row = $res -> fetch_assoc()) {
                $output -> Id = $row["Id"];
                $output -> Username = $row["Username"];
                $output -> Password = $row["Password"];
                $output -> FirstName = $row["FirstName"];
                $output -> LastName = $row["LastName"];
            }
        } else {
            echo "0 result";
        }
        return $output;
    }
}


?>