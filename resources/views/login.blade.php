<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded" required>
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

        <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">Login</button>

        <p class="mt-4 text-sm text-center">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-green-600 hover:underline">Register</a>
        </p>
    </form>
</body>
</html>
