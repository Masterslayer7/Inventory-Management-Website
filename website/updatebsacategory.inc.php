<style>
    
   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$BoardCategoryID = $_POST['BoardCategoryID'];
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
$category = Category::findCategory($BoardCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $BoardCategoryID; ?></h2><br>
   <form name="category" action="index.php" method="post">
       <label for="BoardCategoryCode">Board Category Code:</label>
       <input type="text" name="BoardCategoryCode" id="BoardCategoryCode" value="<?php echo $category->BoardCategoryCode; ?>">
       <label for="BoardCategoryName">Board Category Name:</label>
       <input type="text" name="BoardCategoryName" id="BoardCategoryName" value="<?php echo $category->BoardCategoryName; ?>">
       <label for="BoardCategoryAisleNumber">Board Category Aisle Number:</label>
       <input type="text" name="BoardCategoryAisleNumber" id="BoardCategoryAisleNumber" value="<?php echo $category->BoardCategoryAisleNumber; ?>">
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="BoardCategoryID" value="<?php echo $BoardCategoryID; ?>">
       <input type="hidden" name="content" value="changebsacategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $BoardCategoryID; ?> not found</h2>
<?php
}
?>
<script language="javascript">
   document.category.categoryCode.focus();
   document.category.categoryCode.select();
</script>
