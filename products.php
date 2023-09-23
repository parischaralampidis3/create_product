<!DOCTYPE html>
<html>
<body>

<h1 style="font-size:30px;font-weight:bold;">List of products</h1>

<?php
    require_once("./lib.php");
    $productsList = new Products("./products.xml");
    $productsList->print_html_table_with_all_products();

   
?>

</body>
</html>