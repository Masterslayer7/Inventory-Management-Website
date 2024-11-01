<!-- // Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu -->
<h2>Enter New Board sports Category Information</h2>
<form name="newbsacategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>BoardCategoryID:</td>
           <td><input type="text" name="BoardCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>BoardCategoryCode:</td>
           <td><input type="text" name="BoardCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td>BoardCategoryName:</td>
           <td><input type="text" name="BoardCategoryName" size="50"></td>
       </tr>
       <tr>
           <td>BoardCategoryAisleNumber:</td>
           <td><input type="text" name="BoardCategoryAisleNumber" size="2"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addbsacategory">
</form>
