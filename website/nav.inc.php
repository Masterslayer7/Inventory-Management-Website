<!-- // Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu -->

<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['firstName']} {$_SESSION['lastName']}</h3></td>\n";
   ?>
       <tr>
           <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
            <a href="index.php"><strong>Home</strong></a>
        </td>
       </tr>
       <tr>
           <td><strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listbsacategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newbsacategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><strong>Products</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listbsaproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newbsaproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="BSAProductID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updatebsaproduct">
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="BoardCategoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displaybsacategory">
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
