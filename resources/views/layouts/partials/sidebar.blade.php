<aside id="sidebar"
    class="fixed left-0 top-0 z-50 flex h-screen w-[290px] flex-col overflow-y-hidden bg-white border-r border-gray-200 px-6 shadow-lg transition-all duration-300 sidebar-expanded lg:static lg:translate-x-0">
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
    @role('admin')
        <div class="flex flex-col overflow-y-auto duration-300 ease-linear py-6">
            <nav>
                <div>
                    <h3 class="mb-6 text-xs uppercase tracking-wider font-semibold text-gray-500">
                        <span id="menu-title">MANAGE</span>
                    </h3>
                    <ul class="flex flex-col gap-2 mb-8">
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="{{ request()->routeIs('admin.dashboard') ? 'menu-item-active' : 'text-gray-600' }} flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 hover:text-blue-600 menu-hover"
                                data-menu="Dashboard">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 3.75h6.5v6.5h-6.5v-6.5zM13.75 3.75h6.5v6.5h-6.5v-6.5zM3.75 13.75h6.5v6.5h-6.5v-6.5zM13.75 13.75h6.5v6.5h-6.5v-6.5z" />
                                    </svg>
                                </div>
                                <span class="menu-label font-medium">Dashboard</span>
                            </a>
                        </li>
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
                                <span class="menu-label font-medium">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                                data-menu="Forms">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                    </svg>

                                </div>
                                <span class="menu-label font-medium">UMKM</span>
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
                                            class="block px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-200">Semua
                                            UMKM</a>
                                        <a href="{{ route('admin.umkm-verification.index') }}"
                                            class="{{ request()->routeIs('admin.umkm-verification.index') ? 'menu-item-active text-white' : 'text-gray-600' }} block px-3 py-2 rounded-lg hover:bg-gray-100 transition-all duration-200">
                                            Pengajuan UMKM
                                        </a>

                                        <a href="#"
                                            class="block px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-200">Kategori
                                            UMKM</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                                data-menu="Calendar">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                    </svg>
                                </div>
                                <span class="menu-label font-medium">Article</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                                data-menu="Calendar">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                </div>
                                <span class="menu-label font-medium">Event</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    @endrole
    @role('umkm')
        <div class="flex flex-col overflow-y-auto duration-300 ease-linear py-6">
            <nav>
                <div>
                    <h3 class="mb-6 text-xs uppercase tracking-wider font-semibold text-gray-500">
                        <span id="menu-title">MANAGE</span>
                    </h3>
                    <ul class="flex flex-col gap-2 mb-8">
                        <li>
                            <a href="{{ route('umkm.dashboard') }}"
                                class="{{ request()->routeIs('admin.dashboard') ? 'menu-item-active' : 'text-gray-600' }} flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 hover:text-blue-600 menu-hover"
                                data-menu="Dashboard">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 3.75h6.5v6.5h-6.5v-6.5zM13.75 3.75h6.5v6.5h-6.5v-6.5zM3.75 13.75h6.5v6.5h-6.5v-6.5zM13.75 13.75h6.5v6.5h-6.5v-6.5z" />
                                    </svg>
                                </div>
                                <span class="menu-label font-medium">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                                data-menu="Forms">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                    </svg>

                                </div>
                                <span class="menu-label font-medium">UMKM</span>
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
                                            class="block px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-200">Profile
                                            UMKM</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-gray-600 hover:text-blue-600 menu-hover"
                                data-menu="Forms">
                                <div class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </div>
                                <span class="menu-label font-medium">Product</span>
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
                                            class="block px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-200">Semua
                                            Product</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    @endrole
</aside>
