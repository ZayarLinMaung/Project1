<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?> - Product Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-700 text-slate-200">

    <div class="w-full min-h-screen flex flex-col items-center pt-40 mt-96 sm:pt-12 sm:mt-32">
        <!-- Title -->
        <h1 class="font-bold text-3xl sm:text-7xl mb-10">Product</h1>

        <!-- Product Details -->
        <div class="flex flex-col gap-5 p-10 items-center sm:justify-center w-11/12 lg:w-2/4 bg-white text-black rounded-md shadow-md">
            <!-- Product Image -->
            <img src="<?= $product['image_path']?>"
                 class="w-80 h-60 object-cover rounded-md shadow-lg">

            <!-- Product Title -->
            <p class="text-center text-lg md:text-4xl font-bold break-words w-full sm:w-3/4">
                <?= $product['title'] ?>
            </p>

            <!-- Product Description -->
            <p class="text-justify text-sm md:text-2xl break-words w-full sm:w-3/4">
                <?= $product['desc'] ?>
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mt-10">
            <a href="/updateimg?id=<?= $product['id'] ?>" class="bg-white text-black px-5 py-3 rounded-lg shadow-md text-center">Update Image</a>
            <a href="/updateproduct?id=<?= $product['id'] ?>" class="bg-white text-black px-5 py-3 rounded-lg shadow-md text-center">Update Product</a>
            <form method="POST" class="inline-block">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <button type="submit" class="bg-red-500 text-white px-5 py-3 rounded-lg shadow-md text-center">Delete Product</button>
            </form>
        </div>

        <!-- Back Button -->
        <a href="/products" class="mt-10 text-white underline text-center">Go Back</a>
    </div>

</body>
</html>
