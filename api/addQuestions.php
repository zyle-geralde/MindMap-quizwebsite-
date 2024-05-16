<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $insertQuest = "INSERT INTO tblquestions (Question,Answer) VALUES ('".$_POST["quest"]."','".$_POST["ans"]."')";
        mysqli_query($connection,$insertQuest);

        $lastInsertedId = mysqli_insert_id($connection);

        $insertF = "INSERT INTO tblquizquestion (QuizId,QuestionId) VALUES ('".$_POST["QuizId"]."', '".$lastInsertedId."')";
        mysqli_query($connection,$insertF);

        echo $lastInsertedId;

    }
?>