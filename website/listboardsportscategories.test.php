<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include("boardsportscategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $BoardCategoryID = $category->BoardCategoryID;
   $BoardCategoryCode = $category->BoardCategoryCode;
   $BoardCategoryName = $category->BoardCategoryName;
   $BoardCategoryAisleNumber = $category->BoardCategoryAisleNumber;
   $name =  "<strong>BoardCategoryID:</strong> $BoardCategoryID<br>" .
            "<strong>BoardCategoryCode:</strong> $BoardCategoryCode<br>" .
            "<strong>BoardCategoryName:</strong> $BoardCategoryName<br>";
   echo "$name<br>";
}
?>
