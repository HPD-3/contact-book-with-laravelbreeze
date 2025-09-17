<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - My Website</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">

    <!-- Navbar -->
    <div class="absolute top-0 left-0 w-full p-6 flex justify-between text-white">
        <h1 class="text-2xl font-bold">Personal Contact Book
        </h1>

    </div>

    <!-- Glass Register Card -->
    <div class="w-full max-w-md bg-white/20 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">
        <h2 class="text-3xl font-bold text-center mb-6">Create Account ✨</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-300" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input id="password" type="password" name="password"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                    class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-300" />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm hover:underline" href="{{ route('login') }}">
                    Already registered?
                </a>

                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>

</html>