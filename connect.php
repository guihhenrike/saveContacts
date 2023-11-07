<?php

    $Host = "localhost";
    $Username = "root";
    $Password = "root";
    $DbName = "save-contacts";

    try{
    $conn = new PDO("mysql:host=".$Host.";dbname=".$DbName, $Username, $Password);
    echo "Success";
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo $error;
    }

?>