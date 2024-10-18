<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
include('boardsportsproduct.php');
$BSAProductID = $_GET['BSAProductID'];
if ((trim($BSAProductID) == '') or (!is_numeric($BSAProductID))) {
   echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else {
    $BSAProductCode = $_GET['BSAProductCode'];
    $BSAProductName = $_GET['BSAProductName'];
    $BSADescription = $_GET['BSADescription'];
    $BSACategoryID = $_GET['BSACategoryID'];
    $BSAWholesalePrice = $_GET['BSAWholesalePrice'];
    $BSAListPrice = $_GET['BSAListPrice'];
    $BSASize = $_GET['BSASize'];
    
    $product = new Product(
        $BSAProductID,
        $BSAProductCode,
        $BSAProductName,
        $BSADescription,
        $BSACategoryID,
        $BSAWholesalePrice,
        $BSAListPrice,
        $BSASize,
        date("Y-m-d H:i:s")
    );
   $result = $product->saveProduct();
   if ($result)
       echo "<h2>New Item #$BSAProductID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that item</h2>\n";
}
?>
