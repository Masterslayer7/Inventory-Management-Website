<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
require_once('database.php');
class Category
{
   public $BoardCategoryID;
   public $BoardCategoryCode;
   public $BoardCategoryName;
   public $BoardCategoryAisleNumber;
   public $DateCreated;
   
   function __construct($BoardCategoryID, $BoardCategoryCode, $BoardCategoryName, $BoardCategoryAisleNumber, $DateCreated)
   {
       $this->BoardCategoryID = $BoardCategoryID;
       $this->BoardCategoryCode = $BoardCategoryCode;
       $this->BoardCategoryName = $BoardCategoryName;
       $this->BoardCategoryAisleNumber = $BoardCategoryAisleNumber;
       $this->DateCreated = $DateCreated;

   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->BoardCategoryID</h2>\n" .
           "<h2>$this->BoardCategoryCode, $this->BoardCategoryName</h2>\n".
           "<h2>$this->BoardCategoryAisleNumber, $this->DateCreated</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO BoardSportsCategories VALUES (?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->BoardCategoryID,
           $this->BoardCategoryCode,
           $this->BoardCategoryName,
           $this->BoardCategoryAisleNumber,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM BoardSportsCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                    $row['BoardCategoryID'],
                    $row['BoardCategoryCode'],
                    $row['BoardCategoryName'],
                    $row['BoardCategoryAisleNumber'],
                    $row['DateCreated']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($BoardCategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM BoardSportsCategories WHERE BoardCategoryID = $BoardCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['BoardCategoryID'],
               $row['BoardCategoryCode'],
               $row['BoardCategoryName'],
               $row['BoardCategoryAisleNumber'],
               $row['DateCreated']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE BoardSportsCategories SET BoardCategoryID = ?, BoardCategoryCode = ?, " .
           "BoardCategoryName = ?,  BoardCategoryAisleNumber = ? " .
           "WHERE BoardCategoryID = $this->BoardCategoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->BoardCategoryID,
           $this->BoardCategoryCode,
           $this->BoardCategoryName,
           $this->BoardCategoryAisleNumber,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM BoardSportsCategories WHERE BoardCategoryID = $this->BoardCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
   static function getTotalCategories()
    {
        $db = getDB();
        $query = "SELECT count(BoardCategoryID) FROM BoardSportsCategories";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }


}
