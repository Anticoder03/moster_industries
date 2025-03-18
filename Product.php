<?php
include './assets/_Header.php';
include './assets/_Nav.php';

// Product data
$products = [
    [
        "id" => 1,
        "name" => "Ceramic Coated Pay Off Pulley",
        "price" => "₹3,200 / Piece",
        "minOrder" => "6 Piece",
        "image" => "./img/prod1-1.jpg",
        "details" => [
            "Product Type" => "Ceramic Coated Pulley",
            "Grooves" => "Single Groove",
            "Usage" => "Pay Off",
            "Capacity" => "One Year Warranty",
            "Origin" => "Made in India",
            "Description" => "Used in bunching machines in cable industries.",
            "Delivery Time" => "7 days"
        ]
    ],
    [
        "id" => 2,
        "name" => "100mm Black Ceramic Pulleys",
        "price" => "₹22,000 / Unit",
        "image" => "./img/prod2-1.jpg",
        "details" => [
            "Usage" => "Cable Industries",
            "Number of Grooves" => "Single Groove",
            "Product Type" => "Copper Wire Guide Pulley",
            "Diameter" => "50mm",
            "Capacity" => "One Year Warranty",
            "Material" => "Ceramic Coated",
            "Description" => "This is a guide pulley for cable industries.",
            "Origin" => "Made in India",
            "Delivery Time" => "3-4 days"
        ]
    ],
    [
        "id" => 3,
        "name" => "Capston Pulley With Ceramic Coated",
        "price" => "₹2,500 / Piece",
        "minOrder" => "1 Piece",
        "image" => "./img/prod3-1.jpg",
        "details" => [
            "Product Type" => "Capstone Pulley",
            "Usage/Application" => "Cable Industries",
            "Number Of Grooves" => "Single Groove",
            "Country of Origin" => "Made in India",
            "Description" => "This part is used for Capston Machine in Cable Industries.",
            "Delivery Time" => "3-4 days"
        ]
    ],
    [
        "id" => 4,
        "name" => "Nickel Coated Contact Tube (Nickel Hub)",
        "price" => "₹10,000 / Piece",
        "image" => "./img/nickel.jpg",
        "details" => [
            "Size" => "200X195 mm",
            "Standards" => "Moster Metal",
            "Product Type" => "Nickel Coated",
            "Nominal Bore" => "180",
            "Usages" => "Cable Industries",
            "Shape" => "Sleeve",
            "Coated" => "Nickel Coated",
            "Description" => "Contact Tube used in Wire Drawing Machine for Cable Industries."
        ]
    ],
    [
        "id" => 5,
        "name" => "Ceramic Coated Step Cone",
        "price" => "₹12,000 / Piece",
        "image" => "./img/ceramic.jpg",
        "details" => [
            "Usage/Application" => "Wire Drawing",
            "Material" => "Aluminium",
            "Color" => "Black",
            "Coated" => "Ceramic Coated",
            "Shape" => "Cone",
            "Description" => "This Step Cone is Ceramic Coated and used in Wire Drawing Machine for Cable Industries."
        ]
    ],
    [
        "id" => 6,
        "name" => "Ceramic Coating Aluminium Pulleys",
        "price" => "₹1,500 / Piece",
        "minOrder" => "10 Piece",
        "image" => "./img/prod6-1.jpg",
        "details" => [
            "Size/Diameter" => "300 mm",
            "Capacity" => "Ceramic Coated",
            "Number Of Grooves" => "Single",
            "Country of Origin" => "Made in India",
            "Production Capacity" => "On Order",
            "Delivery Time" => "7 Days",
            "Description" => "Ceramic Coating Aluminium Pulleys."
        ]
    ],
    [
        "id" => 7,
        "name" => "Counter Meter Pulley with Ceramic Coating",
        "price" => "₹4,200 / Piece",
        "minOrder" => "1 Piece",
        "image" => "./img/prod7-1.jpg",
        "details" => [
            "Material" => "Aluminum",
            "Product Type" => "Ceramic Coated Pulley",
            "Usage/Application" => "Plane",
            "Brand" => "Moster Metal",
            "Country of Origin" => "Made in India",
            "Delivery Time" => "4 days",
            "Description" => "Counter Meter Pulley is used for Cable measuring in Cable Industries."
        ]
    ],
    [
        "id" => 8,
        "name" => "Ceramic Coated Aluminium Pulley",
        "price" => "₹12,000 / Piece",
        "image" => "./img/ceramic-coated-steel-pulley.jpg",
        "details" => [
            "Capacity" => "Warranty One Year",
            "Usage/Application" => "Cable Industries",
            "Coated" => "Ceramic Coated",
            "Color" => "Black",
            "Item Material" => "Steel",
            "Country of Origin" => "Made in India",
            "Description" => "This Pulley is used in Pay Off Machine in Cable Industries."
        ]
    ],
    [
        "id" => 9,
        "name" => "Aluminum Buncher Pulley",
        "price" => "₹650 / Piece",
        "minOrder" => "1 Piece",
        "image" => "./img/alum-buncher.jpg",
        "details" => [
            "Material" => "Aluminum",
            "Product Type" => "Ceramic Coated Pulley",
            "Number Of Grooves" => "Single Groove",
            "Brand" => "Moster Metal",
            "Country of Origin" => "Made in India",
            "Delivery Time" => "7 Days",
            "Description" => "Moster Metal Coating Industries manufactures a wide range of Aluminum Gear, Steel Pulleys, Grinder Blades, Ceramic Pulleys, Single Groove Pulley, and Groove Pulley."
        ]
        ],
        [
            "id" => 10,
            "name" => "Flyer Pulley Ceramic Coated",
            "price" => "₹7,800 / Piece",
            "minOrder" => "1 Piece",
            "image" => "./img/prod10.jpg",
            "details" => [
                "Material" => "Aluminum",
                "Product Type" => "Ceramic Coated",
                "Number Of Grooves" => "Single Groove",
                "Brand" => "Moster Metal",
                "Country of Origin" => "Made in India",
                "Description" => "This part is used in RBD Machine in Cable Industries.",
                "Delivery Time" => "7 Days"
            ]
        ],
        [
            "id" => 11,
            "name" => "Ceramic Coated Pulley",
            "price" => "₹2,500 / Piece",
            "minOrder" => "50 Piece",
            "image" => "./img/prod11.jpg",
            "details" => [
                "Material" => "Steel",
                "Standard Lift" => "With Bracket",
                "Number Of Grooves" => "Single Groove",
                "Coated" => "Ceramic Coated",
                "Description" => "This Pulley is used in Cable Industries.",
                "Delivery Time" => "7 Days"
            ]
        ],
        [
            "id" => 12,
            "name" => "Ceramic Coated Multi Groove Pulley",
            "price" => "₹8,000 / Piece",
            "image" => "./img/prod12.jpg",
            "details" => [
                "Material" => "Aluminum",
                "Product Type" => "Plasma Coated Pulley",
                "Usage/Application" => "Cable Industries",
                "Number Of Grooves" => "Multi-Groove",
                "Capacity" => "Warranty One Year",
                "Country of Origin" => "Made in India",
                "Description" => "Multi Groove Pulley is used in Cable Industries."
            ]
        ],
        [
            "id" => 13,
            "name" => "Ceramic Coated Buncher Pulley",
            "price" => "₹1,250 / Piece",
            "minOrder" => "1 Piece",
            "image" => "./img/prod13.jpg",
            "details" => [
                "Material" => "Aluminum",
                "Product Type" => "Ceramic Coated Pulley",
                "Number Of Grooves" => "Single Groove",
                "Brand" => "Moster Metal",
                "Country of Origin" => "Made in India",
                "Description" => "Moster Metal Coating Industries manufactures a wide range of Aluminum Pulley, Steel Pulleys, Grinder Blades, Ceramic Coated Pulleys, Multi Groove Pulley, etc.",
                "Delivery Time" => "7 Days"
            ]
            ],
            [
                "id" => 14,
                "name" => "800mm Dia Capstone Pulley",
                "price" => "₹10,000 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod14.jpg",
                "details" => [
                    "Material" => "Steel",
                    "Product Type" => "Ceramic Coated Pulley",
                    "Usage/Application" => "For Wire Capston Machine",
                    "Capacity" => "One Year Warranty",
                    "Country of Origin" => "Made in India",
                    "Description" => "Ceramic coated 800mm diameter capstone pulley used in Cable Industries.",
                    "Delivery Time" => "7 Days"
                ]
            ],
            [
                "id" => 15,
                "name" => "Dancer Pulley With Ceramic Coating",
                "price" => "₹4,200 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod15.jpg",
                "details" => [
                    "Material" => "Aluminum",
                    "Product Type" => "Ceramic Coated Pulley",
                    "Number Of Grooves" => "Single Groove",
                    "Usage/Application" => "R B D Machine",
                    "Brand" => "Moster Metal",
                    "Capacity" => "Warranty One Year",
                    "Country of Origin" => "Made in India",
                    "Description" => "This pulley is used in RBD Machine for Cable Industries.",
                    "Delivery Time" => "7 Days"
                ]
            ],
            [
                "id" => 16,
                "name" => "Extrusion Crosshead",
                "price" => "₹40,000 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod16.jpg",
                "details" => [
                    "Production Capacity" => "250 kg/hr",
                    "Material" => "Mild Steel",
                    "Type" => "Profile Extruder",
                    "Operation Mode" => "Manual",
                    "Country of Origin" => "Made in India",
                    "Description" => "This crosshead is used in an Extruder Machine to PVC Coat Copper Wire for Cable Industries.",
                    "Delivery Time" => "7 Days"
                ]
            ],
            [
                "id" => 17,
                "name" => "Ceramic Coated Pulley",
                "price" => "₹3,600 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod17.jpg",
                "details" => [
                    "Material" => "Aluminum",
                    "Product Type" => "Ceramic Coated Pulley",
                    "Capacity" => "Max 2 kg",
                    "Number Of Grooves" => "Single Groove",
                    "Country of Origin" => "Made in India",
                    "Description" => "This pulley is used in 100MM Buncher Machine for Cable Industries.",
                    "Delivery Time" => "4 Days"
                ]
            ],
            [
                "id" => 18,
                "name" => "S J Standing Machine Head",
                "price" => "₹17,000 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod18.jpg",
                "details" => [
                    "Thickness" => "150 mm",
                    "Material Grade" => "E350",
                    "Service Location" => "Daman",
                    "Type of Machine" => "Combined Drawing Machine",
                    "Types Of Metal" => "En-353",
                    "Wire Diameter" => "Open Dia",
                    "Country of Origin" => "Made in India",
                    "Description" => "SJ Standing Head is used in SJ Standing Machine for Cable Industries.",
                    "Delivery Time" => "7 Days"
                ]
            ],
            [
                "id" => 19,
                "name" => "Ceramic Coated Multi Groove Roller",
                "price" => "₹4,500 / Piece",
                "minOrder" => "1 Piece",
                "image" => "./img/prod19.jpg",
                "details" => [
                    "Material of Roller" => "Aluminum",
                    "Roller Length" => "160",
                    "Roller Material" => "Aluminum",
                    "Product Type" => "Industrial Roller",
                    "Shape" => "Round",
                    "Roller Surface" => "Mirror Shining",
                    "Description" => "This roller is used in Multi Wire for Wire Manufacturing Units.",
                    "Delivery Time" => "7 Days"
                ]
            ],
            [
                "id" => 20,
                "name" => "Aluminum Ceramic Coated Step Cone",
                "price" => "₹15,000 / Piece",
                "minOrder" => "4 Piece",
                "image" => "./img/prod20.jpg",
                "details" => [
                    "Material" => "Aluminum",
                    "Product Type" => "Copper Drawing Machine",
                    "Number Of Grooves" => "Multi-Groove",
                    "Color" => "Black",
                    "Country of Origin" => "Made in India",
                    "Description" => "Moster Metal Coating Industries manufactures a wide range of Aluminum Gear, Steel Pulleys, Grinder Blades, Ceramic Pulleys, Single Groove Pulley, Groove Pulley, etc.",
                    "Delivery Time" => "7 Days"
                ]
            ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    
    <div class="bg-gray-100 p-6"> 
    <h1 class="text-3xl font-bold text-center mb-6">
        <span class="uppercase text-orange-600 text-6xl font-bold">Product</span> 
        <span class="font-thin text-6xl text-orange-600 uppercase">Gallery</span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($products as $product) { ?>
            <div class="bg-white shadow-lg rounded-lg p-4 cursor-pointer hover:shadow-2xl" 
                 onclick="openModal(<?php echo htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8'); ?>)">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-40 object-contain rounded-md">
                <h2 class="text-lg font-semibold mt-3"><?php echo $product['name']; ?></h2>
                <p class="text-gray-600"><?php echo $product['price']; ?></p>
            </div>
        <?php } ?>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center p-4">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl relative">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-2xl font-bold">&times;</button>
            <h2 id="modal-title" class="text-2xl font-semibold mb-4"></h2>
            
            <table class="w-full border-collapse border border-gray-300">
                <tbody id="modal-content"></tbody>
            </table>

            <!-- WhatsApp Button -->
            <div class="mt-4 text-center">
                <a id="whatsapp-btn" href="#" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded-full flex items-center justify-center w-48 mx-auto hover:bg-green-600">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
    </div>

    <script>
        function openModal(product) {
            document.getElementById('modal-title').innerText = product.name;

            let content = `
                <tr><td class="border px-4 py-2"><strong>Price</strong></td><td class="border px-4 py-2">${product.price}</td></tr>
                <tr><td class="border px-4 py-2"><strong>Min Order</strong></td><td class="border px-4 py-2">${product.minOrder || '1'}</td></tr>
            `;

            // Dynamically fetch all keys and values from the "details" array
            for (const [key, value] of Object.entries(product.details)) {
                content += `<tr><td class="border px-4 py-2"><strong>${key}</strong></td><td class="border px-4 py-2">${value}</td></tr>`;
            }

            document.getElementById('modal-content').innerHTML = content;
            document.getElementById('whatsapp-btn').href = `https://wa.me/9821294717?text=I'm%20interested%20in%20${encodeURIComponent(product.name)}`;
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');   
        }
    </script>

    <?php include './assets/_Footer.php'; ?>
</body>
</html>
