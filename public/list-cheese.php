<?php

require "../classes/Cheese.php";

try {
    $pdo = new PDO("mysql:hostname=localhost;dbname=cheese_db;charset=utf8mb4", "root", "");
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare("SELECT * from cheese");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");

// var_dump($results);
var_dump($results[0]);

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