<?php require_once '../processes/registerProcess.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActivityHub - About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#3b82f6',
                        'secondary': '#1e40af'
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">✈️</span>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        ActivityHub
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="../index.php" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Home</a>
                    <a href="activities.php" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Activities</a>
                    <a href="#" class="text-blue-600">About</a>
                    <button class="bg-blue-600 px-6 py-2 rounded-full text-white hover:bg-blue-700 transition-all transform hover:scale-105 duration-200 shadow-lg hover:shadow-blue-500/50">
                        <a href="login.php">Sign In</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                About ActivityHub
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Discover amazing activities and experiences around the world with ActivityHub, your trusted companion for adventure and exploration.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Mission</h2>
                        <p class="text-gray-600 mb-6">
                            At ActivityHub, we're passionate about connecting people with extraordinary experiences. Our mission is to make activity discovery and booking seamless, allowing everyone to explore the world's most exciting adventures with confidence.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span class="text-gray-600">Curated experiences for every traveler</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span class="text-gray-600">Safe and secure bookings</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span class="text-gray-600">24/7 customer support</span>
                            </li>
                        </ul>
                    </div>
                    <div class="relative h-64 md:h-full min-h-[400px] rounded-xl overflow-hidden">
                        <img src="../img/switzerland.jpg" alt="Mission" class="absolute inset-0 w-full h-full object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Meet Our Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 relative">
                        <img src="/api/placeholder/400/300" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sarah Johnson</h3>
                        <p class="text-blue-600 mb-4">CEO & Founder</p>
                        <p class="text-gray-600">Passionate about creating unforgettable travel experiences for our community.</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 relative">
                        <img src="/api/placeholder/400/300" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Michael Chen</h3>
                        <p class="text-blue-600 mb-4">Head of Operations</p>
                        <p class="text-gray-600">Ensuring smooth and efficient experiences for all our users.</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 relative">
                        <img src="/api/placeholder/400/300" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Emma Davis</h3>
                        <p class="text-blue-600 mb-4">Customer Experience</p>
                        <p class="text-gray-600">Dedicated to providing exceptional support to our community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-blue-600 rounded-2xl shadow-xl p-8 md:p-12">
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <div class="text-white">
                        <div class="text-4xl font-bold mb-2">500+</div>
                        <div class="text-blue-100">Activities</div>
                    </div>
                    <div class="text-white">
                        <div class="text-4xl font-bold mb-2">50k+</div>
                        <div class="text-blue-100">Happy Customers</div>
                    </div>
                    <div class="text-white">
                        <div class="text-4xl font-bold mb-2">100+</div>
                        <div class="text-blue-100">Destinations</div>
                    </div>
                    <div class="text-white">
                        <div class="text-4xl font-bold mb-2">4.8/5</div>
                        <div class="text-blue-100">Customer Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Get in Touch</h2>
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Your name">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Your email">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Message</label>
                                <textarea class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200 h-32" placeholder="Your message"></textarea>
                            </div>
                            <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-blue-500/50">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span class="text-gray-600">123 Adventure Street, Travel City, TC 12345</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-gray-600">contact@activityhub.com</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="text-gray-600">+1 (555) 123-4567</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-