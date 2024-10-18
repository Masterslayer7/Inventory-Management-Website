<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportsproduct.php");
$BSAProductID = $_GET['BSAProductID'];
$product = Product::findProduct($BSAProductID);

$product->BSAProductID = $_GET['BSAProductID'];
$product->BSAProductCode = $_GET['BSAProductCode'];
$product->BSAProductName = $_GET['BSAProductName'];
$product->BSADescription = $_GET['BSADescription'];
$product->BSACategoryID = $_GET['BSACategoryID'];
$product->BSAWholesalePrice = $_GET['BSAWholesalePrice'];
$product->BSAListPrice = $_GET['BSAListPrice'];
$product->BSASize = $_GET['BSASize'];

$result = $product->updateProduct();
if ($result) {
   echo "<h2>Item $BSAProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $BSAProductID</h2>\n";
}
?>
