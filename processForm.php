<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
     $productQuantity = $_POST['productQuantity'];
    $productCategory = $_POST['productCategory'];
    $productManufacturer  = $_POST['productManufacturer'];
    $productBarcode = $_POST['productBarcode'];
    $productWeight = $_POST['productWeight'];
    $productInStock = $_POST['productInStock'];
    $productAvailability = $_POST['productAvailability'];

    //passing data into a new object as an associative array in order to provide more structure
    $new_product = [
    "name" => $productName,
    "price" => $productPrice,
    "quantity" => $productQuantity,
    "category" => $productCategory,
    "manufacturer" => $productManufacturer,
    "barcode" => $productBarcode,
    "weight" => $productWeight,
    "inStock"=>$productInStock,
    "availability" => $productAvailability
    ];
    //load xml products 
     $xml = simplexml_load_file("products.xml");
    if ($xml === false) {
        die("Failed to load or parse the XML file.");
    }

    $product_element = $xml -> addChild("PRODUCTS");

    $product_element = $product_element->addChild("PRODUCT");
    $product_element -> addChild("NAME", $new_product["name"]);
    $product_element -> addChild("PRICE", $new_product["price"]);
    $product_element -> addChild("QUANTITY",$new_product["quantity"]);
    $product_element -> addChild("CATEGORY",$new_product["category"]);
    $product_element -> addChild("MANUFACTURER",$new_product["manufacturer"]);
    $product_element -> addChild("BARCODE",$new_product["barcode"]);
    $product_element -> addChild("WEIGHT",$new_product["weight"]);
    $product_element -> addChild("INSTOCK",$new_product["inStock"]);
    $product_element -> addChild("AVAILABILITY",$new_product["availability"]);


    //save the updated product xml
    //The asXML method formats the parent object's data in XML version 1.0. 
  
    if ($xml->asXML("products.xml")) {
        echo "Product added successfully!";
    } else {
        echo "Failed to save the XML file.";
    }
}

?>