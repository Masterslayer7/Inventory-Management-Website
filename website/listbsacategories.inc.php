<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="BoardCategoryID" size="20">
      <?php
      // Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
      // include("boardsportscategory.php");
      $categories = Category::getCategories();
      foreach($categories as $category) {
         $BoardCategoryID = $category->BoardCategoryID;
         $BoardCategoryCode = $category->BoardCategoryCode;
         $BoardCategoryName = $category->BoardCategoryName;
         $BoardCategoryAisleNumber = $category->BoardCategoryAisleNumber;
         $name = "ID: $BoardCategoryID - Code: $BoardCategoryCode - Name: $BoardCategoryName - Aisle: $BoardCategoryAisleNumber";
         echo "<option value=\"$BoardCategoryID\">$name</option>\n";
      }
      ?>
   </select>
</form>
