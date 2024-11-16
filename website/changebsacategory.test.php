<?php
// Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
include("boardsportscategory.php");
$BoardCategoryID = $_GET['BoardCategoryID'];
$category = Category::findCategory($BoardCategoryID);
$category->BoardCategoryID = $_GET['BoardCategoryID'];
$category->BoardCategoryCode = $_GET['BoardCategoryCode'];
$category->BoardCategoryName = $_GET['BoardCategoryName'];
$category->BoardCategoryAisleNumber = $_GET['BoardCategoryAisleNumber'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $BoardCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $BoardCategoryID</h2>\n";
}
?>
