<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
    $BSAProductID = $product->BSAProductID;
    $BSAProductCode = $product->BSAProductCode;
    $BSAProductName = $product->BSAProductName;
    $BSADescription = $product->BSADescription;
    $BSACategoryID = $product->BSACategoryID;
    $BSAWholesalePrice = $product->BSAWholesalePrice;
    $BSAListPrice = $product->BSAListPrice;
    $BSASize = $product->BSASize;

    $option = "<strong>Product ID:</strong> $BSAProductID<br>" .
              "<strong>Product Code:</strong> $BSAProductCode<br>" .
              "<strong>Product Name:</strong> $BSAProductName<br>" .
              "<strong>Description:</strong> $BSADescription<br>" .
              "<strong>Category ID:</strong> $BSACategoryID<br>" .
              "<strong>Wholesale Price:</strong> $" . number_format($BSAWholesalePrice, 2) . "<br>" .
              "<strong>List Price:</strong> $" . number_format($BSAListPrice, 2) . "<br>" .
              "<strong>Size:</strong> $BSASize<br>";
              
    echo "$option<br>";
}
?>
