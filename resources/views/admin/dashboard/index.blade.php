@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <main class="flex-1 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">
                                Total Revenue
                            </p>
                            <p class="text-2xl font-bold text-gray-900">$45,231</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <span class="text-green-500 text-sm font-medium">+20.1%</span>
                        <span class="text-gray-600 text-sm ml-2">from last month</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Orders</p>
                            <p class="text-2xl font-bold text-gray-900">1,235</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <span class="text-green-500 text-sm font-medium">+15.3%</span>
                        <span class="text-gray-600 text-sm ml-2">from last month</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Customers</p>
                            <p class="text-2xl font-bold text-gray-900">892</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <span class="text-red-500 text-sm font-medium">-2.5%</span>
                        <span class="text-gray-600 text-sm ml-2">from last month</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Products</p>
                            <p class="text-2xl font-bold text-gray-900">567</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <span class="text-green-500 text-sm font-medium">+8.2%</span>
                        <span class="text-gray-600 text-sm ml-2">from last month</span>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Revenue Overview
                    </h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <canvas id="revenueChart" class="w-full h-full"></canvas>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Recent Orders
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-medium text-blue-600">#1</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Order #12345</p>
                                    <p class="text-sm text-gray-600">John Doe</p>
                                </div>
                            </div>
                            <span class="text-green-600 font-medium">$234.50</span>
                        </div>

                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-medium text-green-600">#2</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Order #12346</p>
                                    <p class="text-sm text-gray-600">Jane Smith</p>
                                </div>
                            </div>
                            <span class="text-green-600 font-medium">$189.00</span>
                        </div>

                        <div class="flex items-center justify-between py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-medium text-purple-600">#3</span>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Order #12347</p>
                                    <p class="text-sm text-gray-600">Mike Johnson</p>
                                </div>
                            </div>
                            <span class="text-green-600 font-medium">$456.75</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
