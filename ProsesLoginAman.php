<?php
include 'dbphp';

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username = ? AND password = ?";


$stmt = mysqli_prepare($conn, $query);


mysqli_stmt_bind_param($stmt, "ss", $username, $password);


mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo "Login berhasil. Selamat datang, " . htmlspecialchars($username);
} else {
    echo "Login gagal. Username atau password salah.";
}


mysqli_stmt_close($stmt);
?>
