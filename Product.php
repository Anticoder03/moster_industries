<?php
    include './assets/_Header.php';
    include './assets/_Nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body >
<div class="bg-gray-100 p-4 sm:p-8">
    
<h1 class="text-3xl font-bold text-center mb-6"><span class="uppercase text-orange-600 text-6xl font-bold">Product</span> <span class="font-thin text-6xl text-orange-600 uppercase">Gallery</span></h1>

<div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl relative">
        <!-- Close Button -->
        <button id="close-btn" class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-2xl font-bold">
            &times;
        </button>
        <div id="modal-content"></div>

        <!-- WhatsApp Button -->
        <div class="mt-4 text-center">
            <a id="whatsapp-btn" href="#" target="_blank"
                class="bg-green-500 text-white px-4 py-2 rounded-full flex items-center justify-center w-48 mx-auto hover:bg-green-600">
                <i class="fab fa-whatsapp text-2xl mr-2"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</div>

</div>
    <?php include './assets/_Footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
