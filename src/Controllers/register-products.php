<?php
require '../db_connection.php';
require '../Models/RegisterProducts.php';

$name = $_POST['name'];
$type = $_POST['type'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagem = $_POST['imagem'];

$RegisterModel = new RegisterProducts($pdo, $name, $type, $description, $price, $imagem);

$RegisterModel->RegisterProduct();

header("Location: ../../admin.php");


?>