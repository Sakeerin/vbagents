    {{-- sidebar --}}
    {{-- navigation.blade.php --}}
    <aside
        :class="{
            'translate-x-0': sidebarOpen,
            '-translate-x-full': !sidebarOpen,
            'w-20': sidebarCollapse,
            'w-64': !sidebarCollapse
        }"
        class="fixed left-0 top-20 h-[calc(100vh-5rem)] bg-white border-r z-40 transition-transform duration-300 ease-in-out overflow-y-auto">
        <nav class="h-full">
            <ul class="mt-2 space-y-1">
                <nav class="flex-1">
                    <ul class="">
                        <!-- Home -->
                        <li class="border-b-2">
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-house-chimney text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">Dashboard</span>
                            </a>
                        </li>

                        <!-- Users -->
                        <li class="border-b-2">
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-newspaper text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">ข่าวสาร</span>
                            </a>
                        </li>

                        <!-- Sales -->
                        <li class="border-b-2">
                            <a href="#"
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-percent text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">โปรโมชั่น</span>
                            </a>
                        </li>

                        {{-- Partners --}}
                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-building text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">โครงการ</span>
                            </button>
                        </li>

                        <!-- Leads -->
                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-list text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">รายการ</span>
                            </button>
                        </li>

                        <div class="border-b-2 flex justify-center bg-gray-500">
                            <span class="py-2 text-white text-sm">Sale Out</span>
                        </div>

                        {{-- Affliate --}}
                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-user-group text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">AGENTS</span>
                            </button>
                        </li>

                        <!-- แจกชื่อ -->
                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-address-book text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">รายชื่อสมัคร Agents</span>
                            </button>
                        </li>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-star text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">คอมมิชชั่น</span>
                            </button>
                        </li>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-regular fa-id-badge text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">ตำแหน่ง</span>
                            </button>
                        </li>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-people-line text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">ทีม</span>
                            </button>
                        </li>

                        <div class="border-b-2 flex justify-center bg-gray-500">
                            <span class="py-2 text-white text-sm">Sale In</span>
                        </div>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-user-group text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">Sales</span>
                            </button>
                        </li>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-list text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">รายการ</span>
                            </button>
                        </li>

                        <li class="border-b-2">
                            <button
                                class="flex items-center gap-4 px-4 py-3 w-full hover:bg-gray-100 hover:text-green-700 transition">
                                <i class="fa-solid fa-star text-lg text-black"></i>
                                <span x-show="!sidebarCollapse" class="font-medium">คอมมิชชั่น</span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </ul>

            <!-- ปุ่ม Toggle Sidebar -->
            <div class="hidden md:flex justify-end py-4">
                <button @click="sidebarCollapse = !sidebarCollapse"
                    class="p-2 w-12 bg-blue-600 hover:bg-blue-500 text-white rounded-l-full transition flex justify-center">
                    <i :class="sidebarCollapse ? 'fa-solid fa-angles-right' : 'fa-solid fa-angles-left'"></i>
                </button>
            </div>
        </nav>

    </aside>
