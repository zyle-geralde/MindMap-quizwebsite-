<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $getchoice = "Select OptionId From tblquestionoption Where QuestionId = '".$_GET["questId"]."'";
        $res = mysqli_query($connection,$getchoice);

        $records = array();
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $records[] = $row;
            }
        }

        $realrec = array();

        for($loop = 0; $loop<count($records); $loop++){
            $getAllOpt= "Select * From tbloptions where OptionId = '".$records[$loop]["OptionId"]."'";
            $res2 = mysqli_query($connection,$getAllOpt);
            if($res2->num_rows > 0){
                while($row = $res2->fetch_assoc()){
                    $realrec[] = $row;
                }
            }
        }

        echo json_encode($realrec);
    }
?>