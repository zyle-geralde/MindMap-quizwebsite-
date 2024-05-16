<?php
    include "../connect.php"
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $addtoQuiz = "Insert into tblquizcontainer(Quiz_Name,Quiz_Description,Number_of_Items,Quiz_Type)values('".$_POST["title"]."','".$_POST["desc"]."','".$_POST["items"]."','".$_POST["type"]."')";
        mysqli_query($connection, $addtoQuiz);

        $lastid = mysqli_insert_id($connection);

        $insertforeign = "Insert into tblfolderquizcontainer(Folder_id,QuizContainer_Id) values('".$_POST["folderId"]."','".$lastid."')";
        mysqli_query($connection,$insertforeign);

        echo $lastid;
    }
?>