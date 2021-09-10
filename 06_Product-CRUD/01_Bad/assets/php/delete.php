<?php
// connection database
$pdo = new PDO(
  "mysql:host=localhost;port=3306;dbname=products_curd",
  "root",
  ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST["id"] ?? null;

if (!$id) {
  header("Location: ./../../index.php");
  exit();
}

// delete product using MySQL delete query
$statement = $pdo->prepare("DELETE FROM products WHERE id = :id");
$statement->bindValue(":id", $id);
$statement->execute();

// after delete successfully go back index.php
header("Location: ./../../index.php");
