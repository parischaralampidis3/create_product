<?php
class Products
{
    
    /**
     * This property seems to be  intended to store the path to your XML file
     */
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
        $xmldata = simplexml_load_file($this->xml_file_path) or die("Failed to load");  
        //var_dump($xmldata);

        $xml_data = $xmldata->children();

      
        foreach ($xml_data->PRODUCTS->PRODUCT as $key => $prod) {
            
            $this->print_html_of_one_product_line($prod);

            
        
        }
        
    }

    /**
     * This function prints an HTML tr for a given product
     * @param mixed $prod It is the product object as retrieved from the xml file
     * @return void 
     */
    private function print_html_of_one_product_line($prod){
        //TODO 2: Θα πρέπει να συμπληρώσουμε τη συνάρτηση ώστε να κάνει print τα tr με τα στοιχεία του ενός προϊόντος

   
        $xmlProducts = simplexml_load_file("products.xml");
        if($xmlProducts === false){
            die("Failed to load products XML file");
        }

        if($xmlProducts ->PRODUCTS && $xmlProducts -> PRODUCTS -> PRODUCT ){
            
            echo "<table border='1'>";
            echo  "<tr>
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
                    
            

            foreach($xmlProducts->PRODUCTS->PRODUCT as $product){
                echo "<tr>";
                echo "<td>" . $product -> NAME . "</td>";
                echo "<td>" . $product -> PRICE . "</td>";
                echo "<td>" . $product -> QUANTITY . "</td>";
                echo "<td>" . $product -> CATEGORY . "</td>";
                echo "<td>" . $product -> MANUFACTURER . "</td>";
                echo "<td>" . $product -> BARCODE . "</td>";
                echo "<td>" . $product -> WEIGHT . "</td>";
                echo "<td>" . $product -> INSTOCK . "</td>";
                echo "<td>" . $product -> AVAILABILITY . "</td>"; 
                echo "</tr>" ;
            }
            echo "</table>";
        }
        else{
            echo "No product available.";
        }
        
    }

}
