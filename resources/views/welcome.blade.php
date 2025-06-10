<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Product Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes pulseIn {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out both;
        }
        .animate-fadeInDown {
            animation: fadeInDown 0.6s ease-out both;
        }
        .animate-pulseIn {
            animation: pulseIn 0.3s ease-in-out both;
        }
    </style>
</head>
<body class="bg-purple-600 flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
    <form method="POST" action="{{ route('register') }}" 
          class="bg-white p-6 sm:p-8 rounded-2xl shadow-2xl w-full max-w-sm animate-fadeInUp border border-purple-300">
        @csrf
        <h2 class="text-3xl font-extrabold mb-6 text-center text-purple-700 animate-fadeInDown">Register</h2>

        <div class="mb-4">
            <label class="block text-purple-700 font-medium">Name</label>
            <input type="text" name="name" 
                class="w-full border border-purple-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-400 transition transform focus:scale-105" 
                required>
        </div>

        <div class="mb-4">
            <label class="block text-purple-700 font-medium">Email</label>
            <input type="email" name="email" 
                class="w-full border border-purple-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-400 transition transform focus:scale-105" 
                required>
        </div>

        <div class="mb-4">
            <label class="block text-purple-700 font-medium">Password</label>
            <input type="password" name="password" 
                class="w-full border border-purple-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-400 transition transform focus:scale-105" 
                required>
        </div>

        <div class="mb-4">
            <label class="block text-purple-700 font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" 
                class="w-full border border-purple-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-400 transition transform focus:scale-105" 
                required>
        </div>

        @if ($errors->any())
            <div class="text-red-500 mb-4 text-sm animate-pulseIn">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>* {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex justify-center">
            <button type="submit"
                    class="bg-purple-600 text-white px-6 py-2 rounded-md hover:bg-purple-700 hover:scale-105 active:scale-95 transition duration-200 font-semibold shadow-sm">
                Register
            </button>
        </div>

        <p class="mt-4 text-sm text-center text-purple-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-purple-800 font-semibold hover:underline">Login</a>
        </p>
    </form>
</body>
</html>
