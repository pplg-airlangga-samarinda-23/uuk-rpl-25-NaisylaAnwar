<?php
session_start();

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role === 'admin' && $username === 'admin' && $password === 'adminbost') {
        $_SESSION['role'] = 'admin';
        header("Location: data-kader.php");
        exit;
    } elseif ($role === 'kader' && $username === 'kader' && $password === 'kaderaja') {
        $_SESSION['role'] = 'kader';
        header("Location: data-bayi.php");
        exit;
    } else {
        $login_error = "Login gagal! Username, password, atau role salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>POSYANDU AWS - Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #c9e3bd;
            padding: 40px;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
        }

        .main {
            background-color: #7bd0dc;
            height: calc(100vh - 120px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: #fef1cd;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-container button {
            width: 45%;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        .button-container button:hover {
            background-color: #eee;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">POSYANDU AWS</div>

    <div class="main">
        <div class="login-box">
            <?php if ($login_error): ?>
                <div class="error"><?= $login_error ?></div>
            <?php endif; ?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="username/email" required>
                <input type="password" name="password" placeholder="password" required>

                <p>masuk sebagai</p>
                <div class="button-container">
                    <button type="submit" name="role" value="admin">Admin</button>
                    <button type="submit" name="role" value="kader">Kader</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
