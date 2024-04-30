<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $GetquizId = "SELECT * FROM tblquizquestion WHERE QuizId = '".$_GET["qid"]."'";
        $res = mysqli_query($connection,$GetquizId);

        $allQuestionid = array();

        if($res->num_rows>0){
            while($row  = $res->fetch_assoc()){
                $allQuestionid[] = $row;
            }
        }
        

        $allQQ = array();
        for($loop = 0; $loop< count($allQuestionid); $loop++){
            $getEss = "SELECT * FROM tblquestions WHERE Question_Id = '".$allQuestionid[$loop]["QuestionId"]."'";
            $resme = mysqli_query($connection,$getEss);
            $row = $resme->fetch_assoc();
            $allQQ[] = $row;
        }

        echo json_encode($allQQ);

    }
?>