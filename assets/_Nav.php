<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moster Metal Coating</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="w-full bg-gray-800 text-white px-6 py-3">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold">Moster Metal Coating</h1>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex gap-6">
                <li><a href="./index.php" class="hover:text-orange-500">Home</a></li>
                <li><a href="./About.php" class="hover:text-orange-500">About</a></li>
                <li><a href="./Services.php" class="hover:text-orange-500">Services</a></li>
                <li><a href="./Contact.php" class="hover:text-orange-500">Contact</a></li>
                <li><a href="./Product.php" class="hover:text-orange-500">Products</a></li>
                <li><a href="./assets/Moster-metal-Catlog.pdf" target="_blank" class="hover:text-orange-500">Catalog</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button class="menu-toggle md:hidden bg-gray-900 text-white p-2 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu fixed top-0 left-0 w-3/4 h-full bg-gray-900 text-white p-6 md:hidden">
        <button class="close-menu absolute top-4 right-4 text-white text-2xl">✖</button>
        <ul class="mt-10 flex flex-col gap-6 text-lg">
            <li><a href="./index.php" class="hover:text-orange-500">Home</a></li>
            <li><a href="./About.php" class="hover:text-orange-500">About</a></li>
            <li><a href="./Services.php" class="hover:text-orange-500">Services</a></li>
            <li><a href="./Contact.php" class="hover:text-orange-500">Contact</a></li>
            <li><a href="./Product.php" class="hover:text-orange-500">Products</a></li>
            <li><a href="./assets/Moster-metal-Catlog.pdf" target="_blank" class="hover:text-orange-500">Catalog</a></li>
        </ul>
    </div>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeMenu = document.querySelector('.close-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    </script>

</body>
</html>
