<?php
    $connection = new mysqli('localhost','root','123456','dbladeradelapenaf2');

    if(!$connection){
        die (mysqli_error($connection));
    }
?>