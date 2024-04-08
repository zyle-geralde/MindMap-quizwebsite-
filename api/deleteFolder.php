<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $result = "Delete from tblfolder where Folder_Id = '".$_POST["id"]."'";
        $res = mysqli_query($connection,$result);
    }
?>