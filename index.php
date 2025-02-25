<?php
  include  './assets/_Header.php';
  include  './assets/_Nav.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body{
            overflow-x: hidden;
        }
          .img_container{     
        background-repeat: no-repeat !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        height: 55vh !important;
        animation: slider 10s infinite;
    }
    @keyframes slider {
        0%{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide1.jpg");

        }
        50%{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide2.jpg");

        }
        100%{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/slide3.jpg");

        }
    }

    </style>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
  

<div class=" w-full h-auto  mt-4">
    <div class="img_container ">
        <div class="layer relative w-full h-full bg-black/50">
        <div class=" relative w-1/2 ps-16 py-16 h-full flex  text-5xl text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, dolorum!
        </div>
    </div>
    </div>
    <?php include  './assets/_Card.php'; ?>
    <div class="h-[15vh]"></div>
    <br>
    <section class="some_info px-12 py-11 ">
   <div>
   <h1 class="text-6xl uppercase font-extrabold text-orange-500">
    We'll handle any
    </h1>
    <p class="font-normal uppercase text-orange-500 text-6xl">
    intricate custom design
    </p>
   </div>
   <div class="info flex justify-around  mt-20">
    <p class="text-gray-500 w-[30vw]">
    Steel and Fabrication Industry takes great pride in our industry-leading custom metal fabrication services. This is the core of our business and it’s a process we take seriously. We work on small, large, and heavy components. Our team of experts provides over a dozen metal fabrication services. We work with a large variety of metals and raw material forms. Our loyal customers come to us from a diverse array of industries. Their applications and products are numerous, which include sheet metal, complex assemblies, music equipment, fuel tanks, fixtures, and much more.
    </p>
    <p class="text-gray-500 w-[30vw]">
    Steel and Fabrication Industry offers the most cost-effective, high-quality engineering and design services around. With our consulting, designing, prototyping, and other expert services, we consistently save customers time and money. We also offer a host of additional services, all under the initiative of environmentally-friendly, superior-quality work.
    </p>
   </div>
    </section>

</div>
<?php 
include  './assets/_OurProducts.php';
include  './assets/_Footer.php';
 ?>
</body>
<script>
    gsap.registerPlugin(ScrollTrigger);
    gsap.from(".some_info",{
        x:-100,
        opacity:0,
        duration:1,
        scrollTrigger:{
            trigger:".some_info",
            start:"top 70%",
            end:"bottom 80%",
            scrub:1,
            // markers:true
        },
        
    })
</script>
</html>