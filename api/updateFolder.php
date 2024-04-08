<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $result = "Update tblfolder Set Folder_Name = '".$_POST["name"]."', Folder_Description = '".$_POST["desc"]."' Where Folder_Id = '".$_POST["id"]."'";
        $res = mysqli_query($connection,$result);
    }
?>