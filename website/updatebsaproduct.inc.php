<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
if (!isset($_POST['BSAProductID']) or (!is_numeric($_POST['BSAProductID']))) {
?>
   <h2>You did not select a valid BSAProductID value</h2>
   <a href="index.php?content=listbsaproducts">List Products</a>
   <?php
} else {
   $BSAProductID = $_POST['BSAProductID'];
   $product = Product::findProduct($BSAProductID);
   if ($product) {
   ?>
       <h2>Update product <?php echo $product->BSAProductID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
                <tr>
                    <td>BSAProductID</td>
                    <td><?php echo $product->BSAProductID; ?></td>
                </tr>
                <tr>
                    <td>BSAProductCode</td>
                    <td><input type="text" name="BSAProductCode" value="<?php echo $product->BSAProductCode; ?>"></td>
                </tr>
                <tr>
                    <td>BSAProductName</td>
                    <td><input type="text" name="BSAProductName" value="<?php echo $product->BSAProductName; ?>"></td>
                </tr>
                <tr>
                    <td>BSADescription</td>
                    <td><input type="text" name="BSADescription" value="<?php echo $product->BSADescription; ?>"></td>
                </tr>
                <tr>
                    <td>BSACategoryID</td>
                    <td><input type="text" name="BSACategoryID" value="<?php echo $product->BSACategoryID; ?>"></td>
                </tr>
                <tr>
                    <td>BSAWholesalePrice</td>
                    <td><input type="text" name="BSAWholesalePrice" value="<?php echo $product->BSAWholesalePrice; ?>"></td>
                </tr>
                <tr>
                    <td>BSAListPrice</td>
                    <td><input type="text" name="BSAListPrice" value="<?php echo $product->BSAListPrice; ?>"></td>
                </tr>
                <tr>
                    <td>BSASize</td>
                <td><input type="text" name="BSASize" value="<?php echo $product->BSASize; ?>"></td>
                </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="BSAProductID" value="<?php echo $BSAProductID; ?>">
           <input type="hidden" name="content" value="changebsaproduct">
       </form>
   <?php
   } else {
    ?>
        <h2>Sorry, product <?php echo $BSAProductID; ?> not found</h2>
        <a href="index.php?content=listbsaproducts">List Products</a>
 <?php
    }
 }
 ?>
 