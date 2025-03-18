<?php 
include "./assets/_Header.php";
include "./assets/_Nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Moster Industry</title>
    <link rel="stylesheet" href="./assets/responsive.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>
<body>
    
    <section class="main mt-24 md:mt-32 px-4 md:px-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Left Section -->
            <div class="left text-center md:text-left">
                <h1 class="mb-8 text-5xl md:text-6xl font-bold text-orange-600">
                    About <span class="font-thin">Us</span>
                </h1>
                <img src="./img/about.png" class="my-6 w-full rounded-lg shadow-lg" alt="About Us image">
                <p class="text-gray-600 text-lg leading-relaxed">
                    Moster Industry is a leader in high-quality industrial solutions. Our precision-engineered components ensure durability and efficiency, making us a trusted name in automated manufacturing.
                </p>
            </div>

            <!-- Center Section (Timeline) -->
            <div class="center">
                <div class="timeline bg-white p-6 rounded-lg shadow-lg">
                    <span class="text-orange-600 font-semibold text-lg">04-05-2024</span>
                    <h2 class="uppercase text-xl md:text-2xl my-3 font-semibold">Our Growth</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Over the years, we have expanded our capabilities, integrating automation to enhance production speed, quality, and cost efficiency.
                    </p>
                </div>
            </div>

            <!-- Right Section (Our Story + List at Bottom) -->
            <div class="right flex flex-col">
                <div class="top text-center md:text-left">
                    <h1 class="mb-8 text-5xl md:text-6xl font-bold text-orange-600">
                        Our <span class="font-thin">Story</span>
                    </h1>
                    <span class="uppercase text-xl md:text-2xl my-3 font-semibold">Innovative Solutions</span>
                    <p class="my-4 text-gray-600 text-lg leading-relaxed">
                        At Moster Industry, we develop cutting-edge automation systems designed to optimize industrial performance and enhance efficiency.
                    </p>
                </div>

                <!-- List Section -->
                <div class="list mt-8 hidden md:block">
    <?php 
    $items = ["Headgear steelwork", "Shaft steelwork", "Headgear bins", "Winder houses", "Overland conveyers", "Arrangement of chutes"];
    foreach ($items as $item) {
        echo '<div class="p-4 w-full border-b-2 border-gray-300 hover:bg-orange-600 hover:text-white transition duration-300">
            <span class="arrow font-mono">></span> 
            <span class="text-orange-600 uppercase ms-3">'.$item.'</span>
        </div>';
    }
    ?>
</div>

            </div>
        </div>
    </section>

    <?php 
    include "./assets/_Footer.php";
    ?>
</body>

<script>
    // List Hover Effect
    document.querySelectorAll('.list div').forEach(element => {
        element.addEventListener('mouseover', () => {
            element.children[0].classList.add('text-white');
            element.children[1].classList.add('text-white');
            element.children[1].classList.remove('text-orange-600');
            element.classList.add('bg-orange-600');
        });

        element.addEventListener('mouseout', () => {
            element.children[0].classList.remove('text-white');
            element.children[1].classList.remove('text-white');
            element.children[1].classList.add('text-orange-600');
            element.classList.remove('bg-orange-600');
        });
    });

    // GSAP Animations
    gsap.from(".left", { x: -200, scale: 0, opacity: 0, duration: 1 });
    gsap.from(".center", { scale: 0, opacity: 0, duration: 1 });
    gsap.from(".right", { x: 200, scale: 0, opacity: 0, duration: 1 });
</script>
</html>
