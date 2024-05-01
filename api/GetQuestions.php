<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $getQuest = "Select QuestionId From tblquizquestion where QuizId = '".$_GET["quizid"]."'";
        $res = mysqli_query($connection,$getQuest);

        $records = array();
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $records[] = $row;
            }
        }

        $realrec = array();

        for($loop = 0; $loop<count($records); $loop++){
            $getAllQuest = "Select * From tblquestions where Question_Id = '".$records[$loop]["QuestionId"]."'";
            $res2 = mysqli_query($connection,$getAllQuest);
            if($res2->num_rows > 0){
                while($row = $res2->fetch_assoc()){
                    $realrec[] = $row;
                }
            }
        }

        echo json_encode($realrec);
    }
?>