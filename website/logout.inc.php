<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
if (isset($_SESSION['login'])) {
   session_unset();
}
if (headers_sent()) {
   echo "Click <a href=\"index.php?content=logout\"><strong>here</strong></a> to logout.";
} else {
   header("Location: index.php");
}
?>
