<!DOCTYPE html>
<html>
<body>
<?php require("views/partials/navigation.php");?>
<h1 style="font-size:30px;font-weight:bold;margin-bottom:20px;color:rgb(37 99 235);">Λίστα Προϊόντων</h1>

<?php
    require_once("./lib.php");
    $productsList = new Products("./products.xml");
    $productsList->print_html_table_with_all_products();

   
?>

<?php require("views/partials/footer.php");?>

</body>
</html>

