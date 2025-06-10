<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management System </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeBounceIn {
            0% {
                opacity: 0;
                transform: scale(0.9) translateY(-30px);
            }
            50% {
                opacity: 0.7;
                transform: scale(1.02) translateY(10px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        .animate-fadeBounceIn {
            animation: fadeBounceIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-purple-500 flex items-center justify-center h-screen">
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm animate-fadeBounceIn">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center text-purple-700">Login</h2>

        <div class="mb-4">
            <label class="block text-purple-700">Email</label>
            <input type="email" name="email" class="w-full border border-purple-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" required>
        </div>

        <div class="mb-4">
            <label class="block text-purple-700">Password</label>
            <input type="password" name="password" class="w-full border border-purple-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" required>
        </div>

        @if ($errors->any())
            <div class="text-red-500 mb-4 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>* {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex justify-center">
            <a href="{{ route('home') }}" class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700 transition-all duration-300 text-center">Login</a>
        </div>

        <p class="mt-4 text-sm text-center text-purple-700">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-purple-600 hover:underline">Register</a>
        </p>
    </form>
</body>
</html>
