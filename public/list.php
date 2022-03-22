<?php

try {
    $pdo = new PDO("mysql:hostname=localhost;dbname=cheese_dbs;charset=utf8mb4", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} catch (PDOException $e) {
    die($e->getMessage());
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 19 - Heroku Site</title>
</head>

<body>
    <h1>Yup</h1>
</body>

</html>