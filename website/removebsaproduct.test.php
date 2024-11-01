<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
include("boardsportsproduct.php");
$BSAProductID = $_GET['BSAProductID'];
$product = Product::findProduct($BSAProductID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>Item $BSAProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $BSAProductID</h2>\n";
?>
