<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
// error_log("\$_GET " . print_r($_GET, true));
// include("boardsportscategory.php");
if (isset($_SESSION['login'])) {
   $BoardCategoryID = $_POST['BoardCategoryID'];
   $category = Category::findCategory($BoardCategoryID);
   $result = $category->removeCategory();
   if ($result)
      echo "<h2>Category $BoardCategoryID removed</h2>\n";
   else
      echo "<h2>Sorry, problem removing category $BoardCategoryID</h2>\n";
}
else {
   echo "<H2>Please login first</h2>\n";
}
?>
