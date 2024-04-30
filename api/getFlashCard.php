<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $GetquizId = "SELECT QuestionId FROM tblquizquestion WHERE QuizId = '".$_GET["qid"]."'";
        $res = mysqli_query($connection,$GetquizId);

        $allFolderid = array();

        if($fres->num_rows>0){
            while($row  = $fres->fetch_assoc()){
                $allFolderid[] = $row;
            }
        }
        

    }
?>