<style>
    /* // Yug Patel, 12/6/2024, IT202-001,  Phase 5 Assignment: Javascript, yp325@njit.edu */
    aside {
        position: fixed;
        bottom: 1;
        right: 0;
        width: 20%;
        height: 100%;
        background-color: #82A3C9;
        border-left: 1px solid #82A3C9;
        padding: 20px;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
        z-index: 1000;
        border-radius: 15px;
    }
    aside h2, aside h3 {
        margin-bottom: 10px;
        font-family: Geneva, Tahoma, sans-serif;
        color: #003049;
    }
    aside hr {
      border: none;
      border-top: 1px solid #E2EAEF;
      margin: 5px 0;
   }
</style>
<h2>Real-time Inventory Info</h2>
<hr>
<br>
<h3>Category Count: </h3><span id="categorycount"></span>
<br><br>
<h3>Product Count: </h3><span id="productcount"></span>
<br><br>
<h3>List Price Total: </h3><span id="listpricetotal"></span>
<br><br>
<h3>Wholesale Price Total: </h3><span id="wholesalepricetotal"></span>