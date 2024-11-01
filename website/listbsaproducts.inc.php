
<h2>Select Product</h2>
<form name="products" method="post">
   <select name="BSAProductID" size="20">
        <?php
        // Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
        // include("boardsportsproduct.php");
        $products = Product::getProducts();
        foreach ($products as $product) {
            $BSAProductID = $product->BSAProductID;
            $BSAProductCode = $product->BSAProductCode;
            $BSAProductName = $product->BSAProductName;
            $BSAListPrice = $product->BSAListPrice;

            $option = "ID: $BSAProductID - Code: $BSAProductCode - Name: $BSAProductName - Price: $BSAListPrice"; 
            echo "<option value=\"$BSAProductID\">$option</option>\n";
        }
        ?>
   </select>
</form>
