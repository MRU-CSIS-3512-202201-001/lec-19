<?php

require "../classes/Cheese.php";
require "../classes/CheesePresenter.php";

try {
    $pdo = new PDO("mysql:hostname=localhost;dbname=cheese_db;charset=utf8mb4", "root", "");
} catch (PDOException $e) {
    die($e->getMessage());
}


$statement = $pdo->prepare("SELECT cheese.id as id, cheese.name as name, classification.name as classification, code from cheese INNER JOIN classification ON (cheese.classification_id = classification.id) where cheese.id = :id");
$statement->execute(["id" => 7]);
$results = $statement->fetchAll(PDO::FETCH_CLASS, "Cheese");


$presenter = new CheesePresenter($results[0]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Lecture 19 - Heroku Site</title>
</head>

<body>
    <?= $presenter->details() ?>
</body>

</html>