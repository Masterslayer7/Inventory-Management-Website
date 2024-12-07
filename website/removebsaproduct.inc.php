<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
// include("boardsportsproduct.php");
if (isset($_SESSION['login'])) {
   $BSAProductID = $_POST['BSAProductID'];
   $product = Product::findProduct($BSAProductID);
   $result = $product->removeProduct();
   if ($result)
      echo "<h2>Item $BSAProductID removed</h2>\n";
   else
      echo "<h2>Sorry, problem removing item $BSAProductID</h2>\n";
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
