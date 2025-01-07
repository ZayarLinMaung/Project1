<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<P{, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-slate-700 w-full h-screen flex flex-col justify-center items-center">
        <h1 class="font-bold text-slate-200 text-7xl mb-20">Login</h1>
        <form action="/login" method="post" class="flex flex-col justify-center items-center w-5/6">
            <div class="flex flex-row w-1/6">
                <label for="email" class="text-slate-100 mr-10">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br/>
            <div class="flex flex-row w-1/6">
            <label for="password" class="text-slate-100 mr-10">Password:</label>
            <input type="password" id="password" name="password" required>
            </div>
            <br/>
            <input type="submit" value="Login" class="text-black bg-white px-5 py-4 rounded-lg">
            <a href="/register" class="text-slate-100 text-sm mt-5">Register</a>
        </form>
    </div>
</body>
</html>