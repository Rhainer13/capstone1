<x-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-pink-300">
        <!-- Logo and Heading -->
        <div class="flex flex-col items-center mb-6">
            <img src="/images/1.jpg" alt="DSWD Logo" class="w-90 mb-6">
            {{-- <h1 class="text-2xl font-bold text-blue-900">DSWD</h1>
            <p class="text-sm text-blue-900 -mt-1">Department of Social Welfare and Development</p> --}}
        </div>

        <!-- Sign In Card -->
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-sm">
            <h2 class="text-center text-2xl font-semibold mb-6">Sign In</h2>

            <form method="POST" action="{{route('dashboard')}}">
                @csrf
                <div class="mb-4">
                    <input type="text" name="email" placeholder="E-mail" required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div class="flex items-center mb-6">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm text-gray-600">Remember me</label>
                </div>

                <button type="submit"
                    class="w-full bg-green-400 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                    Sign In
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="mt-6 text-xs text-gray-700">
            © 2018 Department of Social Welfare and Development.
        </p>
    </div>
</x-layout>