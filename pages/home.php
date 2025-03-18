<?php
// Define BASE_PATH for including files
define('BASE_PATH', __DIR__ . '/');

// Get the requested route from the URL
$route = isset($_GET['route']) ? trim($_GET['route'], '/') : 'home';

// Convert route name to lowercase for consistency
$route = strtolower($route);


// Check if the requested route exists
if ($route == "home") {
    include BASE_PATH . "pages/home.php";
}
if ($route == "about") {
    include BASE_PATH . "/pages/about.php";
}
if ($route == "contect") {
    include BASE_PATH . "/pages/contact.php";
}
 else {
    include BASE_PATH . "pages/404.php"; // Handle invalid pages
}
?>
