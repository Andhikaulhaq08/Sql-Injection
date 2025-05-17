<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);


if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($result) > 0) {
    echo "Login berhasil. Selamat datang, " . htmlspecialchars($username);
} else {
    echo "Login gagal. Username atau password salah.";
}
?>
