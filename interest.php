<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['user_id']))
{
    die("Please login first");
}

$user_id = $_SESSION['user_id'];

$property_id = $_GET['id'];

mysqli_query(
    $conn,
    "INSERT INTO interested_users
    (user_id,property_id)

    VALUES

    ($user_id,$property_id)"
);

echo "Property Added Successfully!";
?>