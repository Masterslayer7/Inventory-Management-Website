<?php
// Yug Patel, 11/15/2024, IT202-001,  Phase 4 Assignment: Input filtering and CSS Styling, yp325@njit.edu
session_start();
include("boardsportscategory.php");
include("boardsportsproduct.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Board Sports</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png?v=2">
</head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="height: 590px;">
            <?php
            // Include the nav only if content is NOT 'main'
            if (isset($_SESSION['login'])) {
            ?>
            <nav style="float: left; height: 100%;">
                <?php include("nav.inc.php"); ?>
            </nav>
            <?php
            }
            ?>
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
