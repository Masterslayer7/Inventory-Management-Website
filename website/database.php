<?php
function getDB() {
    // Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'yp325';
   $username = 'yp325';
   $password = 'Njit123456&';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       return $db; //returns the db variable
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
}
// getDB(); Testing purposes only
?>
