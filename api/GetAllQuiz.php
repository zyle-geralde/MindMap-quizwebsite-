<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $allQuiz = "Select QuizContainer_Id	 from tblfolderquizcontainer where Folder_id = '".$_GET["folderId"]."'";

        $res = mysqli_query($connection,$allQuiz);

        $fresult = "Select Folder_Id,profid from tbluserprofilefolder where profid = '".$_GET["userid"]."' AND Folder_Id = '".$_GET["folderId"]."'";
        $fres = mysqli_query($connection,$fresult);

        $records1 = array();
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $records1[] = $row;
            }
        }

        $allQuizReal = "Select * from tblquizcontainer";

        $res2 = mysqli_query($connection,$allQuizReal);

        $records2 = array();
        if($res2->num_rows > 0){
            while($row = $res2->fetch_assoc()){
                for($loop = 0; $loop<count($records1); $loop++){
                    if($row["QuizContainer_Id"] == $records1[$loop]["QuizContainer_Id"]){
                        if($fres->num_rows > 0){
                            $row["profid"] = $_GET["userid"];
                        }
                        $records2[] = $row;
                        break;
                    }
                }
            }

            echo json_encode($records2);
        }
    }
?>