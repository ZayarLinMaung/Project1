<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-700 text-slate-200 min-h-screen flex justify-center items-center">

    <div class="w-full max-w-md bg-slate-800 p-10 rounded-lg shadow-lg">
        <!-- Login Title -->
        <h1 class="text-4xl font-bold text-center mb-8">Login</h1>

        <!-- Login Form -->
        <form action="/login" method="post" class="space-y-6">
            <!-- Email Field -->
            <div class="flex flex-col">
                <label for="email" class="mb-2 text-lg font-medium">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="px-4 py-2 rounded-lg bg-slate-900 text-slate-100 border border-slate-600 focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your email">
            </div>

            <!-- Password Field -->
            <div class="flex flex-col">
                <label for="password" class="mb-2 text-lg font-medium">Password:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="px-4 py-2 rounded-lg bg-slate-900 text-slate-100 border border-slate-600 focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <input 
                    type="submit" 
                    value="Login" 
                    class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition">
            </div>

            <!-- Register Link -->
            <p class="text-center mt-4">
                Don't have an account? 
                <a href="/register" class="text-blue-400 underline hover:text-blue-500">Register</a>
            </p>
        </form>
    </div>

</body>
</html>
