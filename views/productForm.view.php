<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/style.css" rel="stylesheet" />
</head>

<body>

    <div class="w-full">
        <div class="container">
            <div class="flex flex-col items-center justify-center mt-12">
                <div class=" p-6">
                    <h1  class=" font-bold text-blue-600 text-4xl ">Φόρμα καταχώρησης πρoϊόντος</h1>

                </div>


                <form class=" mt-0  w-4/5 h-screen " action="processForm.php" method="POST">
                    <div class="flex-section flex flex-row justify-between ">

                        <!--first section-->
                        <div class=" w-full ">
                            <div class=" items-center   ml-2 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Όνομα:
                                </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productName" name="productName" value=""
                                    placeholder="πρόσθεσε όνονα προιόντος.." required>
                            </div>

                            <div class=" items-center  mt-2 ml-2 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productPrice">Τιμή:
                                </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productPrice" name="productPrice" value=""
                                    placeholder="πρόσθεσε τη τιμή του προιόντος..">
                            </div>

                            <div class=" items-center  mt-2 ml-2 flex flex-col">

                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productQuantity">Ποσότητα: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productQuantity" name="productQuantity" value=""
                                    placeholder="πρόσθεσε τη ποσότητα του προιόντος..">
                            </div>


                            <div class=" items-center  mt-2 ml-2 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productCategory">Κατηγορία: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productCategory" name="productCategory" value=""
                                    placeholder="πρόσθεσε τη κατηγορία του προιόντος..">
                            </div>
                        </div>

                        <!--second section-->
                        <div class="w-full -mr-24">
                            <div class=" items-center   ml-2 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productManufacturer">Κατασκευαστής: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productManufacturer" name="productManufacturer" value=""
                                    placeholder="πρόσθεσε τον κατασκευαστή του προιόντος..">
                            </div>

                            <div class=" items-center  mt-2 ml-4 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productBarcode">Barcode: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productBarcode" name="productBarcode" value=""
                                    placeholder="πρόσθεσε το barcode του προιόντος..">
                            </div>


                            <div class=" items-center  mt-2 ml-4 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productWeight">Βάρος:
                                </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productWeight" name="productWeight" value=""
                                    placeholder="πρόσθεσε το βάρος του προιόντος..">
                            </div>

                            <div class=" items-center  mt-2 ml-4 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productInStock">In
                                    stock: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productInStock" name="productInStock" value=""
                                    placeholder="πρόσθεσε το stock προιόντος..">
                            </div>

                            <div class=" items-center  mt-2 ml-4 flex flex-col">
                                <label class="w-2/3 text-left text-blue-500 font-bold text-lg"
                                    for="productAvailability">Διαθεσιμότητα: </label>
                                <input
                                    class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200"
                                    type="text" id="productAvailability" name="productAvailability" value=""
                                    placeholder="πρόσθεσε τη διαθεσιμότητα του προιόντος..">
                            </div>
                        </div>


                    </div>

                    <div class="text-center mt-1 mx-auto">
                        <input class=" bg-blue-400 text-white text-lg font-bold mb-12 mt-6 w-2/4 rounded-md p-2 cursor"
                            type="submit" value="Υποβολή" />
                        <input type="hidden" id="formSubmitted" name="formSubmitted" value="0">
                    </div>
                </form>


            </div>
        </div>
    </div>
</body>

</html>