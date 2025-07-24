<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VBLeads') }}</title>
    <title>VBagent</title>
    {{-- icons Awesome Font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&family=Sarabun:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="font-family: 'Sarabun', kanit;" x-data="{
    sidebarOpen: window.innerWidth >= 768,
    sidebarCollapse: false
        }" x-init="const mediaQuery = window.matchMedia('(min-width: 768px)');
        sidebarOpen = mediaQuery.matches;
        mediaQuery.addEventListener('change', e => {
            sidebarOpen = e.matches;
        });">
    <div>
        {{-- navbar ด้านบน --}}
        <header x-data="{ user: { profile: { imageUrl: 'https://randomuser.me/api/portraits/men/46.jpg' } } }" class="fixed top-0 left-0 right-0 bg-[#f7a236] shadow-md">
            <div class="p-4 flex items-center justify-between">

                <div class="flex items-center gap-2">
                    <button @click="sidebarOpen = !sidebarOpen"
                        class="md:hidden h-8 w-8 bg-blue-600 text-white rounded">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <h1 class="text-xl font-bold text-white md:px-0">VBEYOND</h1>
                </div>
                <div class="flex items-center">
                    <span class="px-2 text-white">Johny Walker</span>
                    <a class="flex items-center">
                        <img :src="user.profile.imageUrl" alt="Profile Picture"
                            class="rounded-full w-12 h-12 object-cover border border-gray-300 shadow" />
                    </a>
                </div>
            </div>
        </header>
        
        <div class="md:pl-64 mt-20 bg-gradient-to-r from-orange-50 to-orange-200">
            {{-- sidebar --}}
            <div class="">
                @include('layouts.navigation')
            </div>
            {{-- ส่วนเนื้อหา --}}
            <div class="">
                <main class=" min-h-screen p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
