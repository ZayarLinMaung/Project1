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
        <form action="/register" method="post" class="flex flex-col items-center w-5/6">
            <div class="flex flex-row w-1/6">
                <label for="username" class="text-slate-100 mr-10 w-1/6">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <br/>
            <div class="flex flex-row w-1/6">
                <label for="email" class="text-slate-100 mr-10">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br/>
            <div class="flex flex-row w-1/6">
                <label for="password" class="text-slate-100 mr-10 w-1/6">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br/>
            <div class="flex flex-row w-1/6">
                <label for="confpassword" class="text-slate-100 mr-10 w-1/6">Confirm Password:</label>
                <input type="password" id="confpassword" name="confpassword" required>
            </div>
            <br/>
            <input type="submit" value="Register" class="text-black bg-white px-5 py-4 rounded-lg">
            <a href="/login" class="text-slate-100 text-md mt-5 ">Login</a>
        </form>
    </div>
</body>
</html>