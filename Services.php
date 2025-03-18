<?php
    include "./assets/_Header.php";
    include "./assets/_Nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="./assets/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <section class="px-6 py-12">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-orange-600 mb-8">SERVICE <span class="text-black">CATEGORIES</span></h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="service-card p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Cement Industry Supply Services & Parts</h3>
                    <p class="text-gray-600 mb-4">
                        Providing advanced solutions for cement production, ensuring efficiency in material processing and plant operations.
                    </p>
                    <ul class="list_container space-y-2">
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Raw Material Grinding Unit (Raw Mill)</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Impact Crusher System (Hammer Plant)</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Industrial Fabrication & Surface Treatment Services</h3>
                    <p class="text-gray-600 mb-4">
                        Delivering high-quality fabrication, welding, and surface treatment solutions to enhance durability and performance.
                    </p>
                    <ul class="list_container space-y-2">
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Welding Repair & Restoration</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Precision Manufacturing (MFG)</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Surface Coating & Recoating Solutions</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Plastic Industry - Manufacturing & Processing Services</h3>
                    <p class="text-gray-600 mb-4">
                        Providing advanced solutions for plastic manufacturing, recycling, and precision processing.
                    </p>
                    <ul class="list_container space-y-2">
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Rotational Molding Machine</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Plastic Granulator / Grinding Unit</span>
                        </li>
                    </ul>
                </div>

                <div class="service-card p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Cable Industry - Coating & Surface Treatments</h3>
                    <p class="text-gray-600 mb-4">
                        Specialized coating solutions to enhance durability and efficiency in the cable industry.
                    </p>
                    <ul class="list_container space-y-2">
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Plasma Coating</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Tungsten Carbide Coating (TC Coating)</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Ceramic Coating</span>
                        </li>
                        <li class="border-b p-2 border-gray-500 transition-all duration-300"> 
                            <span class="font-mono text-black">> </span> 
                            <span class="text-orange-600">Nickel Coating</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include "./assets/_Footer.php"; ?>
</body>
<script>
    document.querySelectorAll('.list_container li').forEach(item => {
        item.addEventListener('mouseover', () => {
            item.children[0]?.classList.add('text-white');
            item.children[1]?.classList.add('text-white');
            item.children[1]?.classList.remove('text-orange-600');
            item.classList.add('bg-orange-600');
        });
        
        item.addEventListener('mouseout', () => {
            item.children[0]?.classList.remove('text-white');
            item.children[1]?.classList.remove('text-white');
            item.children[1]?.classList.add('text-orange-600');
            item.classList.remove('bg-orange-600');
        });
    });
</script>
</html>
