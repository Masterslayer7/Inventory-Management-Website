<!-- // Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu -->
<h2>Enter New Board sports Product Information</h2>
<form name="newbsaproduct" action="index.php" method="post">
   <table cellpadding="1" border="0" style="max-width: 600px;">
       <tr>
           <td>BSAProductID:</td>
           <td><input type="number" name="BSAProductID" size="4" min="1000" max="9999" required></td>
       </tr>
       <tr>
           <td>BSAProductCode:</td>
           <td><input type="text" name="BSAProductCode" size="5" min="3" max="10" required></td>
       </tr>
       <tr>
           <td>BSAProductName:</td>
           <td><input type="text" name="BSAProductName" size="50" min="3" max="100" required></td>
       </tr>
       <tr>
           <td>BSADescription:</td>
           <td><input type="text" name="BSADescription" size="50" min="10" max="255" required></td>
       </tr>
       <tr>
           <td>BSACategoryID:</td>
           <td><input type="number" name="BSACategoryID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>BSAWholesalePrice:</td>
           <td><input type="text" name="BSAWholesalePrice" size="10" min="1" max="10" required></td>
       </tr>
       <tr>
           <td>BSAListPrice:</td>
           <td><input type="text" name="BSAListPrice" size="10" min="1" max="50" required></td>
       </tr>
       <tr>
           <td>BSASize:</td>
           <td><input type="text" name="BSASize" size="4" min="1" max="10" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addbsaproduct">
</form>
