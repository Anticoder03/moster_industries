<?php
$cards = [
    1 => ["title" => "Plasma Coating Process", "image" => "home1.jpg", "description" => "Plasma coating is a thermal spray coating process used to enhance surface properties."],
    2 => ["title" => "Ceramic Coating", "image" => "home2.jpg", "description" => "Ceramic coatings provide high thermal resistance and durability in industrial applications."],
    3 => ["title" => "Thermal Spray Process", "image" => "home3.jpg", "description" => "Thermal spray coating is a process of depositing materials to enhance wear and corrosion resistance."],
    4 => ["title" => "Thermal Spray Process", "image" => "home4.jpg", "description" => "Advanced thermal spray processes are used to improve material properties for extreme conditions."],
];

$selectedCard = (int)$_GET['card'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Card View</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container { max-width: 900px; margin: auto; }
        .card { border-radius: 20px; overflow: hidden; }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="container">
        <?php if ($selectedCard && isset($cards[$selectedCard])): ?>
            <div class="card bg-white shadow-lg p-6 mb-6">
                <img src="<?= $cards[$selectedCard]['image']; ?>" alt="<?= $cards[$selectedCard]['title']; ?>" class="w-full h-[75vh] object-contain rounded-lg">
                <h1 class="text-4xl font-bold text-gray-800 mt-4"> <?= $cards[$selectedCard]['title']; ?> </h1>
                <p class="text-lg text-gray-600 mt-2"> <?= $cards[$selectedCard]['description']; ?> </p>
                <a href="index.php" class="mt-4 inline-block text-orange-500 font-semibold hover:underline">&#8592; Back to Home</a>
            </div>
        <?php else: ?>
            <p class="text-center text-xl font-semibold text-red-500">Invalid card selection.</p>
        <?php endif; ?>
    </div>
</body>
</html>