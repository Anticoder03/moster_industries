<?php
    include "./assets/_Header.php";
    include "./assets/_Nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./assets/responsive.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <section class="py-12 px-5">
        <div class="container mx-auto max-w-4xl">
            <!-- Heading -->
            <h2 class="text-4xl font-bold text-gray-900 mb-8">
                <span class="text-orange-500">CONTACT</span> FORM
            </h2>

            <!-- Form -->
            <form class="mt-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="E-mail" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300">
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Phone" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300">
                    </div>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 h-40 resize-none"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="bg-gray-900 text-white font-bold px-8 py-4 rounded-lg hover:bg-orange-600 transition-all duration-300 transform hover:scale-105">
                        SUBMIT
                    </button>
                </div>
            </form>

            <!-- Contact Information -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="contact-info p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Office Address</h3>
                    <p class="text-gray-600">
                        Survey no 371/28 P.M.Complex<br>
                        Vapi Road Kachigam<br>
                        Daman - 396 210
                    </p>
                </div>
                <div class="contact-info p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Contact Details</h3>
                    <p class="text-gray-600">
                        Phone: +91 9821-2947-17<br>
                        Email: info@mosterindustries.com<br>
                        Hours: Mon-Thu: 6am-4pm; Fri: 6am-3pm
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include "./assets/_Footer.php"; ?>
</body>
</html>