<?php

// Call model
require_once "objects/productsObjects.php";
$products=ProductsObjects::getAllProducts();

$json_response=json_encode($products);

echo $json_response;





