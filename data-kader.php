<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data kader</title>
    <link rel="stylesheet" href="style.css">
    </a>
</head>
    <table>
        <thead>
                <tr>
                    <th>Nama</th>
                    <th>Password</th>
                </tr>
            </thead>
        <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama</th>
                        <th>Password</th>
                    </tr>
            </thead>
                <tbody>
                            <a href="data-kader.php">Edit</a>
                            <a href="data-hapus.php">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </table>
        <br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
    </div>
</body>
</html>