<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){

        $fresult = "Select Folder_Id,profid from tbluserprofilefolder where profid = '".$_GET["userid"]."' AND Folder_Id = '".$_GET["folderId"]."'";
        $fres = mysqli_query($connection,$fresult);

        if($fres->num_rows > 0){
            echo "good";
        }
        else{
            echo "bad";
        }
    }
?>