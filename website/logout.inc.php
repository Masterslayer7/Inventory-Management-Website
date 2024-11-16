<?php
// Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
if (isset($_SESSION['login'])) {
   session_unset();
}
header("Location: index.php");
?>
