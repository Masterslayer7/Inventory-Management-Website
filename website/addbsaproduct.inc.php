<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
// include('boardsportsproduct.php');
if (isset($_SESSION['login'])) {
    $BSAProductID = $_POST['BSAProductID'];
    if ((trim($BSAProductID) == '') or (!is_numeric($BSAProductID))) {
    echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
    } else {
        $BSAProductCode = $_POST['BSAProductCode'];
        $BSAProductName = $_POST['BSAProductName'];
        $BSADescription = $_POST['BSADescription'];
        $BSACategoryID = $_POST['BSACategoryID'];
        $BSAWholesalePrice = $_POST['BSAWholesalePrice'];
        $BSAListPrice = $_POST['BSAListPrice'];
        $BSASize = $_POST['BSASize'];
        
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
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
