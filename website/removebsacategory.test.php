<?php
// Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
error_log("\$_GET " . print_r($_GET, true));
include("boardsportscategory.php");
$BoardCategoryID = $_GET['BoardCategoryID'];
$category = Category::findCategory($BoardCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $BoardCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $BoardCategoryID</h2>\n";
?>
