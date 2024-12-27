<?php require_once '../processes/loginProcess.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActivityHub - Authentication</title>
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
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">✈️</span>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                    Travella
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="../index.php" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Home</a>
                    <a href="activities.php" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Activities</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">About</a>
                    <button class="bg-blue-600 px-6 py-2 rounded-full text-white hover:bg-blue-700 transition-all transform hover:scale-105 duration-200 shadow-lg hover:shadow-blue-500/50">
                        <a href="login.php">Sign In</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-24 pb-12 px-4">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <div class="flex">
                    <button id="loginTab" class="w-1/2 py-4 text-center font-semibold transition-all duration-300 border-b-2 border-blue-600 text-blue-600" onclick="showLogin()">
                        Login
                    </button>
                    <button id="signupTab" class="w-1/2 py-4 text-center font-semibold text-gray-500 transition-all duration-300 border-b-2 border-transparent hover:text-blue-600" onclick="showSignup()">
                        Sign Up
                    </button>
                </div>

                <!-- Login Form -->
                <div id="loginForm" class="p-8">
                    <h2 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        Welcome Back
                    </h2>
                    
                    <form method="POST" action="../processes/AuthProcess.php" class="space-y-6">
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                            <input type="email" name="email_login" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Enter your email">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                            <input type="password" name="password_login" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Enter your password">
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Remember me</span>
                            </label>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-blue-500/50">
                            Sign In
                        </button>
                    </form>
                    
                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Or continue with</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-300">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5 mr-2">
                                <span class="text-sm font-medium text-gray-700">Google</span>
                            </button>
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-300">
                                <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook" class="h-5 w-5 mr-2">
                                <span class="text-sm font-medium text-gray-700">Facebook</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sign Up Form -->
                <div id="signupForm" class="p-8 hidden">
                    <h2 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        Create Account
                    </h2>
                    
                    <form method="POST" action="../processes/AuthProcess.php" class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2">First Name</label>
                                <input name="name" type="text" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="First name">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2">Last Name</label>
                                <input name="prenom" type="text" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Last name">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                            <input name="email" type="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Enter your email">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">number</label>
                            <input name="number" type="number" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Enter your number">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                            <input type="password" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Create password">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password</label>
                            <input name="password" type="password" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Confirm password">
                        </div>
                        
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="check" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-600">I agree to the Terms and Conditions</span>
                        </label>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 shadow-lg hover:shadow-blue-500/50">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Or sign up with</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-300">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5 mr-2">
                                <span class="text-sm font-medium text-gray-700">Google</span>
                            </button>
                            <button class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-300">
                                <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook" class="h-5 w-5 mr-2">
                                <span class="text-sm font-medium text-gray-700">Facebook</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        function showLogin() {
            document.getElementById('loginForm').classList.remove('hidden');
            document.getElementById('signupForm').classList.add('hidden');
            document.getElementById('loginTab').classList.add('border-blue-600', 'text-blue-600');
            document.getElementById('signupTab').classList.remove('border-blue-600', 'text-blue-600');
            document.getElementById('signupTab').classList.add('border-transparent');
        }

        function showSignup() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('signupForm').classList.remove('hidden');
            document.getElementById('signupTab').classList.add('border-blue-600', 'text-blue-600');
            document.getElementById('loginTab').classList.remove('border-blue-600', 'text-blue-600');
            document.getElementById('loginTab').classList.add('border-transparent');
        }
    </script>
</body>
</html>