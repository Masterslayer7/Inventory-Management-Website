<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
    $BSAProductID = $product->BSAProductID;
    $BSAProductCode = $product->BSAProductCode;
    $BSAProductName = $product->BSAProductName;
    $BSAListPrice = $product->BSAListPrice;


    $option = "<strong>Product ID:</strong> $BSAProductID<br>" .
              "<strong>Product Code:</strong> $BSAProductCode<br>" .
              "<strong>Product Name:</strong> $BSAProductName<br>" .
              "<strong>List Price:</strong> $" . number_format($BSAListPrice, 2) . "<br>";
              
    echo "$option<br>";
}
?>
