<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="w-full">
    <div class="container">
        <div class="flex flex-col items-center justify-center mt-12">
                <div>
                    <h1 class=" text-center font-bold text-blue-700 text-4xl mx-auto">Φόρμα καταχώρησης προιόντος</h1>
                </div>
            
                
                        <form class=" ml-6 mt-0 p-12 w-full h-screen" method = "POST">
                            <div class="flex flex-row justify-between p-12">



                            <!--first section-->
                                <div class="w-full mx-24">
                                        <div class=" items-center   ml-12 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Όνομα: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος.." required>
                                        </div>

                                        <div class=" items-center  mt-2 ml-12 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Τιμή: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>

                                        <div class=" items-center  mt-2 ml-12 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Ποσότητα: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>


                                        <div class=" items-center  mt-2 ml-12 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Κατηγορία: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>
                                </div>

                                <!--second section-->
                                <div class="w-full -mr-24">
                                        <div class=" items-center   ml-2 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Κατασκευαστής: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>

                                        <div class=" items-center  mt-2 ml-4 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Barcode: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>


                                        <div class=" items-center  mt-2 ml-4 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Βάρος: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>

                                        <div class=" items-center  mt-2 ml-4 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">In stock: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>

                                        <div class=" items-center  mt-2 ml-4 flex flex-col">
                                            <label class="w-2/3 text-left text-blue-500 font-bold text-lg" for="productName">Διαθεσιμότητα: </label>
                                            <input class="mt-4 text-gray-700 rounded-md w-2/3 p-4 hover:bg-gray-100 focus:bg-gray-200" type="text" id="productName" name="productName" value="" placeholder="πρόσθεσε όνονα προιόντος..">
                                        </div>
                                </div>


                    </div>
            
                                <div class="text-center mt-1 mx-auto">
                                    <input class=" bg-blue-400 text-white mb-12 mt-6 w-2/4 rounded-md p-2 cursor" type="submit" value="Υποβολή" />
                                </div>
                        </form>
                  
        </div>
</div>
</div>
</body>

</html>