<?php

$db_name = 'sean_products';
$db_user = 'root';
$db_pass = '';
try{
$db      = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);

$statement = $db->prepare('SELECT ProductID,Name,Price,Description from products');
$statement->execute();

$products = $statement->fetchAll();

header('Content-Type: application/json');
echo json_encode($products);
} catch (Exception $e) {
    echo 'PDO Error: ',  $e->getMessage(), "\n";
}
?>
