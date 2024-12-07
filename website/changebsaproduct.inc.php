<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu

if (isset($_SESSION['login'])) {
   $BSAProductID = $_POST['BSAProductID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Product") {
      $product = Product::findProduct($BSAProductID);

      $product->BSAProductID = htmlspecialchars($_POST['BSAProductID']);
      $product->BSAProductCode = htmlspecialchars($_POST['BSAProductCode']);
      $product->BSAProductName = htmlspecialchars($_POST['BSAProductName']);
      $product->BSADescription = htmlspecialchars($_POST['BSADescription']);
      $product->BSACategoryID = htmlspecialchars($_POST['BSACategoryID']);
      $product->BSAWholesalePrice = htmlspecialchars($_POST['BSAWholesalePrice']);
      $product->BSAListPrice = htmlspecialchars($_POST['BSAListPrice']);
      $product->BSASize = htmlspecialchars($_POST['BSASize']);

      $result = $product->updateProduct();
      if ($result) {
         echo "<h2>product $BSAProductID updated</h2>\n";
      } else {
         echo "<h2>Problem updating product $BSAProductID</h2>\n";
      }
   } else {
      echo "<h2>Update Canceled for product $BSAProductID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
