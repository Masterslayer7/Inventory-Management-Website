<script language="javascript">
    // Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
   function listbox_dblclick() {
       document.products.updateitem.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this Product?");
       }
       if (userConfirmed) {
           if (target == 1) products.action = "index.php?content=removebsaproduct";
           if (target == 2) products.action = "index.php?content=updatebsaproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Product</h2>
<form name="products" method="post">
   <select ondblclick="listbox_dblclick()" name="BSAProductID" size="20">
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
   <br>
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Item">
</form>
