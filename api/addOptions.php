<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $insertOption = "INSERT INTO tbloptions (OptionText) VALUES ('".$_POST["option"]."')";
        mysqli_query($connection,$insertOption);

        $lastInsertedId2 = mysqli_insert_id($connection);

        $insertF2 = "INSERT INTO tblquestionoption (QuestionId,OptionId) VALUES ('".$_POST["QuestId"]."', '".$lastInsertedId2."')";
        mysqli_query($connection,$insertF2);
    }
?>