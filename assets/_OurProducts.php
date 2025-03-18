<html>
    <body>
        <div class="w-full flex justify-center mt-14">
            <div class="container">
                <div class="prod_heading">
                    <h1>
                        <span class="text-gray-800 text-5xl font-bold uppercase">Our</span> 
                        <span class="text-gray-800 text-5xl font-normal uppercase ps-7">Products</span>
                    </h1>
                </div>
                <div class="container flex justify-between">
                    <div class="prod w-[32%] p-4  ">
                        <div class="border-b-1  border-gray-300 py-2 px-4  transition-all duration-300">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="h-full w-full product_name uppercase text-orange-600 text-xl">Ceramic Coated Multi Groove Pulley</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Aluminum Pulleys</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Wire Drawing Machine Parts</span>
                        </div>
                    </div>
                    
                    <div class="prod w-[32%] p-4   ">
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Creamic Coated Pulley</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Dancer Pulley</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Capstone Pulley Plasma Coated</span>
                        </div>
                    </div>
                    
                    <div class="prod w-[32%] p-4   ">
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Ceramic Coated Step Cone</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Aluminum Buncher pulley</span>
                        </div>
                        <div class="border-b-1 border-gray-300 py-2 transition-all duration-300 px-4">
                            <span class="text-black text-2xl font-mono">></span>
                            <span class="product_name uppercase text-orange-600 text-xl">Nickel Coated Contact Tube</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        const prod = document.querySelectorAll('.prod div');
        prod.forEach((item) => {
            item.addEventListener('mouseover', () => {
                item.children[0].style.color="#fff";
                item.children[1].style.color="#fff";
                item.classList.add("bg-orange-600")

            })
            item.addEventListener('mouseout', () => {
                item.children[0].style.color="#000";
                item.children[1].style.color="#F97316";
                item.classList.remove("bg-orange-600")

            })
        })
      
    </script>
</html>
