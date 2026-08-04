<?php

session_start();

include("includes/db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    $user = mysqli_fetch_assoc($query);

    if(
        $user &&
        password_verify(
            $password,
            $user['password']
        )
    )
    {
        $_SESSION['user_id'] = $user['id'];

        echo "Login Successful!";
    }
    else
    {
        echo "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Login</h2>

<form method="POST">

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
name="login"
class="btn btn-primary">

Login

</button>

</form>

</div>

</body>
</html>