<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Warung ABC</title>
  <style>
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', 'Segoe UI', Roboto, sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg, #e0eafc, #cfdef3);
}
.login-container, 
form {
  background: #ffffff;
  padding: 40px;
  width: 100%;
  max-width: 400px;
  border-radius: 16px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}
h1, h2, .title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #2c3e50;
  text-align: center;
  margin-bottom: 24px;
  line-height: 1.3;
}
.form-group {
  margin-bottom: 20px;
}
label {
  display: block;
  font-size: 0.875rem;
  font-weight: 600;
  color: #555555;
  margin-bottom: 8px;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 12px 16px;
  font-size: 0.95rem;
  color: #333333;
  background-color: #f8fafc;
  border: 1.5px solid #e2e8f0;
  border-radius: 8px;
  outline: none;
  transition: all 0.3s ease;
}
input[type="text"]:focus,
input[type="password"]:focus {
  background-color: #ffffff;
  border-color: #2563eb;
  box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
}
button, 
input[type="submit"] {
  width: 100%;
  padding: 12px;
  margin-top: 10px;
  background-color: #2563eb;
  color: #ffffff;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.2s ease, transform 0.1s ease;
}
button:hover, 
input[type="submit"]:hover {
  background-color: #1d4ed8;
}

button:active, 
input[type="submit"]:active {
  transform: scale(0.98);
}
</style>
</head>
<body>

    <h1>Login Aplikasi Kasir Warung ABC</h1>

    <?php
    if (isset($_SESSION['pesan_error'])) {
        echo '<p>' . $_SESSION['pesan_error'] . '</p>';
        unset($_SESSION['pesan_error']);
    }
    ?>
    <div class="login-card">
    <!-- Judul diletakkan paling atas di dalam card -->
    <h2 class="title">Login Aplikasi Kasir Warung ABC</h2>

    <form>
      <div class="form-group">
        <label for="username">Username :</label>
        <input type="text" id="username" value="admin">
      </div>

      <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" id="password" value="12345678">
      </div>

      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>

    <form action="proses_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td colspan="3">
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>