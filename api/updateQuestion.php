<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $updateQuest = "Update tblquestions Set Question = '".$_POST["qstname"]."', Answer = '".$_POST["qstans"]."' Where Question_Id = '".$_POST["qstid"]."'";
        $resme = mysqli_query($connection, $updateQuest);
    }
?>