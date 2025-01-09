<?php require_once '../processes/reservationProcess.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <a href="index.php" class="text-2xl font-bold text-blue-600">Travella</a>
            </div>
            
            <nav class="mt-6 px-6">
                <div class="space-y-4">
                    <a href="../index.php" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">🏠</span>
                        Home
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 bg-blue-50 text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">📅</span>
                        Reservations
                    </a>
                    <a href="activities.php" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">🗺️</span>
                        Activities
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                        <span class="mr-3">👤</span>
                        Profile Settings
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
                    <h1 class="text-2xl font-bold text-gray-800">My Dashboard</h1>
                    <button onclick="document.getElementById('deleteAccountModal').classList.remove('hidden')" 
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
                        Delete Account
                    </button>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Active Reservations</h2>
                        <p class="text-3xl font-bold text-blue-600 mt-2">2</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Completed Trips</h2>
                        <p class="text-3xl font-bold text-green-600 mt-2">5</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-medium text-gray-700">Saved Activities</h2>
                        <p class="text-3xl font-bold text-purple-600 mt-2">3</p>
                    </div>
                </div>

                <!-- Reservations Table -->
                <div class="bg-white rounded-lg shadow-md">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-700">My Reservations</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="text-left p-4 border-b">Reservation ID</th>
                                    <th class="text-left p-4 border-b">Activity</th>
                                    <th class="text-left p-4 border-b">Date start</th>
                                    <th class="text-left p-4 border-b">Date End</th>
                                    <th class="text-left p-4 border-b">Price</th>
                                    <th class="text-left p-4 border-b">Status</th>
                                    <th class="text-left p-4 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $afficheRes = new Reservation();
                                $afficheRes->AfficheReservation(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Delete Account Modal -->
        <div id="deleteAccountModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg w-full max-w-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Delete Account</h3>
                    <button onclick="document.getElementById('deleteAccountModal').classList.add('hidden')" 
                            class="text-gray-400 hover:text-gray-500">
                        ✕
                    </button>
                </div>
                <div class="mb-6">
                    <p class="text-gray-700">Are you sure you want to delete your account? This action cannot be undone.</p>
                </div>
                <div class="flex justify-end space-x-3">
                    <button 
                        onclick="document.getElementById('deleteAccountModal').classList.add('hidden')"
                        class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                        Cancel
                    </button>
                    <form method="POST" action="processes/deleteAccount.php">
                        <button 
                            type="submit"
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
                            Delete Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Close modal when clicking outside
        document.getElementById('deleteAccountModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html>