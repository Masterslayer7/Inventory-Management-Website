<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
if (!isset($_POST['BoardCategoryID']) or (!is_numeric($_POST['BoardCategoryID']))) {
?>
   <h2>You did not select a valid BoardCategoryID to view.</h2>
   <a href="index.php?content=listbsacategories">List Categories</a>
<?php
} else {
   $BoardCategoryID = $_POST['BoardCategoryID'];
   $category = Category::findCategory($BoardCategoryID);
   if ($category) {
       echo $category;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $BoardCategoryID not found</h2>\n";
   }
}
?>
