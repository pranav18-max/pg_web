<?php

include("includes/db.php");

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM properties WHERE id=$id"
);

$property = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>

<head>

<title>
<?php echo $property['name']; ?>
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>
<?php echo $property['name']; ?>
</h1>

<img
src="images/pg<?php echo $property['id']; ?>.jpg"
class="img-fluid rounded mb-3">
<p>
📍 City:
<?php echo $property['city']; ?>
</p>

<p>
💰 Price:
₹<?php echo $property['price']; ?>
</p>

<p>
⭐ Rating:
<?php echo $property['rating']; ?>
</p>

<h4>Amenities</h4>

<ul>
    <li>📶 WiFi</li>
    <li>🧺 Laundry</li>
    <li>🍽 Food Included</li>
    <li>🚿 Attached Bathroom</li>
    <li>🔒 24x7 Security</li>
</ul>

<p>
<?php echo $property['description']; ?>
</p>
<a
href="interest.php?id=<?php echo $property['id']; ?>"
class="btn btn-success">

Interested

</a>
<a href="index.php" class="btn btn-secondary">
Back
</a>

</div>

</body>
</html>