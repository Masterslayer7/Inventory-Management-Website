<!-- // Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu -->
<h2>Enter New Board sports Product Information</h2>
<form name="newbsaproduct" action="index.php" method="post">
   <table cellpadding="1" border="0" style="max-width: 600px;">
       <tr>
           <td>BSAProductID:</td>
           <td><input type="text" name="BSAProductID" size="4"></td>
       </tr>
       <tr>
           <td>BSAProductCode:</td>
           <td><input type="text" name="BSAProductCode" size="5"></td>
       </tr>
       <tr>
           <td>BSAProductName:</td>
           <td><input type="text" name="BSAProductName" size="50"></td>
       </tr>
       <tr>
           <td>BSADescription:</td>
           <td><input type="text" name="BSADescription" size="50"></td>
       </tr>
       <tr>
           <td>BSACategoryID:</td>
           <td><input type="text" name="BSACategoryID" size="4"></td>
       </tr>
       <tr>
           <td>BSAWholesalePrice:</td>
           <td><input type="text" name="BSAWholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>BSAListPrice:</td>
           <td><input type="text" name="BSAListPrice" size="10"></td>
       </tr>
       <tr>
           <td>BSASize:</td>
           <td><input type="text" name="BSASize" size="4"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addbsaproduct">
</form>
