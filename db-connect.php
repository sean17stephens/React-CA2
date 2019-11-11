<?php

$db_name = 'sean_products';
$db_user = 'sean';
$db_pass = '17millroad';

$db      = new PDO("mysql:host=localhost;dbname=$db_name;
charset=utf8mb4", $db_user, $db_pass);

$statement = $db->prepare('SELECT id,name,price,description from products');
$statement->execute();

$products = $statement->fetchAll();

header('Content-Type: application/json');
echo json_encode($products);

?>
