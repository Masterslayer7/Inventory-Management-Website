<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportsproduct.php");
$BSAProductID = $_GET['BSAProductID'];
$product = Product::findProduct($BSAProductID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>Item $BSAProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $BSAProductID</h2>\n";
?>
