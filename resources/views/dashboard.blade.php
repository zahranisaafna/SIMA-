<x-layout-mhs>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Dashboard</h3> --}}


     <!-- Main Content -->
     <div class="container mx-auto px-8 py-6">
        {{-- <!-- Header -->
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700">
                Dashboard
                <div class="h-1.5 w-16 bg-orange-500 mt-2"></div>
            </h1>
            <div class="flex items-center gap-3">
                <div class="h-12 w-12 rounded-full border-2 border-orange-400 overflow-hidden">
                    <img src="{{ asset('images/Delta.png') }}" alt="Profile" class="h-full w-full object-cover">
                </div>
                <span class="text-xl font-semibold">Delta Diandra</span>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div> --}}

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2 max-w-7xl mx-auto">
            <!-- Profile Card -->
            <div class="rounded-[2rem] border-[3px] border-blue-200 bg-gradient-to-b from-[#E7F6F2] to-white h-[320px] relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-0 left-0 w-full">
                    <div class="h-24 bg-gradient-to-r from-teal-400 to-cyan-400 transform -skew-y-6 translate-y--8"></div>
                </div>
                
                <!-- Profile Content -->
                <div class="relative flex flex-col items-center pt-12">
                    <div class="h-32 w-32 rounded-full border-4 border-orange-400 overflow-hidden bg-white ring-8 ring-white">
                        <img src="{{ asset('images/Delta.png') }}" alt="Profile Picture" class="h-full w-full object-cover">
                    </div>
                    <h2 class="text-3xl font-bold mt-6 text-gray-800">Delta Diandra</h2>
                    <p class="text-xl text-orange-500 mt-2">24601221401087 S1 Informatika</p>
                </div>
            </div>

            <!-- Prestasi Akademik Card -->
            <div class="rounded-[2rem] border-[3px] border-blue-200 overflow-hidden h-[320px]">
                <!-- Top Section -->
                <div class="h-1/2 bg-gradient-to-r from-teal-400 to-cyan-400 relative">
                    <div class="absolute top-6 left-6">
                        <span class="inline-block px-6 py-2 rounded-full bg-white text-blue-700 font-semibold text-lg shadow-sm">
                            Prestasi Akademik
                        </span>
                    </div>
                </div>

                
                
                <!-- Bottom Section -->
                <div class="h-1/2 bg-blue-800 flex items-center justify-around px-12">
                    <div class="text-center">
                        <p class="text-blue-200 mb-2 text-lg">IPK</p>
                        <p class="text-6xl font-bold text-white">4.00</p>
                    </div>
                    <div class="h-24 w-0.5 bg-blue-600"></div>
                    <div class="text-center">
                        <p class="text-blue-200 mb-2 text-lg">SKS</p>
                        <p class="text-6xl font-bold text-white">93</p>
                    </div>
                </div>
            </div>

            <!-- Status Akademik Card -->
            <div class="col-span-full rounded-[2rem] border-[3px] border-blue-200 bg-white p-8">
                <div class="mb-8">
                    <span class="inline-block px-8 py-2 rounded-full border-2 border-orange-400 text-orange-500 font-semibold text-xl">
                        Status Akademik
                    </span>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 px-4">
                    <!-- Left Column -->
                    <div class="space-y-8">
                        <div class="flex items-center gap-6">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-50">
                                <svg class="h-7 w-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xl font-medium text-gray-800">Dr, Sutikno, S.T.,</p>
                                <p class="text-gray-600">(NIP: 197905242009121003)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-6">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-50">
                                <svg class="h-7 w-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 text-lg">Semester Studi</p>
                                <p class="text-xl font-medium text-gray-800">Semester Lima (5)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-8">
                        <div class="flex items-center gap-6">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-50">
                                <svg class="h-7 w-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 text-lg">Semester Akademik Sekarang</p>
                                <p class="text-xl font-medium text-gray-800">2024/2025 GANJIL</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-6">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-50">
                                <svg class="h-7 w-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 text-lg">Status Akademik</p>
                                <p class="text-xl font-bold text-red-500">Belum Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-mhs>
