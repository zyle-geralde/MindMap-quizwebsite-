<?php
    $connection = new mysqli('localhost','root','','dbladeradelapenaf2');

    if(!$connection){
        die (mysqli_error($connection));
    }
?>