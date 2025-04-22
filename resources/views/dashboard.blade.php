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

            <button class="bg-red-600 hover:bg-red-700 text-white w-full py-2 rounded mt-6 font-semibold flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
                Sign Out
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white rounded-tl-lg shadow-md">
            <div class="flex justify-between items-center border-b pb-2 mb-4">
                <h2 class="text-xl font-semibold text-blue-800">Home &gt; Dashboard</h2>
                <p class="text-sm text-gray-600">Sunday, March 30, 2025, 6:35 AM</p>
            </div>

            <div class="flex justify-between items-center mb-4">
                <div class="flex gap-2 items-center">
                    <input type="text" placeholder="Search Victim" class="border px-3 py-2 rounded-md w-60 focus:outline-none focus:ring" />
                    <select class="border px-2 py-2 rounded-md">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="flex gap-2">
                    <button class="bg-indigo-700 hover:bg-indigo-800 text-white px-4 py-2 rounded shadow">Scan Face</button>
                    <button class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded shadow flex items-center gap-1">
                        Add Victim
                        <span class="text-white font-bold text-lg">+</span>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border rounded">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left p-3">Picture</th>
                            <th class="text-left p-3">Name</th>
                            <th class="text-left p-3">ID</th>
                            <th class="text-left p-3">Date Reported</th>
                            <th class="text-left p-3">Status</th>
                            <th class="text-left p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <!-- Sample row (empty state or data rows will go here) -->
                        <tr>
                            <td colspan="6" class="text-center py-6 text-gray-400 italic">No data available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</x-layout>