<?php
// Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu
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
    <script language="javascript" type="text/javascript">
        function getRealTime() {
            // retrieve the DOM objects to place the content
            var domcategories = document.getElementById("categorycount");
            var domitems = document.getElementById("productcount");
            var domlistpricetotal = document.getElementById("listpricetotal"); 
            var domwholesalepricetotal = document.getElementById("wholesalepricetotal"); 
            //send the GET request to retrieve the data
            var request = new XMLHttpRequest();
            request.open("GET", "realtime.php", true);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    //parse the XML document to get each data element
                    var xmldoc = request.responseXML;
                    var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
                    var categories = xmlcategories.childNodes[0].nodeValue;
                    var xmlproducts = xmldoc.getElementsByTagName("products")[0];
                    var products = xmlproducts.childNodes[0].nodeValue;
                    var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
                    var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
                    var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
                    var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
                    domcategories.innerHTML = categories;
                    domitems.innerHTML = products;
                    domlistpricetotal.innerHTML = listpricetotal;
                    domwholesalepricetotal.innerHTML = wholesalepricetotal;
                }
            };
            request.send();
        }
    </script>

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

            if (isset($_SESSION['login'])) {
            ?>
            <aside>
                <?php include("aside.inc.php"); ?>
                <script language="javascript" type="text/javascript" )>
                    getRealTime();
                    setInterval(getRealTime, 5000);
                </script>
            </aside>
            <?php 
            } 
            ?>
        </main>
    </section>
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>
</html>
