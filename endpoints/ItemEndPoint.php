<?PHP 

require_once(__DIR__."/../dal/ItemRepository.php");

if(isset($_POST["operation_type"]))
{
    $itemRepo = new ItemRepository($connection);
    $groupRepo = new GroupRepository($connection);
    if($_POST["operation_type"] == "create")
    {
        if(isset($_POST["Content"]) && isset($_POST["Done"]) &&
        isset($_POST["CreatedOn"]) && isset($_POST["UpdatedOn"]) &&
        isset($_POST["GroupId"]))
        {
        $input = array("Content" => $_POST["Content"], 
                        "Done" => $_POST["Done"],
                        "CreatedOn" => $_POST["CreatedOn"], 
                        "UpdateOn" => $_POST["UpdateOn"],
                        "GroupId" => $_POST["GroupId"]);
        echo $itemRepo -> created($input);

        $condition = "Id = ".$_POST["Id"];
        $updateInput = array("UpdatedOn" => $_POST['CreatedOn']);
        $groupRepo -> update($updateInput, $condition);
        }
    }

    else if($_POST["operation_type"] == "upadate")
    {
        if(isset($_POST["Id"]) && isset($_POST["UpdatedOn"]) &&
        isset($_POST["Done"]) && isset($_POST["Content"]) &&
        isset($_POST["GroupId"]))
        {
            $condition = "Id = ".$_POST["Id"];
            $input = array("Content" => $_POST["Content"], 
                            "Done" => $_POST["Done"],
                            "UpdateOn" => $_POST["UpdatedOn"]);
            $itemRepo -> update($input, $condition);
            $groupCondition = "Id = ".$_POST["GroupId"];
            $groupInput = array("UpdateOn" => $_POST["UdateOn"]);
            $groupRepo = array($groupInput, $groupCondition);
        }
    }

    else if($_POST["operation_type"] == "delete")
    {
        if(isset($_POST["Id"]) && isset($_POST["Date"]) &&
        isset($_POST["GroupId"]))
        {
            $deletedCondition = "Id = ".$_POST["Id"];
            $udatedCondition = "Id = ".$_POST["GroupId"];
            $udatedInput = array("UpdatedOn" => $_POST["Date"]);
            $itemRepo -> deleted($deletedCondition);
            $groupRepo -> update($updatedInput, $updatedCondition);
        }
    }
}

?>