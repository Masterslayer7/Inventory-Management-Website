<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
    ob_start();
    include("boardsportscategory.php");
    include("boardsportsproduct.php");
    $totalCategories = Category::getTotalCategories();
    $totalProducts = Product::getTotalProducts();
    $listpricetotal = Product::getTotalListPrice();
    $wholesalepricetotal = Product::getTotalWholesalePrice();
    $doc = new DOMDocument("1.0");
    $inventory = $doc->createElement("Inventory");
    $inventory = $doc->appendChild($inventory);
    $categories = $doc->createElement("categories", $totalCategories);
    $categories = $inventory->appendChild($categories);
    $Products = $doc->createElement("products", $totalProducts);
    $Products = $inventory->appendChild($Products);
    $listprice = $doc->createElement("listpricetotal", $listpricetotal);
    $listprice = $inventory->appendChild($listprice);
    $wholesaleprice = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
    $wholesaleprice = $inventory->appendChild($wholesaleprice);
    $output = $doc->saveXML();
    header("Content-type: application/xml");
    ob_end_clean();
    echo $output;
?>
