<?php

include("../includes/db.php");

$city = $_POST['city'];
$gender = $_POST['gender'];

$sql = "SELECT * FROM properties WHERE 1";

if($city != "")
{
 $sql .= " AND city='$city'";
}

if($gender != "")
{
 $sql .= " AND gender='$gender'";
}

$query = mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query))
{
?>

<div class="col-md-4 mb-4">

<div class="card">

<img
src="https://picsum.photos/400/250"
class="card-img-top">

<div class="card-body">

<h5>
<?php echo $row['name']; ?>
</h5>

<p>
<?php echo $row['city']; ?>
</p>

<p>
₹<?php echo $row['price']; ?>
</p>

</div>

</div>

</div>

<?php
}
?>