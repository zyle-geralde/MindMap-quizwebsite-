<?php
    include "../connect.php"
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $insertinto = "Insert into tblfolder(Folder_Name,Folder_Description,Number_of_Items) values('".$_POST["name"]."','".$_POST["description"]."','".$_POST["items"]."')";
        mysqli_query($connection, $insertinto);

        $lastInsertedId = mysqli_insert_id($connection);

        $insertforeign = "INSERT INTO tbluserprofilefolder(Folder_id,profid) VALUES('".$lastInsertedId."','".$_POST["userId"]."')";
        mysqli_query($connection, $insertforeign);
    }
?>