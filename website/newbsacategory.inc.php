<!-- Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu -->
<h2>Enter New Board sports Category Information</h2>
<form name="newbsacategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>BoardCategoryID:</td>
           <td><input type="number" name="BoardCategoryID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>BoardCategoryCode:</td>
           <td><input type="text" name="BoardCategoryCode" size="20" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>BoardCategoryName:</td>
           <td><input type="text" name="BoardCategoryName" size="50" minlength="5" maxlength="100" required></td>
       </tr>
       <tr>
           <td>BoardCategoryAisleNumber:</td>
           <td><input type="number" name="BoardCategoryAisleNumber" size="2" min="1" max="999" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addbsacategory">
</form>
