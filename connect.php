<?php
    $connection = new mysqli('localhost','root','','dbdelapenaf2');

    if(!$connection){
        die (mysqli_error($connection));
    }
?>