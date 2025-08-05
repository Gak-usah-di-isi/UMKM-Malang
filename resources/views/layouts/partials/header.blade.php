<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
  <body>
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="px-4 py-4 lg:px-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button id="mobile-menu-button"
                        class="lg:hidden p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-all duration-200"
                        aria-label="Toggle Menu" onclick="document.getElementById('sidebar-toggle').click()">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div>
                        <h1 class="text-xl lg:text-2xl font-bold text-gray-900">
                            Dashboard
                        </h1>
                        <p class="text-sm text-gray-600 hidden sm:block">
                            Welcome back to your dashboard
                        </p>
                    </div>
                </div>
                
                <!-- Profile Dropdown -->
                <div class="relative">
                    <button id="profile-button" 
                        class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"
                        aria-label="Profile Menu">
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="profile-dropdown" 
                        class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50 opacity-0 invisible transform scale-95 transition-all duration-200 origin-top-right">
                        
                        <!-- Profile Info -->
                        <div class="px-4 py-3 border-b border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">John Doe</p>
                                    <p class="text-xs text-gray-500">john@example.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Menu Items -->
                        <div class="py-1">
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150">
                                <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Profile
                            </a>
                        </div>
                        
                        <!-- Logout -->
                        <div class="border-t border-gray-100 py-1">
                            <button onclick="handleLogout()" 
                                class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-150">
                                <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  </body>
</html>