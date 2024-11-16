<?php
// Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
// include('boardsportsproduct.php');
if (isset($_SESSION['login'])) {
    $BSAProductID = filter_input(INPUT_POST, 'BSAProductID', FILTER_VALIDATE_INT);
    if ((trim($BSAProductID) == '') or (!is_int($BSAProductID))) {
        echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
    } else {
        $BSAProductCode = htmlspecialchars($_POST['BSAProductCode']);
        $BSAProductName = htmlspecialchars($_POST['BSAProductName']);
        $BSADescription = htmlspecialchars($_POST['BSADescription']);
        $BSACategoryID = htmlspecialchars($_POST['BSACategoryID']);
        $BSAWholesalePrice = htmlspecialchars($_POST['BSAWholesalePrice']);
        $BSAListPrice = htmlspecialchars($_POST['BSAListPrice']);
        $BSASize = htmlspecialchars($_POST['BSASize']);

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
