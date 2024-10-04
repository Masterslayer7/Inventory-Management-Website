<?php
session_start();
// Yug Patel, 10/4/2024, IT202-001,  Phase 1 Assignment: Login and Logout, yp325@njit.edu
?>
<!DOCTYPE html>
<html>
<head><title>Board Sports</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>
