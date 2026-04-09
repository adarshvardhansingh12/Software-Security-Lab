<?php
include("connect.php");

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = trim($_POST['password']);

    // generate salt
    $salt = bin2hex(random_bytes(16));

    // hash password with salt
    $hashed_password = hash('sha256', $salt . $password);

    $stmt = mysqli_prepare($conn,
        "INSERT INTO users (username, password, salt) VALUES (?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "sss", $username, $hashed_password, $salt);
    mysqli_stmt_execute($stmt);

    echo "Registered ✅";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" name="submit" value="Register">
</form>

</body>
</html>
