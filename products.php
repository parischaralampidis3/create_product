<!DOCTYPE html>
<html>
<body>
<?php require("views/partials/navigation.php");?>

      <div class=" p-6 mt-6 mb-6 mx-auto">
                    <h1  class=" heading font-bold text-blue-600 text-4xl ">Λίστα πρoϊόντων</h1>

                </div>

<?php
    require_once("./lib.php");
    $productsList = new Products("./products.xml");
    $productsList->print_html_table_with_all_products();

   
?>

<?php require("views/partials/footer.php");?>

</body>
</html>

