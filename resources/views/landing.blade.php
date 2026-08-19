<x-layout>
    <!-- Hero Section -->
    <div class="relative pt-32 pb-16 lg:pt-44 lg:pb-24 overflow-hidden">
        <!-- Background Glows -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[500px] opacity-20 pointer-events-none">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-500 to-orange-400 blur-[100px] rounded-full mix-blend-screen"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-sm mb-8">
                <span class="flex h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_10px_#34d399]"></span>
                <span class="text-xs font-semibold text-emerald-300 uppercase tracking-wider">100% Free Platform — Zero Subscription Fees</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-white mb-6 leading-tight">
                Centralized Salon Management <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400">& Online Booking System</span>
            </h1>
            
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-400 mb-10">
                A completely free multi-tenant platform built for salon owners to streamline daily operations, and clients to discover & book local salon services.
            </p>
            
            <!-- Dual Entry Points -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-xl mx-auto">
                <a href="#salon-owner" class="w-full sm:w-1/2 px-6 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold rounded-2xl hover:scale-105 transition-all duration-300 shadow-lg shadow-purple-500/25 flex flex-col items-center">
                    <span class="text-base">I'm a Salon Owner</span>
                    <span class="text-xs font-normal text-purple-100">Setup Salon Workspace</span>
                </a>
                <a href="#client-portal" class="w-full sm:w-1/2 px-6 py-4 bg-gray-900 border border-white/10 text-white font-semibold rounded-2xl hover:bg-gray-800 hover:scale-105 transition-all duration-300 flex flex-col items-center">
                    <span class="text-base text-gray-200">I'm a Client</span>
                    <span class="text-xs font-normal text-gray-400">Book an Appointment</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Salon Owner Workspace Section (Sidebar Preview) -->
    <div id="salon-owner" class="py-20 bg-gray-900/60 border-y border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-semibold uppercase tracking-wider text-purple-400 bg-purple-500/10 px-3 py-1 rounded-full border border-purple-500/20">For Salon Owners & Staff</span>
                <h2 class="text-3xl font-bold text-white mt-4 mb-3">All-In-One Operational Workspace</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Manage your salon's daily revenue, staff schedules, commissions, software POS, and client loyalty cards from a single intuitive sidebar navigation.</p>
            </div>

            <!-- Dashboard Preview with Sidebar -->
            <div class="max-w-5xl mx-auto rounded-2xl border border-white/10 bg-gray-950 shadow-2xl overflow-hidden">
                <div class="h-10 bg-gray-900 border-b border-white/5 flex items-center px-4 gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500/60"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500/60"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                    <span class="text-xs text-gray-500 font-mono ml-2">Tenant Workspace — Salon Admin Panel</span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 min-h-[420px]">
                    <!-- Sidebar Preview -->
                    <div class="bg-gray-900/90 border-r border-white/5 p-4 flex flex-col gap-1">
                        <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider px-3 mb-2">Salon Workspace</div>
                        
                        <a href="{{ route('tenant.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-purple-500/10 text-purple-300 font-medium text-sm border border-purple-500/20">
                            <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            Dashboard
                        </a>
                        <a href="{{ route('tenant.services') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Service Menu
                        </a>
                        <a href="{{ route('tenant.staff') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            Staff & Payroll
                        </a>
                        <a href="{{ route('tenant.queue') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Walk-ins & Queue
                        </a>
                        <a href="{{ route('tenant.pos') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            Software POS
                        </a>
                        <a href="{{ route('tenant.crm') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                            CRM & Loyalty
                        </a>
                        <a href="{{ route('tenant.reports') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-white/5 font-medium text-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                            Sales Reports
                        </a>
                    </div>
                    
                    <!-- Main Content Area -->
                    <div class="md:col-span-3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center pb-4 border-b border-white/5 mb-6">
                                <div>
                                    <h4 class="text-white font-semibold text-lg">Salon Operations Overview</h4>
                                    <p class="text-xs text-gray-400">Welcome back, Salon Manager</p>
                                </div>
                                <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Active Salon</span>
                            </div>
                            
                            <!-- Stat Cards -->
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="p-4 rounded-xl bg-gray-900 border border-white/5">
                                    <span class="text-xs text-gray-400 block mb-1">Today's Revenue</span>
                                    <span class="text-xl font-bold text-white">$1,240.00</span>
                                </div>
                                <div class="p-4 rounded-xl bg-gray-900 border border-white/5">
                                    <span class="text-xs text-gray-400 block mb-1">Upcoming Appointments</span>
                                    <span class="text-xl font-bold text-purple-400">8 Slots</span>
                                </div>
                                <div class="p-4 rounded-xl bg-gray-900 border border-white/5">
                                    <span class="text-xs text-gray-400 block mb-1">Active Stylists</span>
                                    <span class="text-xl font-bold text-emerald-400">4 Staff</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end gap-3 pt-4 border-t border-white/5">
                            <a href="{{ route('tenant.dashboard') }}" class="px-5 py-2.5 bg-purple-600 hover:bg-purple-500 text-white rounded-xl text-sm font-medium transition-colors">
                                Access Salon Dashboard &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Discovery & Booking Portal Section -->
    <div id="client-portal" class="py-24 bg-gray-950 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-xs font-semibold uppercase tracking-wider text-pink-400 bg-pink-500/10 px-3 py-1 rounded-full border border-pink-500/20">For Customers & Clients</span>
                <h2 class="text-3xl font-bold text-white mt-4 mb-3">Client Discovery & Instant Booking</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Find registered salons near you, check real-time stylist availability, chat with our AI receptionist, and earn digital loyalty stamps.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-gray-900 border border-white/5 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">1. Salon Directory</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Search through registered salons, view service menus, local pricing, and staff profiles.</p>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-gray-900 border border-white/5 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-pink-500/10 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">2. Real-Time Booking</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Select your preferred stylist and book available time slots without scheduling conflicts.</p>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-gray-900 border border-white/5 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-orange-500/10 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">3. Digital Loyalty Stamps</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Automatically earn virtual stamps per visit to redeem for salon-configured rewards.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('client.booking') }}" class="px-8 py-3.5 bg-gradient-to-r from-pink-500 to-orange-400 text-white font-semibold rounded-full hover:scale-105 transition-transform duration-300 shadow-lg shadow-pink-500/25 inline-flex items-center gap-2">
                    <span>Explore & Book a Salon Now</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</x-layout>
