<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-700 text-slate-200 min-h-screen flex justify-center items-center">

    <div class="w-full max-w-lg bg-slate-800 p-8 rounded-lg shadow-lg">
        <!-- Title -->
        <h1 class="text-4xl font-bold text-center mb-8">Register</h1>

        <!-- Registration Form -->
        <form action="/register" method="post" class="space-y-6">
            <!-- Username -->
            <div class="flex flex-col">
                <label for="username" class="mb-2 font-medium">Username:</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    class="px-4 py-2 bg-slate-900 text-slate-100 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your username">
            </div>

            <!-- Email -->
            <div class="flex flex-col">
                <label for="email" class="mb-2 font-medium">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="px-4 py-2 bg-slate-900 text-slate-100 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="flex flex-col">
                <label for="password" class="mb-2 font-medium">Password:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="px-4 py-2 bg-slate-900 text-slate-100 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your password">
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col">
                <label for="confpassword" class="mb-2 font-medium">Confirm Password:</label>
                <input 
                    type="password" 
                    id="confpassword" 
                    name="confpassword" 
                    required 
                    class="px-4 py-2 bg-slate-900 text-slate-100 border border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Confirm your password">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <input 
                    type="submit" 
                    value="Register" 
                    class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition">
            </div>

            <!-- Login Link -->
            <p class="text-center mt-4">
                Already have an account? 
                <a href="/login" class="text-blue-400 underline hover:text-blue-500">Login</a>
            </p>
        </form>
    </div>

</body>
</html>
