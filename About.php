<?php 
include "./assets/_Header.php";
include "./assets/_Nav.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <!-- include gsap -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>
<body>
    
    <section class="main mt-32">
        <div class="container grid grid-cols-3 px-32 gap-5">
            <div class="left">
                <h1 class="mb-11">
                    <span class=" uppercase text-orange-600 text-6xl font-bold">About </span><span class="font-thin text-6xl text-orange-600 uppercase ">Us</span>
                </h1>
                <img src="./img/about.jpg" class="my-10" alt="About Us image">
                <h2 class="small_heading">
                    We have extensive steel construction
                </h2>
                <p class="pera_about ">
                    Our advanced, automated systems allow us to manufacture faster at a lower cost – and we pass the savings on to our customers. It enables us to improve capacity which provides superior turn around times.
                </p>
            </div>
            <div class="center">
                <h1 class="mb-11">
                    <span class=" uppercase text-orange-600 text-6xl font-bold">our  </span><span class="font-thin text-6xl text-orange-600 uppercase ">history</span>
                </h1>
                <div class="history">
                   <div class="time">
                    <span class="text-orange-600">01-02-2023</span>
                    <h2 class="uppercase text-2xl my-3 font-thin"> Where we started</h2>
                    <p class="mb-3 text-gray-600">
                       
                        Nulla mollis nibh ac lectus bibendum, in aliquet tort mentum. Maecenas semper sagittis purus, in pharetra nibh aliquam eu. Pellentesque habitant .</p>
                   </div>
                   <div class="time">
                    <span class="text-orange-600">02-03-2023</span>
                    <h2 class="uppercase text-2xl my-3 font-thin">Step by step</h2>
                    <p class="mb-3 text-gray-600">
                        

Nulla mollis nibh ac lectus bibendum, in aliquet tort mentum. Maecenas semper sagittis purus, in pharetra nibh aliquam eu. Pellentesque habitant .
                    </p>
                   </div>
                   <div class="time">
                    <span class="text-orange-600"> 04-05-2023</span>
                    <h2 class="uppercase text-2xl my-3 font-thin">Our development</h2>
                    <p class="mb-3 text-gray-600">
                       
Nulla mollis nibh ac lectus bibendum, in aliquet tort mentum. Maecenas semper sagittis purus, in pharetra nibh aliquam eu. Pellentesque habitant .
                    </p>
                   </div>
                </div>
            </div>
            <div class="right">
                <div class="top">
                    <h1 class="mb-11">
                        <span class=" uppercase text-orange-600 text-6xl font-bold">Our </span><span class="font-thin text-6xl text-orange-600 uppercase ">story</span>
                    </h1>
                    <span class="uppercase text-2xl my-3 font-thin">automated systems</span>
                    <p class="my-4 text-gray-600">
                        
    Donec diam quam, aliquet in commodo a, aliquam non dolor. Donec et massa accumsan, egestas eros sit amet, egestas massa.
                    </p>
                </div>
                <div class="list">
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class="arrow font-mono">></span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Headgear steelwork
                        </span>
                    </div>
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class=" font-mono arrow">></span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Shaft steelwork
                        </span>
                    </div>
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class=" font-mono arrow">></span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Headgear bins
                        </span>
                    </div>
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class=" font-mono arrow">></span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Winder houses
                        </span>
                    </div>
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class="arrow font-mono">></span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Overland conveyers
                        </span>
                    </div>
                    <div class="p-4 w-full border-b-2 border-gray-300"> 
                        <span class="arrow font-mono">> </span> 
                        <span class="text-orange-600 uppercase ms-3 ">
                            Arrangement of chutes
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php 
include "./assets/_Footer.php";
?>
</body>
<script>
   const products = document.querySelectorAll('.list div');

products.forEach(function(element) {
    element.addEventListener('mouseover', function(e) {
        element.children[0]?.classList.add('text-white');
        element.children[1]?.classList.add('text-white');
        element.children[1]?.classList.remove('text-orange-600');
        element.classList.add('bg-orange-600');

    });

    element.addEventListener('mouseout', function(e) {
        // console.log(element)
        element.children[0]?.classList.remove('text-white');
        element.children[1]?.classList.remove('text-white');
        element.children[1]?.classList.add('text-orange-600');
        element.classList.remove('bg-orange-600');
    });
});

gsap.from(".left",{
    x:-200,
    scale:0,
    scale:0,
    opacity:0,
    duration:1
})
gsap.from(".center",{
    scale:0,
    opacity:0,
    duration:1
})
gsap.from(".right",{
    x:200,
    scale:0,

    opacity:0,
    duration:1
})
</script>
</html>