<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu

if (isset($_SESSION['login'])) {
   $BSAProductID = $_POST['BSAProductID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Product") {
      $product = Product::findProduct($BSAProductID);

      $product->BSAProductID = $_POST['BSAProductID'];
      $product->BSAProductCode = $_POST['BSAProductCode'];
      $product->BSAProductName = $_POST['BSAProductName'];
      $product->BSADescription = $_POST['BSADescription'];
      $product->BSACategoryID = $_POST['BSACategoryID'];
      $product->BSAWholesalePrice = $_POST['BSAWholesalePrice'];
      $product->BSAListPrice = $_POST['BSAListPrice'];
      $product->BSASize = $_POST['BSASize'];

      $result = $product->updateProduct();
      if ($result) {
         echo "<h2>Item $BSAProductID updated</h2>\n";
      } else {
         echo "<h2>Problem updating item $BSAProductID</h2>\n";
      }
   } else {
      echo "<h2>Update Canceled for item $BSAProductID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
