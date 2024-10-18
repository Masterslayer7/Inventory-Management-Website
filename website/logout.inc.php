<?php
// Yug Patel, 10/18/2024, IT202-001,  Phase 2 Assignment: CRUD Categories and Products, yp325@njit.edu
if (isset($_SESSION['login'])) {
   session_unset();
}
header("Location: index.php");
?>
