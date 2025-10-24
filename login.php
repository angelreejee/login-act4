<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "logindb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo "<h2>Login Successful! Welcome, $email</h2>";
} else {
    echo "<h2>Invalid email or password!</h2>";
}
?>
