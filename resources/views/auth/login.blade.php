<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Website</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">

    <div class="absolute top-0 left-0 w-full p-6 flex justify-between text-white">
        <h1 class="text-2xl font-bold">Personal Contact Book</h1>
        
    </div>

    <!-- Glass effect login card -->
    <div class="w-full max-w-md bg-white/20 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">
        <h2 class="text-3xl font-bold text-center mb-6">Welcome Back 👋</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input id="password" type="password" name="password"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mt-4">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                <label for="remember_me" class="ms-2 text-sm">Remember me</label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('register'))
                    <a class="text-sm hover:underline" href="{{ route('register') }}">
                        Dont Have an account?
                    </a>
                @endif

                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                    Log In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
