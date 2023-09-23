# TODO
-------
1. Σκοπός του products.php είναι να εκτυπώνει ένα HTML table με όλα τα προϊόντα που βρίσκονται στο products.xml. 
Συμπλήρωσε τον κώδικα στις δύο συναρτήσεις της κλάσης ώστε να εκτυπώσεις το table.

2. Θα πρέπει να προσθέσουμε τη λειτουργικότητα καταχώρησης μίας νέας εγγραφής product στο xml. 
Για να γίνει αυτό, θα πρέπει να φτιάξουμε μία html form στην οποία ο χρήστης θα μπορεί να δίνει ως input τα στοιχεία ενός product.
Το product θα αποθηκεύεται στο xml. 
Υποχρεωτικό πεδίο για το product είναι το NAME.
Είμαστε ελεύθεροι να εμφανισουμε τη φόρμα είτε σε νέο php είτε στο products.php
Προτείνουμε η συνάρτηση που θα κάνει την νέα εγγραφή στο xml να μπει μέσα στην υπάρχουσα κλάση Products


# PRODUCT FIEDS
-------------

- NAME
- PRICE
-QUANTITY
-CATEGORY-
-MANUFACTURER
-BARCODE
-WEIGHT
-INSTOCK
-AVAILABILITY

# SCOPE
-------
Form Submission: User submits data about a product through a form using a POST request.

PHP Processing (processForm.php):

PHP script receives the POST data.
It creates an object or processes the data in some way.
It saves the data to an XML file (e.g., "products.xml").
Table Display (productList.php):

Another PHP script loads the data from "products.xml."
It generates an HTML table dynamically based on the XML data.
The table is displayed on the frontend.
Frontend Display: The HTML table is displayed on the frontend, showing the product data.

This workflow is a common approach for handling form submissions and displaying data in a web application. If you have specific code you'd like me to review or if you encounter any issues along the way, please provide the code, and I'll be happy to assist you further.

# DOCUMENTED ACTIONS
---------

- run a php server executing through command line: 
    - php -S localhost:8888

- at the views directory i create a product form 
- now i as i added the method of the request and the action 
- i need to handle the send request of the form with the input data.
- data are saved into xml file.
- in lib.php file i iterate through the product fields, through enabling a table