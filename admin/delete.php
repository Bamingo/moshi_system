<?php

include '../db_connect.php';

$id  = $_GET['id'];

 $sql = "DELETE FROM adverts WHERE id='" . $_GET['id'] . "'";
if (mysqli_query($link, $sql)) {
    header("location:matangazo.php");
} else {
    echo 'failed';
}

