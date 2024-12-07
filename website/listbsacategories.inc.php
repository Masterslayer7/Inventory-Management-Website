
<script language="javascript">
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaybsacategory";
           if (target == 1) categories.action = "index.php?content=removebsacategory";
           if (target == 2) categories.action = "index.php?content=updatebsacategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="categories" method="post">
   <select ondblclick="listbox_dblclick()" name="BoardCategoryID" size="20">
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
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatecategory" value="Update Category">
</form>
