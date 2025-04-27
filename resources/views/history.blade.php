<x-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex flex-col justify-between h-screen p-4">
            <div>
                <img src="/images/1.jpg" alt="DSWD Logo" class="h-14 mb-4" />
                <h1 class="text-xl font-semibold mb-6 text-blue-800">Profiling System</h1>

                <div class="flex flex-col items-center mb-6">
                    <div class="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center">
                        <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.798.755 6.879 2.042M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="mt-2 font-medium">Social Worker 1</p>
                </div>

                <nav class="space-y-3">
                    <a href="#" class="flex items-center gap-2 p-3 rounded bg-gray-100 text-blue-800 font-semibold hover:bg-blue-100">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 3h4v4H4V3zM4 9h4v4H4V9zM4 15h4v4H4v-4zM10 3h4v4h-4V3zM10 9h4v4h-4V9zM10 15h4v4h-4v-4zM16 3h4v4h-4V3zM16 9h4v4h-4V9zM16 15h4v4h-4v-4z" /></svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-2 p-3 rounded bg-blue-700 text-white font-semibold shadow">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM12 14c-4.42 0-8 1.79-8 4v2h16v-2c0-2.21-3.58-4-8-4z"/></svg>
                        VAWC Victims
                    </a>
                </nav>
            </div>

            <button class="bg-red-600 hover:bg-red-700 text-white w-full py-2 rounded mt-6 font-semibold flex items-center justify-center gap-2" onclick="window.location.assign('{{ route('login') }}');">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
                Sign Out
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-white p-6">
            <div class="flex justify-between items-center border-b pb-4 mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-blue-700 mb-1">History</h2>
                    <p class="text-gray-500 text-sm">Home &gt; Name &gt; History</p>
                </div>
                <p class="text-sm text-gray-600">Sunday, March 30, 2025, 6:35 AM</p>
            </div>
        
            <div class="relative">
                <div class="absolute top-0 bottom-0 left-1/2 transform -translate-x-0.5 w-0.5 bg-gray-300"></div>
                <ul class="space-y-6">
                    <li class="grid grid-cols-3 gap-6 items-center">
                        <div class="text-right">
                            <h3 class="font-semibold text-gray-800">March 29, 2025</h3>
                            <p class="text-sm text-gray-600">10:00 AM</p>
                        </div>
                        <div class="relative rounded-full w-3 h-3 bg-blue-700 border-4 border-white shadow justify-self-center"></div>
                        <div class="bg-gray-100 rounded-md p-4">
                            <h4 class="font-semibold text-blue-700">Session No.: 5</h4>
                            <p class="text-sm text-gray-700">Type of Abuse: ...</p>
                            <p class="text-sm text-gray-700">Intervention: ...</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-3 gap-6 items-center">
                        <div class="text-right">
                            <h3 class="font-semibold text-gray-800">March 28, 2025</h3>
                            <p class="text-sm text-gray-600">10:00 AM</p>
                        </div>
                        <div class="relative rounded-full w-3 h-3 bg-blue-700 border-4 border-white shadow justify-self-center"></div>
                        <div class="bg-gray-100 rounded-md p-4">
                            <h4 class="font-semibold text-blue-700">Session No.: 4</h4>
                            <p class="text-sm text-gray-700">Type of Abuse: ...</p>
                            <p class="text-sm text-gray-700">Intervention: ...</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-3 gap-6 items-center">
                        <div class="text-right">
                            <h3 class="font-semibold text-gray-800">March 27, 2025</h3>
                            <p class="text-sm text-gray-600">10:00 AM</p>
                        </div>
                        <div class="relative rounded-full w-3 h-3 bg-blue-700 border-4 border-white shadow justify-self-center"></div>
                        <div class="bg-gray-100 rounded-md p-4">
                            <h4 class="font-semibold text-blue-700">Session No.: 3</h4>
                            <p class="text-sm text-gray-700">Type of Abuse: ...</p>
                            <p class="text-sm text-gray-700">Intervention: ...</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-3 gap-6 items-center">
                        <div class="text-right">
                            <h3 class="font-semibold text-gray-800">March 26, 2025</h3>
                            <p class="text-sm text-gray-600">10:00 AM</p>
                        </div>
                        <div class="relative rounded-full w-3 h-3 bg-blue-700 border-4 border-white shadow justify-self-center"></div>
                        <div class="bg-gray-100 rounded-md p-4">
                            <h4 class="font-semibold text-blue-700">Session No.: 2</h4>
                            <p class="text-sm text-gray-700">Type of Abuse: ...</p>
                            <p class="text-sm text-gray-700">Intervention: ...</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-3 gap-6 items-center">
                        <div class="text-right">
                            <h3 class="font-semibold text-gray-800">March 25, 2025</h3>
                            <p class="text-sm text-gray-600">10:00 AM</p>
                        </div>
                        <div class="relative rounded-full w-3 h-3 bg-blue-700 border-4 border-white shadow justify-self-center"></div>
                        <div class="bg-gray-100 rounded-md p-4">
                            <h4 class="font-semibold text-blue-700">Session No.: 1</h4>
                            <p class="text-sm text-gray-700">Type of Abuse: Physical</p>
                            <p class="text-sm text-gray-700">Intervention: Counseling</p>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
</x-layout>