<aside id="sidebar"
    class="fixed left-0 top-0 z-50 flex h-screen w-[290px] flex-col overflow-y-hidden bg-white border-r border-gray-200 px-6 shadow-lg transition-all duration-300 sidebar-expanded lg:static lg:translate-x-0">
    <!-- SIDEBAR HEADER -->
    <div id="sidebar-header" class="flex items-center gap-3 pt-8 pb-8 justify-between border-b border-gray-100">
        <a href="#" class="flex items-center gap-2">
            <div class="logo-gradient rounded-xl">
                <img src="{{ asset('images/logo_1.svg') }}" alt="Logo" class="h-14" />
            </div>
            <div id="logo-text" class="text-gray-900">
                <h1 class="text-xl font-bold">Malang</h1>
                <p class="text-xs text-gray-500">Dashboard</p>
            </div>
        </a>
        <button id="sidebar-toggle"
            class="lg:hidden p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-all duration-200"
            aria-label="Toggle Sidebar">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path id="sidebar-toggle-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path id="sidebar-toggle-close" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="flex flex-col overflow-y-auto duration-300 ease-linear py-6">
        <nav>
            <div>
                <h3 class="mb-6 text-xs uppercase tracking-wider font-semibold text-gray-500">
                    <span id="menu-title">NAVIGATION</span>
                </h3>
                <ul class="flex flex-col gap-2 mb-8">
                    <!-- Dashboard -->
                    <li>
                        <a href="#"
                            class="menu-item-active flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 menu-hover"
                            data-menu="Dashboard">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="7" height="7" rx="2" stroke-width="2" />
                                    <rect x="14" y="3" width="7" height="7" rx="2" stroke-width="2" />
                                    <rect x="14" y="14" width="7" height="7" rx="2" stroke-width="2" />
                                    <rect x="3" y="14" width="7" height="7" rx="2" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Dashboard</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">eCommerce</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Calendar -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Calendar">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" stroke-width="2" />
                                    <path d="M16 2v4M8 2v4M3 10h18" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Calendar</span>
                        </a>
                    </li>
                    <!-- Profile -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Profile">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="8" r="4" stroke-width="2" />
                                    <path d="M6 20c0-2.21 3.58-4 8-4s8 1.79 8 4" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">User Profile</span>
                        </a>
                    </li>
                    <!-- Forms -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Forms">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke-width="2" />
                                    <path d="M3 9h18M9 21V9" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Forms</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Form
                                        Elements</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Tables -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Tables">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke-width="2" />
                                    <path d="M3 9h18M9 21V9" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Tables</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Basic
                                        Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Pages -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Pages">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke-width="2" />
                                    <path d="M3 9h18M9 21V9" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Pages</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Blank
                                        Page</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">404
                                        Error</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Others Group -->
            <div>
                <h3 class="mb-6 text-xs uppercase tracking-wider font-semibold text-gray-500">
                    <span id="others-title">COMPONENTS</span>
                </h3>
                <ul class="flex flex-col gap-2 mb-6">
                    <!-- Charts -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Charts">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3v18h18" stroke-width="2" />
                                    <path d="M7 16l4-4 4 4" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Charts</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Line
                                        Chart</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Bar
                                        Chart</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- UI Elements -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="UIElements">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke-width="2" />
                                    <path d="M3 9h18M9 21V9" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">UI Elements</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Alerts</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Avatars</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Badges</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Buttons</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Images</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Videos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Authentication -->
                    <li>
                        <a href="#"
                            class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                            data-menu="Authentication">
                            <div class="p-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke-width="2" />
                                    <path d="M12 16v-4M12 8h.01" stroke-width="2" />
                                </svg>
                            </div>
                            <span class="menu-label font-medium">Authentication</span>
                            <svg class="ml-auto w-4 h-4 menu-arrow transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M6 8l4 4 4-4" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="pl-12 mt-2 menu-dropdown hidden">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Sign
                                        In</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-3 py-2 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">Sign
                                        Up</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</aside>
