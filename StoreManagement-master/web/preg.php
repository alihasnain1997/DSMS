<?php
include 'nave.php';
?>
<link rel="stylesheet" type="text/css" href="../css/Login.css"/>
<div class="login-page">
    <div class="form">
        <table class="login-form">
            <tr>
                <h1><b style="color: #f1f1f1">Add Product</b></h1>
                <hr/>
                <input type="text" id="name" name="name" placeholder="Product Name"><br><br>
                <input type="number" id="price" name="price" placeholder="price"><br><br>
                <textarea rows="3" col="10" id="detail" name="detail" maxlength="150"
                          placeholder="Details"></textarea><br><br><br>
                <input type="file" name="image" id="image">Upload File
                <br>
                <img src="" id="img" style="width:50px; height:50px">
                <input type="button" value="Submit" onClick="PostProduct()">

            </tr>
            <tr>
                <button type="button" id="button">Load Product</button>
            </tr>
        </table>
    </div>
</div>
<div id="result"></div>
<table id="res" border=1>

</table>
</div>
<script src="../js/product.js"></script>
<script src="../js/jqueryimg.js"></script>

</div>
</div>
<br>


<br><br>

<?php
include 'footer.php';

?>
</body>
</html>

