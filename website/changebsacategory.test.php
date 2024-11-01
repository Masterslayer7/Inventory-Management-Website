<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
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
