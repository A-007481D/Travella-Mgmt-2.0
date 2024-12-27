<?php
session_start(); 
require_once("../processes/activityProcess.php");
$id = null;
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travella Activities</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl font-bold text-blue-600">✈️</span>
                    <span class="text-2xl font-bold text-blue-800">Travella</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="../index.php" class="text-gray-600 hover:text-blue-600 transition-colors">Home</a>
                    <a href="activities.php" class="text-gray-600 hover:text-blue-600 transition-colors">Activities</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">About</a>
                    <?php
                    if (!isset($_SESSION["client_email"])) {
                        echo " <button class='bg-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 duration-200'>
                        <a href='login.php' class='text-white'>Sign In</a>
                    </button>";
                    }else {
                        if ($_SESSION["client_email"] === "admin@gmail.com") {
                            echo " <button class='bg-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 duration-200'>
                        <a href='superDashboard.php' class='text-white'>admin</a>
                    </button>";
                        }else {
                            echo " <button class='bg-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 duration-200'>
                        <a href='profile.php' class='text-white'>client</a>
                    </button>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative pt-16">
        <div class="h-[60vh] flex items-center relative overflow-hidden">
            <img src="../img/activitiesbg.jpg" alt="Activity Background" class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Book Amazing<br/>
                    Local Activities
                </h1>
                <p class="text-xl mb-8 max-w-2xl">
                    Find and book the best local experiences, guided tours, and exciting activities in your area.
                </p>
            </div>mahdiiiii
        </div>
    </div>

    <!-- Search Section -->
    <div class="max-w-7xl mx-auto px-4 -mt-8 relative z-10">
        <div class="bg-white rounded-2xl shadow-xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activity Type</label>
                    <select class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>All Activities</option>
                        <option>Adventure Sports</option>
                        <option>Cultural Tours</option>
                        <option>Water Activities</option>
                        <option>Nature Walks</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Group Size</label>
                    <select class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Any Size</option>
                        <option>1-2 people</option>
                        <option>3-5 people</option>
                        <option>6+ people</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">&nbsp;</label>
                    <button class="w-full bg-blue-600 text-white px-6 py-2.5 rounded-xl hover:bg-blue-700 transition-colors">
                        Search Activities
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Activities -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Featured Activities</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <?php
               $aficheActivities = new Activities();
               $aficheActivities->AfficheActivities($id); 
               ?>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Browse by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center cursor-pointer">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏃</span>
                    </div>
                    <h3 class="font-bold">Adventure Sports</h3>
                    <p class="text-gray-500 text-sm mt-2">15 activities</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center cursor-pointer">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🌊</span>
                    </div>
                    <h3 class="font-bold">Water Sports</h3>
                    <p class="text-gray-500 text-sm mt-2">12 activities</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center cursor-pointer">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏔️</span>
                    </div>
                    <h3 class="font-bold">Mountain Tours</h3>
                    <p class="text-gray-500 text-sm mt-2">8 activities</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center cursor-pointer">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎨</span>
                    </div>
                    <h3 class="font-bold">Cultural Activities</h3>
                    <p class="text-gray-500 text-sm mt-2">10 activities</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">What Our Adventurers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="../img/eren.webp" alt="Reviewer" class="w-12 h-12 rounded-full mr-4"/>
                        <div>
                            <h4 class="font-bold">Eren Yeager</h4>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "俺は進み続ける。この地獄のような道の先に何があろうとも"
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="../img/wissam.jpg" alt="Reviewer" class="w-12 h-12 rounded-full mr-4"/>
                        <div>
                            <h4 class="font-bold">Wissam Douskary</h4>
                            <div class="text-yellow-400">★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                    "Amazing mountain biking experience! The guide was professional and the trails were perfect for all skill levels."
                    </p>
                </div>
            </div>
        </div>
    </section>
                
        <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <span class="text-3xl">✈️</span>
                    <span class="text-2xl font-bold">Voyage</span>
                </div>
                <p class="text-gray-400">Your trusted travel companion</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-white transition-colors">Destinations</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Tour Packages</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Travel Guides</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Contact Us</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>123 Travel Street</li>
                    <li>New York, NY 10001</li>
                    <li>Phone: (555) 123-4567</li>
                    <li>Email: info@voyage.com</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Newsletter</h4>
                <p class="text-gray-400 mb-4">Subscribe for travel tips and exclusive offers</p>
                <div class="flex gap-2">
                    <input type="email" placeholder="Your email" class="px-4 py-2 rounded-full bg-gray-800 text-white flex-grow">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </footer>
