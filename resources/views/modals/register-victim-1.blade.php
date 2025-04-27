<x-layout>

    <!-- Trigger Button -->
    <button @click="showModal = true" class="bg-blue-700 text-white px-4 py-2 rounded">Open Victim Info</button>

    <!-- Modal -->
    <div x-data="{ showModal: false }">
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-40 z-40 flex items-center justify-center px-4">
        <div class="bg-white w-full max-w-3xl rounded-lg shadow-lg p-6 relative z-50">
        <h2 class="text-xl font-bold text-center text-blue-800 mb-4">VICTIM INFORMATION</h2>

        <div class="grid grid-cols-12 gap-4">
            <!-- Victim Image -->
            <div class="col-span-3 flex justify-center">
            <img src="https://via.placeholder.com/100x120" alt="Victim" class="w-28 h-36 rounded object-cover shadow-md border"/>
            </div>

            <!-- Victim Details -->
            <div class="col-span-9 grid grid-cols-3 gap-2">
            <input type="text" placeholder="Last Name" class="col-span-1 border rounded p-2"/>
            <input type="text" placeholder="First Name" class="col-span-1 border rounded p-2"/>
            <input type="text" placeholder="Initial" class="col-span-1 border rounded p-2"/>

            <input type="email" placeholder="@ Email" class="col-span-1 border rounded p-2"/>
            <select class="col-span-1 border rounded p-2">
                <option>Civil Status</option>
                <option>Single</option>
                <option>Married</option>
            </select>
            <input type="date" class="col-span-1 border rounded p-2"/>

            <input type="text" placeholder="Phone Number" class="col-span-1 border rounded p-2"/>
            <input type="text" placeholder="Occupation" class="col-span-2 border rounded p-2"/>

            <select class="col-span-1 border rounded p-2">
                <option>Province</option>
            </select>
            <select class="col-span-1 border rounded p-2">
                <option>City</option>
            </select>
            <select class="col-span-1 border rounded p-2">
                <option>Barangay</option>
            </select>

            <input type="text" placeholder="Street" class="col-span-3 border rounded p-2"/>
            </div>
        </div>

        <!-- Guardian & Offender Info -->
        <div class="mt-6 border-t pt-4 space-y-3">
            <div>
            <label class="font-semibold">Guardian</label>
            <div class="grid grid-cols-4 gap-2 mt-1">
                <input type="text" placeholder="Last Name" class="border rounded p-2"/>
                <input type="text" placeholder="First Name" class="border rounded p-2"/>
                <input type="text" placeholder="Initial" class="border rounded p-2"/>
                <input type="text" placeholder="Relationship" class="border rounded p-2"/>
            </div>
            </div>
            <div>
            <label class="font-semibold">Offender</label>
            <div class="grid grid-cols-4 gap-2 mt-1">
                <input type="text" placeholder="Last Name" class="border rounded p-2"/>
                <input type="text" placeholder="First Name" class="border rounded p-2"/>
                <input type="text" placeholder="Initial" class="border rounded p-2"/>
                <input type="text" placeholder="Relationship" class="border rounded p-2"/>
            </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end gap-4 mt-6">
            <button @click="showModal = false" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">BACK</button>
            <button class="px-4 py-2 bg-blue-800 text-white rounded hover:bg-blue-900">SHOW HISTORY</button>
        </div>
        </div>
    </div>
    </div>
</x-layout>
