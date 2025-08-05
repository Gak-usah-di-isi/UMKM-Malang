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
            <div class="flex items-center gap-2 lg:gap-4">
                <button class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-5 5-5-5h5v-5a7.5 7.5 0 01-15 0v5h5l-5 5-5-5h5V7a7.5 7.5 0 0115 0v10z" />
                    </svg>
                </button>
                <button class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-5 5-5-5h5v-5a7.5 7.5 0 01-15 0v5h5l-5 5-5-5h5V7a7.5 7.5 0 0115 0v10z" />
                    </svg>
                </button>
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500"></div>
            </div>
        </div>
    </div>
</header>
