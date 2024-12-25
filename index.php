
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage - Discover Your Next Adventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <span class="text-3xl font-bold text-blue-600">✈️</span>
                    <span class="text-2xl font-bold text-gray-800">ActivityHub</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-600 hover:text-blue-600 transition-colors">Home</a>
                    <a href="pages/activities.php" class="text-gray-600 hover:text-blue-600 transition-colors">Activities</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">About</a>
                    <button class="bg-blue-600 px-6 py-2 rounded-full hover:bg-blue-700 transition-all transform hover:scale-105 duration-200">
                        <a href="pages/login.php" class="text-white">Sign In</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative pt-16">
        <div class="min-h-screen flex items-center relative overflow-hidden">
            <img src="img/home.jpg" alt="Travel Destination" class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative max-w-7xl ml-8 mt-[-5rem] px-4 sm:px-6 lg:px-8 text-white py-32">
                <h1 class="text-5xl md:text-[6.5rem] font-bold mb-6">
                    Explore the World<br />
                    With Us
                </h1>
                <p class="text-xl mb-8 max-w-2xl">
                    Discover breathtaking destinations and create unforgettable memories. Your next adventure begins here.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-colors inline-flex items-center justify-center">
                        Start Your Journey
                    </button>
                    <button class="bg-white text-gray-900 px-8 py-3 rounded-full hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                        View Destinations
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Popular Destinations</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative group-hover:scale-105 transition-transform duration-300">
                        <img src="img/bali.jpg" alt="Bali" class="w-full h-64 object-cover " />
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-white text-xl font-bold">Bali, Indonesia</h3>
                            <p class="text-white/80">From $899</p>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Experience tropical paradise with pristine beaches and cultural wonders.</p>
                        <button class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            Learn More →
                        </button>
                    </div>
                </div>

                <div class="group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative group-hover:scale-105 transition-transform duration-300">
                        <img src="img/japan.jpg" alt="Paris" class="w-full h-64 object-cover" />
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-white text-xl font-bold">Tokyo, Japan</h3>
                            <p class="text-white/80">From $1099</p>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Discover the city of love with its iconic landmarks and cuisine.</p>
                        <button class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            Learn More →
                        </button>
                    </div>
                </div>

                <div class="group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div class="relative group-hover:scale-105 transition-transform duration-300">
                        <img src="img/switzerland.jpg" alt="Santorini" class="w-full h-64 object-cover " />
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-white text-xl font-bold">Santorini, Greece</h3>
                            <p class="text-white/80">From $1299</p>
                        </div>
                    </div>
                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Enjoy breathtaking sunsets and white-washed architecture.</p>
                        <button class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            Learn More →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Why Choose Voyage</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors">
                        <span class="text-2xl">🌟</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Best Prices</h3>
                    <p class="text-gray-600">Competitive rates and exclusive deals for unforgettable journeys.</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Expert Guidance</h3>
                    <p class="text-gray-600">Professional travel experts to help plan your perfect trip.</p>
                </div>
                <div class="text-center group">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors">
                        <span class="text-2xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Safe Travel</h3>
                    <p class="text-gray-600">Your safety and comfort are our top priorities.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20">
        <img src="img/foot.jpg" alt="Travel Scene" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-6">Ready for Your Next Adventure ? (❁´◡`❁)</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of satisfied travelers who have discovered their dream destinations with us.</p>
            <button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-colors">
                Start Planning Now
            </button>
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
</body>
</html>