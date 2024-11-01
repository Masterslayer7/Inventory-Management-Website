<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
// include("category.php");
if (isset($_SESSION['login'])) {
  $BoardCategoryID = $_POST['BoardCategoryID'];
  if ((trim($BoardCategoryID) == '') or (!is_numeric($BoardCategoryID))) {
    echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
  } else {
    $BoardCategoryCode = $_POST['BoardCategoryCode'];
    $BoardCategoryName = $_POST['BoardCategoryName'];
    $BoardCategoryAisleNumber = $_POST['BoardCategoryAisleNumber'];
    $category = new Category($BoardCategoryID, $BoardCategoryCode, $BoardCategoryName, $BoardCategoryAisleNumber, date("Y-m-d H:i:s"));
    $result = $category->saveCategory();
    if ($result) {
        echo "<h2>New Category #$BoardCategoryID successfully added</h2>\n";
        echo "<h2>$category</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that category</h2>\n";
    }
  }
} else {
  echo "<h2>Please log in first</h2>\n";
}
?>
