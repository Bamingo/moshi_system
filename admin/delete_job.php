<?php

include '../db_connect.php';

$job_id  = $_GET['job_id'];

$sql = "DELETE FROM job_adverts WHERE job_id='" . $_GET['job_id'] . "'";
if (mysqli_query($link, $sql)) {
    header("location:manage_job.php");
} else {
    echo 'failed'. mysqli_error($link);
}

