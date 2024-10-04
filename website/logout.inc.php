<?php
// Yug Patel, 10/4/2024, IT202-001,  Phase 1 Assignment: Login and Logout, yp325@njit.edu
if (isset($_SESSION['login'])) {
   session_unset();
}
header("Location: index.php");
?>
