<?php
  include  './assets/_Header.php';
  include  './assets/_Nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moster Metal Coating</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        body {
            overflow-x: hidden;
        }
        .img_container {     
            background-repeat: no-repeat !important;
            background-position: center !important;
            height: 55vh !important;
            animation: slider 10s infinite;
            background-size: cover !important;
        }
        @keyframes slider {
            0% { background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide1.jpg"); }
            50% { background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide2.jpg"); }
            100% { background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide3.jpg"); }
        }
    </style>
</head>
<body>
<div class="w-full h-auto mt-4">
    <div class="img_container">
        <div class="layer relative w-full h-full bg-black/50 flex items-center">
            <div class="relative w-11/12 md:w-1/2 px-6 md:ps-16 py-8 md:py-16 text-xl md:text-3xl text-white">
                Precision. Performance. Perfection. – We craft high-quality industrial components with unmatched accuracy, ensuring superior functionality, durability, and efficiency for optimal industrial performance.
            </div>
        </div>
    </div>
    <?php include './assets/_Card.php'; ?>
    <div class="h-[15vh]"></div>
    <br>
    <section class="some_info px-6 md:px-12 py-11">
        <div>
            <h1 class="text-4xl md:text-6xl uppercase font-extrabold text-orange-500">We'll handle any</h1>
            <p class="font-normal uppercase text-orange-500 text-3xl md:text-6xl">intricate custom design</p>
        </div>
        <div class="info flex flex-col md:flex-row justify-around mt-10 md:mt-20 gap-6">
            <p class="text-gray-500 w-full md:w-[45%]">
                Moster Metal Coating Industry takes great pride in being a leader in manufacturing high-quality precision components for industrial applications. At the core of our business is a commitment to excellence, innovation, and reliability. We specialize in producing a wide range of industrial pulleys and machine parts designed to enhance efficiency and performance.
                <br><br>
                Our expertise extends across various precision-engineered products, including Ceramic Coated Multi Groove Pulleys, Aluminum Pulleys, Wire Drawing Machine Parts, Ceramic Coated Pulleys, Dancer Pulleys, Capstone Pulleys with Plasma Coating, Ceramic Coated Step Cones, Aluminum Buncher Pulleys, and Nickel Coated Contact Tubes.
                <br><br>
                At Moster Metal Coating Industry, customer satisfaction and precision engineering are at the heart of everything we do. Whether you need standard or custom-designed components, we are here to provide the best-in-class products that drive efficiency and productivity in your industry.
            </p>
            <p class="text-gray-500 w-full md:w-[45%]">
                Moster Metal Coating Industry offers the most cost-effective, high-quality engineering and manufacturing solutions for industrial components. With our expertise in designing, precision machining, coating technologies, and prototyping, we help our customers enhance performance while reducing operational costs.
                <br><br>
                Our extensive range of pulleys and machine parts is crafted with cutting-edge technology to ensure superior durability and efficiency.
                <br><br>
                At Moster Metal Coating Industry, we are committed to delivering innovative solutions that align with industry standards and customer expectations. With a strong emphasis on quality, performance, and sustainability, our processes are designed to be both environmentally friendly and highly efficient.
            </p>
        </div>
    </section>
</div>
<?php 
include './assets/_OurProducts.php';
include './assets/_Footer.php';
?>
</body>
</html>