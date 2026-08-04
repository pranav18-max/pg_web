<?php

include("includes/db.php");

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    mysqli_query(
        $conn,
        "INSERT INTO users(name,email,password,phone)
        VALUES('$name','$email','$password','$phone')"
    );

    echo "Signup Successful!";
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Signup</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Create Account</h2>

<form method="POST">

<input
type="text"
name="name"
class="form-control mb-3"
placeholder="Name"
required>

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<input
type="text"
name="phone"
class="form-control mb-3"
placeholder="Phone"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
name="signup"
class="btn btn-success">

Signup

</button>

</form>

</div>

</body>
</html>