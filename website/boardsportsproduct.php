<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
require_once('database.php');
class Product
{
    public $BSAProductID;
    public $BSAProductCode;
    public $BSAProductName;
    public $BSADescription;
    public $BSACategoryID;
    public $BSAWholesalePrice;
    public $BSAListPrice;
    public $BSASize;
    public $DateCreated;
    function __construct(
            $BSAProductID,
            $BSAProductCode,
            $BSAProductName,
            $BSADescription,
            $BSACategoryID,
            $BSAWholesalePrice,
            $BSAListPrice,
            $BSASize,
            $DateCreated
        ) {
        $this->BSAProductID = $BSAProductID;
        $this->BSAProductCode = $BSAProductCode;
        $this->BSAProductName = $BSAProductName;
        $this->BSADescription = $BSADescription;
        $this->BSACategoryID = $BSACategoryID;
        $this->BSAWholesalePrice = $BSAWholesalePrice;
        $this->BSAListPrice = $BSAListPrice;
        $this->BSASize = $BSASize;
        $this->DateCreated = $DateCreated;
    }
    function __toString()
    {
        $output = "<h2>Product ID: $this->BSAProductID</h2>" .
        "<h2>Product Code: $this->BSAProductCode</h2>" .
        "<h2>Product Name: $this->BSAProductName</h2>" .
        "<h2>Description: $this->BSADescription</h2>" .
        "<h2>Category ID: $this->BSACategoryID</h2>" .
        "<h2>Wholesale Price: $this->BSAWholesalePrice</h2>" .
        "<h2>List Price: $this->BSAListPrice</h2>" .
        "<h2>Size: $this->BSASize</h2>" .
        "<h2>Date Created: $this->DateCreated</h2>";
    }
    function saveProduct()
    {
        $db = getDB();
        $query = "INSERT INTO BSAProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isssidds",
            $this->BSAProductID,
            $this->BSAProductCode,
            $this->BSAProductName,
            $this->BSADescription,
            $this->BSACategoryID,
            $this->BSAWholesalePrice,
            $this->BSAListPrice,
            $this->BSASize
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
   }
   static function getProducts()
   {
       $db = getDB();
       $query = "SELECT * FROM BSAProducts";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $products = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new Product(
                    $row['BSAProductID'],
                    $row['BSAProductCode'],
                    $row['BSAProductName'],
                    $row['BSADescription'],
                    $row['BSACategoryID'],
                    $row['BSAWholesalePrice'],
                    $row['BSAListPrice'],
                    $row['BSASize'],
                    $row['DateCreated']
                );
                array_push($products, $product);
           }
           $db->close();
           return $products;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findProduct($BSAProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM BSAProducts WHERE BSAProductID = $BSAProductID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
            $product = new Product(
                $row['BSAProductID'],
                $row['BSAProductCode'],
                $row['BSAProductName'],
                $row['BSADescription'],
                $row['BSACategoryID'],
                $row['BSAWholesalePrice'],
                $row['BSAListPrice'],
                $row['BSASize'],
                $row['DateCreated']
            );
           $db->close();
           return $product;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateProduct()
   {
        $db = getDB();
        $query = "UPDATE BSAProducts SET BSAProductID= ?, " .
            "BSAProductCode= ?, BSAProductName= ?, BSADescription= ?, BSACategoryID= ?, BSAWholesalePrice= ?, " . 
            "BSAListPrice= ?, BSASize= ? WHERE BSAProductID = $this->BSAProductID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isssidds",
            $this->BSAProductID,
            $this->BSAProductCode,
            $this->BSAProductName,
            $this->BSADescription,
            $this->BSACategoryID,
            $this->BSAWholesalePrice,
            $this->BSAListPrice,
            $this->BSASize
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
   }
   function removeProduct()
   {
       $db = getDB();
       $query = "DELETE FROM BSAProducts WHERE BSAProductID = $this->BSAProductID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
    static function getTotalProducts()
    {
        $db = getDB();
        $query = "SELECT count(BSAProductID) FROM BSAProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }
    static function getTotalListPrice()
    {
        $db = getDB();
        $query = "SELECT sum(BSAListPrice) FROM BSAProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    } 
    static function getTotalWholesalePrice()
    {
        $db = getDB();
        $query = "SELECT sum(BSAWholesalePrice) FROM BSAProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    } 
}
?>
