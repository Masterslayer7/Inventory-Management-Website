<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
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
                    <td><input type="text" name="BSAProductCode" value="<?php echo $product->BSAProductCode; ?>" minlength="3" maxlength="10" required ></td>
                </tr>
                <tr>
                    <td>BSAProductName</td>
                    <td><input type="text" name="BSAProductName" value="<?php echo $product->BSAProductName; ?>" minlength="3" maxlength="100" required></td>
                </tr>
                <tr>
                    <td>BSADescription</td>
                    <td><input type="text" name="BSADescription" value="<?php echo $product->BSADescription; ?>" minlength="10" maxlength="255" required></td>
                </tr>
                <tr>
                    <td>BSACategoryID</td>
                    <td><input type="number" name="BSACategoryID" value="<?php echo $product->BSACategoryID; ?>" min="100" max="999" required></td>
                </tr>
                <tr>
                    <td>BSAWholesalePrice</td>
                    <td><input type="number" name="BSAWholesalePrice" value="<?php echo $product->BSAWholesalePrice; ?>" step="0.01" min="1" max="1000000" required></td>
                </tr>
                <tr>
                    <td>BSAListPrice</td>
                    <td><input type="number" name="BSAListPrice" value="<?php echo $product->BSAListPrice; ?>" step="0.01" min="1" max="1000000" required></td>
                </tr>
                <tr>
                    <td>BSASize</td>
                <td><input type="text" name="BSASize" value="<?php echo $product->BSASize; ?>" minlength="1" maxlength="10" required></td>
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
 