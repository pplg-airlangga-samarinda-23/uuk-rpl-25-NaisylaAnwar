<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'kader') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data bayi</title>
    <link rel="stylesheet" href="style.css">
    </a>
</head>
<body>
    <div class="container">
        <h1>DATA BAYI</h1>
    <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Berat badan</th>
                    <th>Tinggi badan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Kynan</td><td>3.5 kg</td><td>50 cm</td></tr>
                <tr><td>Sheva</td><td>4.2 kg</td><td>52 cm</td></tr>
                <tr><td>Zidane</td><td>3.8 kg</td><td>49 cm</td></tr>
                <tr><td>Zayn</td><td>4.0 kg</td><td>51 cm</td></tr>
            </tbody>
        </table>
        <br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
    </div>
</body>
</html>