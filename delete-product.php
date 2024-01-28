<?php

require 'src/db_connection.php';
require 'src/Models/DeleteProducts.php';


$id = (($_POST['id'] > 0) ? $_POST['id'] : 0);

$ProductsModel = new DeleteProducts($id, $pdo);
$ProductsModel->DeleteProduct();

header("Location: admin.php");


?>