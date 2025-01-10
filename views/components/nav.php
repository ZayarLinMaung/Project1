<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full h-auto flex flex-col sm:flex-row bg-slate-900 justify-between items-center fixed p-10 top-0 z-1">
        <h1 class="font-bold text-slate-100 text-4xl">Logo</h1>
        <div class="flex flex-col sm:flex-row text-slate-400 items-center justify-center">
            <a href="/" class="<?php echo uri('/')? 'text-slate-900 bg-slate-300 ':'text-slate-400';?> my-3 px-7 py-3 sm:px-4 sm:py-2 rounded-md">Home</a>
            <a href="/products" class="<?php echo uri('/products')?'text-slate-900 bg-slate-300':'text-slate-400';?>  my-3 px-7 py-3 sm:px-4 sm:py-2  rounded-md">Products</a>
            <a href="/about" class="<?php echo uri('/about')?'text-slate-900 text-slate-900 bg-slate-300':'text-slate-400';?>  my-3 px-7 py-3  sm:px-4 sm:py-2 rounded-md">About Us</a>
            <a href="/contact" class="<?php echo uri('/contact')?'text-slate-900 text-slate-900 bg-slate-300 ':'text-slate-400';?>  my-3 px-7 py-3 sm:px-4 sm:py-2 rounded-md">Contact</a>
        </div>
        <div class="flex flex-row space-x-8 text-slate-400 ">
            <a href="">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small_2x/user-profile-icon-free-vector.jpg" alt="" class="w-14 rounded-full">
            </a>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                <!-- Show Log Out button when logged in -->
                <a href="../../controllers/logout.php" class="bg-slate-500 hover:bg-slate-700 text-slate-100 p-5 rounded-full">Log Out</a>
            <?php else: ?>
                <!-- Show Log In button when not logged in -->
                <a href="/login" class="bg-slate-500 hover:bg-slate-700 text-slate-100 p-5 rounded-full">Log In</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
