<?php
// Yug Patel, 11/1/2024, IT202-001,  Phase 3 Assignment: HTML Website Layout, yp325@njit.edu
session_start();
include("boardsportscategory.php");
include("boardsportsproduct.php");
?>
<!DOCTYPE html>
<html>
<head><title>Board Sports</title></head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="height: 425px;">
        <nav style="float: left; height: 100%;">
            <?php include("nav.inc.php"); ?>
        </nav>
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
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>
</html>
