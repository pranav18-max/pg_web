<?php

session_start();

include("includes/db.php");

$user_id = $_SESSION['user_id'];

$query = mysqli_query(
$conn,

"SELECT properties.*

FROM properties

JOIN interested_users

ON properties.id =
interested_users.property_id

WHERE interested_users.user_id =
$user_id"
);

while($row=mysqli_fetch_assoc($query))
{
    echo $row['name'];
    echo "<br>";
}
?>