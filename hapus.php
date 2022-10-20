<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
        "DELETE FROM web WHERE id='$id'");

    if($result){
        header("Location:tabel.php");
    }
}

?>