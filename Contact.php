<?php
    include "./assets/_Header.php";
    include "./assets/_Nav.php";
?>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

<section class="py-12 px-5">
    <div class="container mx-auto max-w-4xl">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-gray-900">
            <span class="text-orange-500">CONTACT</span> FORM
        </h2>

        <!-- Form -->
        <form class="mt-6 space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" placeholder="Your Name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                <input type="email" placeholder="E-mail" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                <input type="tel" placeholder="Phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
            </div>
            <textarea placeholder="Your Message" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 h-40"></textarea>
            <button type="submit" class="bg-gray-900 text-white font-bold px-6 py-3 rounded-lg hover:bg-gray-700">
                SUBMIT
            </button>
        </form>
    </div>
</section>
<?php 
    include "./assets/_Footer.php";
?>