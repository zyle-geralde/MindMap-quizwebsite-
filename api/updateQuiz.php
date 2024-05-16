<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $updateQuiz = "Update tblquizcontainer Set Quiz_Name = '".$_POST["title"]."', Quiz_Description = '".$_POST["descme"]."' Where QuizContainer_Id = '".$_POST["quizid"]."'";
        $res = mysqli_query($connection,$updateQuiz);

    }
?>