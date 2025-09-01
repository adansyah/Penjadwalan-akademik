<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KampusTime</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>



    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");

            if (input.type === "password") {
                input.type = "text";
                icon.setAttribute("data-feather", "eye-off");
            } else {
                input.type = "password";
                icon.setAttribute("data-feather", "eye");
            }

            // Render ulang ikon Feather
            feather.replace();
        }
    </script>

</head>

<body class="min-h-screen bg-zinc-400">
    <div class="flex h-screen">
        <!-- Login Form -->
        <div class="w-full md:w-1/2 bg-white flex flex-col justify-center items-center p-8">
            <div class="text-center mb-10">
                <div class="flex justify-center mb-2">
                    <div class="bg-green-400 w-4 h-4 rounded-sm"></div>
                    <div class="bg-zinc-400 mt-2 w-4 h-4 rounded-sm -ml-2"></div>
                </div>
                <h1 class="text-2xl font-bold text-blue-900">KampusTime</h1>
            </div>

            <div class="w-full max-w-sm">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Login</h2>
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                    </div>
                    <div class="relative">
                        <label for="password" class="block text-sm text-gray-700">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="mt-1 w-full px-4 py-2 pr-10 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" />

                        <!-- Ikon Feather (mata) -->
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-9 text-gray-600 text-xl focus:outline-none">
                            <i id="toggleIcon" data-feather="eye" class="w-5 h-5"></i>
                        </button>

                        <div class="text-right mt-1">
                            <a href="#" class="text-sm text-blue-700 hover:underline">Lupa Password?</a>
                        </div>
                    </div>
                    <div>
                        <a href="/dashboard"
                            class="block text-center btn w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-800 transition">
                            Login</a>
                        {{-- <button type="submit"
                            class="w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-800 transition">Sign
                            in</button> --}}
                    </div>
                </form>
            </div>
        </div>

        <!-- Image -->
        <div class="hidden md:block w-1/2 h-full">
            <img src="{{ asset('abu.jpg') }}" alt="Login Illustration"
                class="object-cover h-[600px] m-auto w-[500px] mt-10 rounded-3xl shadow-2xl opacity-80 ">
        </div>
    </div>

    <script>
        feather.replace();
    </script>

</body>

</html>
