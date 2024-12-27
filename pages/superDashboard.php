<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <a href="../../index.php" class="text-2xl font-bold text-blue-600">Travella</a>
            </div>
            
            <nav class="mt-6 px-6">
                <div class="space-y-4">
                    <a href="../index.php" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">🏠</span>
                        Home
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 bg-blue-50 text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">📜</span>
                        Reservations
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">🎯</span>
                        Activities
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">👥</span>
                        Manage Users
                    </a>
                </div>
            </nav>

            <div class="absolute bottom-0 w-64 p-4 border-t border-gray-200">
                <form method="POST" action="../processes/logout.php">
                    <button class="w-full px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Super Admin Dashboard</h1>
                    <!-- Add Activity Button -->
                    <button onclick="document.getElementById('addActivityModal').classList.remove('hidden')" 
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                        <span class="mr-2">+</span>
                        Add Activity
                    </button>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Pending Reservations</h2>
                        <p class="text-3xl font-bold text-blue-600 mt-2">0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Approved</h2>
                        <p class="text-3xl font-bold text-green-600 mt-2">0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Cancelled</h2>
                        <p class="text-3xl font-bold text-red-600 mt-2">0</p>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white rounded-lg shadow-md">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-700">Manage Users</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="text-left p-4 border-b">User ID</th>
                                    <th class="text-left p-4 border-b">First Name</th>
                                    <th class="text-left p-4 border-b">Last Name</th>
                                    <th class="text-left p-4 border-b">Email</th>
                                    <th class="text-left p-4 border-b">Number</th>
                                    <th class="text-left p-4 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-4">-</td>
                                    <td class="p-4">-</td>
                                    <td class="p-4">-</td>
                                    <td class="p-4">-</td>
                                    <td class="p-4">-</td>
                                    <td class="p-4 space-x-2">
                                        <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors">
                                            Archive
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors">
                                            Ban
                                        </button>
                                        <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition-colors">
                                            Promote
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Add Activity Modal -->
        <div id="addActivityModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg w-full max-w-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium">Add New Activity</h3>
                    <button onclick="document.getElementById('addActivityModal').classList.add('hidden')" 
                            class="text-gray-400 hover:text-gray-500">
                        ✕
                    </button>
                </div>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Activity Name</label>
                        <input type="text" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                               placeholder="Enter activity name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Description</label>
                        <textarea class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                                  rows="3" placeholder="Enter activity description"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Price</label>
                        <input type="number" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                               placeholder="Enter price">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Duration (hours)</label>
                        <input type="number" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                               placeholder="Enter duration">
                    </div>
                    <div class="flex justify-end space-x-2 pt-4">
                        <button onclick="document.getElementById('addActivityModal').classList.add('hidden')" 
                                type="button"
                                class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" 
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Add Activity
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addActivityModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html>