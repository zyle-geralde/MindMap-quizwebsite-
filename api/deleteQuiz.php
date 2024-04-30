<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $delPost = "Delete from tblquizcontainer where QuizContainer_Id = '".$_POST["id"]."'";
        $res = mysqli_query($connection,$delPost);
        echo "success";
    }
?>