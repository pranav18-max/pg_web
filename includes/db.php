<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_accommodation"
);

if(!$conn){
    die("Database Connection Failed");
}

?>