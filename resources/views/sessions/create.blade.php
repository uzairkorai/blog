<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
            <h1 class="text-center font-bold text-xl">Log In</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            Email
                    </label>

                    <input class="border border-gray-200 rounded p-2 w-full" type="email" name="email" id="email"  value="{{ old('email')}}" autocomplete="username" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                    </label>

                    <input class="border border-gray-200 rounded p-2 w-full" type="password" name="password" id="password" autocomplete="new-password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
                <div style="text-align:center">
                    <a href="/register" class=" text-xs font-bold uppercase">Register</a>

                </div>
            </form>
            </x-panel>
        </main>
    </section>
</body>
</html>
