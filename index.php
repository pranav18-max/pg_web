<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Accommodation</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="index.php">
🏠 Student Accommodation
</a>

<div>

<a href="signup.php" class="btn btn-success me-2">
Signup
</a>

<a href="login.php" class="btn btn-primary me-2">
Login
</a>

<a href="shortlist.php" class="btn btn-warning">
My Shortlist
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<h1 class="text-center mb-4">
Student Accommodation
</h1>


<div class="mb-4">

<a href="signup.php" class="btn btn-success">
Signup
</a>
<a
href="shortlist.php"
class="btn btn-warning">

My Shortlist

</a>
<a href="login.php" class="btn btn-primary">
Login
</a>

</div>
<div class="row mb-4">

<div class="col-md-4">
<select id="city" class="form-control">
<option value="">All Cities</option>
<option>Bangalore</option>
<option>Mysore</option>
<option>Hubli</option>
<option>Mangalore</option>
</select>
</div>

<div class="col-md-4">
<select id="gender" class="form-control">
<option value="">All</option>
<option>Male</option>
<option>Female</option>
<option>Unisex</option>
</select>
</div>

</div>
<div id="propertyContainer" class="row">





<?php

$query = mysqli_query(
    $conn,
    "SELECT * FROM properties"
);

while($row = mysqli_fetch_assoc($query))
{
?>

<div class="col-md-4 mb-4">

<div class="card h-100">

<img
src="images/pg<?php echo $row['id']; ?>.jpg"
class="card-img-top">

<div class="card-body">

<h5 class="card-title">
<?php echo $row['name']; ?>
</h5>

<p>
📍 <?php echo $row['city']; ?>
</p>

<p>
💰 ₹<?php echo $row['price']; ?>/month
</p>

<p>
⭐ <?php echo $row['rating']; ?>
</p>

<a
href="property.php?id=<?php echo $row['id']; ?>"
class="btn btn-primary">

View Details

</a>

</div>

</div>

</div>

<?php
}
?>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$("#city, #gender").change(function(){

let city = $("#city").val();
let gender = $("#gender").val();

$.ajax({

url:"ajax/filter_properties.php",

method:"POST",

data:{
city:city,
gender:gender
},

success:function(data){

$("#propertyContainer").html(data);

}

});

});

</script>


</body>
</html>