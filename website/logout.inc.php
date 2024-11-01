<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
if (isset($_SESSION['login'])) {
   session_unset();
}
header("Location: index.php");
?>
