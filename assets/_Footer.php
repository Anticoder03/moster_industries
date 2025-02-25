<footer class="bg-gray-900 text-gray-300 py-10 mt-8">
    <div class="container mx-auto px-5 flex flex-col md:flex-row justify-between items-start">
        <!-- Contact Info -->
        <div class="mb-6 md:mb-0">
            <h2 class="text-white text-3xl font-bold mb-4">CONTACTS</h2>
            <p><span class="text-orange-500 font-bold">FREEPHONE:</span> 9812-2947-17</p>
            <p><span class="text-orange-500 font-bold">ADDRESS:</span> <span class="capitalize">Behind ayansh auto garage, kachigam char rasta, daman - 396 210</span></p>
            <p><span class="text-orange-500 font-bold">OPENING HOURS:</span> 6am-4pm IST M-Th; 6am-3pm IST Fri</p>
            <p>
                <span class="text-orange-500 font-bold">E-MAIL:</span> 
                <a href="mailto:nidhivan.industries@rediffmail.com" class="text-blue-400 hover:underline">nidhivan.industries@rediffmail.com</a>
            </p>
        </div>

        <!-- Google Map -->
        <div class="w-full md:w-1/2 h-64">
            <iframe
                class="w-full h-full rounded-lg shadow-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.20968040755!2d-74.25986582303843!3d40.69767006832447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQxJzUxLjUiTiA3NMKwMTUnMTcuNCJX!5e0!3m2!1sen!2sus!4v1645643879166!5m2!1sen!2sus"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center text-sm text-gray-500 mt-8 border-t border-gray-700 pt-4">
        Moster Industry © 2025 | 
        <a href="#" class="hover:underline">Privacy Policy</a>
        <br>
        Developed & Maintained by <span class="text-orange-500 font-bold">Tech Fellows</span>
    </div>
</footer>

<script>
    gsap.registerPlugin(ScrollTrigger);
    gsap.from("footer", {
        x: -100,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "footer",
            start: "top 70%",
            end: "bottom 100%",
            scrub: 1,
        },
    });
</script>
