<!DOCTYPE html>
<html>
<head>
    <title>Login Form (Rentan SQL Injection)</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="proses_login.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="text" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
