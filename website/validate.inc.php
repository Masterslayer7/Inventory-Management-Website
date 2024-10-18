<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];

$query = "SELECT pronouns, firstName, lastName FROM boardSportsManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);

$stmt->bind_param("ss", $emailAddress, $password); // gives the query input
$stmt->execute(); // executes the query
$stmt->bind_result($pronouns, $firstName, $lastName); // gets the data query results
$fetched = $stmt->fetch();
$name = "$firstName $lastName";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to Inventory Helper</h2>\n";
   $_SESSION['login'] = true; 
   $_SESSION['emailAddress'] = $emailAddress; 
   $_SESSION['firstName'] = $firstName; 
   $_SESSION['lastName'] = $lastName; 
   $_SESSION['pronouns'] = $pronouns; 
   header("Location: index.php");
   exit;
} else {
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>