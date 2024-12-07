<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
// include("boardsportscategory.php");
if (isset($_SESSION['login'])) {
   $BoardCategoryID = $_POST['BoardCategoryID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Category") {
      $category = Category::findCategory($BoardCategoryID);
      $category->BoardCategoryID = $_POST['BoardCategoryID'];
      $category->BoardCategoryCode = $_POST['BoardCategoryCode'];
      $category->BoardCategoryName = $_POST['BoardCategoryName'];
      $category->BoardCategoryAisleNumber = $_POST['BoardCategoryAisleNumber'];
      $result = $category->updateCategory();
      if ($result) {
         echo "<h2>Category $BoardCategoryID updated</h2>\n";
      } else {
         echo "<h2>Problem updating category $BoardCategoryID</h2>\n";
      }
   } else {
      echo "<h2>Update Canceled for category $BoardCategoryID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
