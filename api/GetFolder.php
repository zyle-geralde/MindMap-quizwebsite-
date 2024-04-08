<?php
    include "../connect.php";
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $result = "Select * from tblfolder where Folder_Name = '".$_GET["name"]."'";
        $res = mysqli_query($connection,$result);

        if($res->num_rows>0){
            $records = array();
            while($row = $res->fetch_assoc()){
                $records[] = $row;
            }
            echo json_encode($records);
        }
    }
?>