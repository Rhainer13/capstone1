<x-layout>
    <div class="bg-white p-6 rounded-md shadow-md w-80 ml-auto mr-auto">
        <img src="/images/1.jpg" alt="dswd logo" class="mb-5">

        <div class="grid grid-cols-2 gap-4 mb-5">
            <div class="font-semibold">Username:</div>
            <input type="text" placeholder="username" class="border rounded-md p-3 text-gray-800 placeholder-gray-400">
            <div class="font-semibold">Password:</div>
            <input type="password" placeholder="password" class="border rounded-md p-3 text-gray-800 placeholder-gray-400">
        </div>

        <div class="mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl focus:outline-none focus:shadow-outline w-full">
                Sign In
            </button>
        </div>
    </div>
</x-layout>