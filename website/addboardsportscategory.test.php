<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportscategory.php");
$BoardCategoryID = $_GET['BoardCategoryID'];
if ((trim($BoardCategoryID) == '') or (!is_numeric($BoardCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $BoardCategoryCode = $_GET['BoardCategoryCode'];
  $BoardCategoryName = $_GET['BoardCategoryName'];
  $BoardCategoryAisleNumber = $_GET['BoardCategoryAisleNumber'];
  $category = new Category($BoardCategoryID, $BoardCategoryCode, $BoardCategoryName, $BoardCategoryAisleNumber, date("Y-m-d H:i:s"));
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$BoardCategoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
