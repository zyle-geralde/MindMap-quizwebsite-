<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $result = "Select * from tblfolder where Folder_Name = '".$_GET["name"]."'";
        $res = mysqli_query($connection,$result);
        $fresult = "Select Folder_Id,profid from tbluserprofilefolder where profid = '".$_GET["userId"]."'";
        $fres = mysqli_query($connection,$fresult);

        $allFolderid = array();

        if($fres->num_rows>0){
            while($row  = $fres->fetch_assoc()){
                $allFolderid[] = $row;
            }
        }

        if($res->num_rows>0){
            $records = array();
            while($row = $res->fetch_assoc()){

                for($loop = 0; $loop< count($allFolderid); $loop++){
                    if($allFolderid[$loop]["Folder_Id"] == $row["Folder_Id"]){
                        $row["profid"] = $allFolderid[$loop]["profid"];
                        break;
                    }
                }
                
                $records[] = $row;
            }
            echo json_encode($records);
        }
    }
?>