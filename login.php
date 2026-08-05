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
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
        }
        
        .login-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
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