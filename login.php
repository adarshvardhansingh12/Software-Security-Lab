<?php
session_start();
include("connect.php");

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = trim($_POST['password']);

    $stmt = mysqli_prepare($conn,
        "SELECT password, salt FROM users WHERE username = ?");

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        $salt = $row['salt'];   // ✅ USE STORED SALT

        $hashed_input = hash('sha256', $salt . $password);

        echo "Stored: " . $row['password'] . "<br>";
        echo "Generated: " . $hashed_input . "<br>";

        if ($hashed_input === $row['password']) {
            echo "Login success ✅";
        } else {
            echo "Invalid Password ❌";
        }

    } else {
        echo "User not found ❌";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>