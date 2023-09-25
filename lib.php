

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <link href="styles/style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
class Products
{

    private $xml_file_path = '';

    public function __construct($xml_file_path = '')
    {
        $this->xml_file_path = $xml_file_path;
    }

    /**
     * This function prints an HTML table with all the products as read from the xml file
     * @return void 
     */
    public function print_html_table_with_all_products()
    {
        //TODO 1:Θα πρέπει να συμπληρώσουμε την συνάρτηση ώστε να κάνει print το HTML table με τα προϊόντα του xml

        /**
         * this function loads the xml file and creates an xml object 
        * if the load fails an error is produced 'Failed to load'
         */
        $xmldata = simplexml_load_file($this->xml_file_path) or die("Failed to load");

        $xml_data = $xmldata->children();


        if($xml_data->PRODUCTS && $xml_data->PRODUCTS->PRODUCT){

   //this block of code contains a table code that prints product headings 
            echo "<div class='responsiveTable'>";
            echo "<table   border='1'>";

            echo  "<tr class='tableStyle1'>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Manufacturer</th>
                        <th>Barcode</th>
                        <th>Weight</th>
                        <th>In Stock</th>
                        <th>Availability</th>
                    </tr>";

            foreach ($xml_data->PRODUCTS->PRODUCT as $product) {             
                        $this->print_html_of_one_product_line($product);
                    }

            echo "</table>";
            echo "</div>";
                
        }
    }

    /**
     * This function prints an HTML tr for a given product
     * @param mixed $prod It is the product object as retrieved from the xml file
     * @return void 
     */
    private function print_html_of_one_product_line($product){
        //TODO 2: Θα πρέπει να συμπληρώσουμε τη συνάρτηση ώστε να κάνει print τα tr με τα στοιχεία του ενός προϊόντος
        try{

                
            echo "<tr>";
                echo "<td>" . $product -> NAME . "</td>";
                echo "<td>" . $product -> PRICE . "€</td>";
                echo "<td>" . $product -> QUANTITY . "</td>";
                echo "<td>" . $product -> CATEGORY . "</td>";
                echo "<td>" . $product -> MANUFACTURER . "</td>";
                echo "<td>" . $product -> BARCODE . "</td>";
                echo "<td>" . $product -> WEIGHT . "</td>";
                echo "<td>" . $product -> INSTOCK . "</td>";
                echo "<td>" . $product -> AVAILABILITY . "</td>"; 
                echo "</tr>" ;
         
        }
        catch(Exception $e){
            echo 'No product available:' , $e -> getMessage();
        }
   
    }
}
