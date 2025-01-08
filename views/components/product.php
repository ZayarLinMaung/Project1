<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="w-full h-full lg:h-svh bg-slate-700 flex flex-col items-center m-0 p-10">
        <h1 class="font-bold text-slate-200 text-7xl sm:mt-40">Products</h1>
        <div class="flex flex-col gap-5 p-10 items-center sm:justify-center w-5/6 lg:w-2/4 h-auto bg-white rounded-md shadow-md mt-96 sm:mt-20">
                <p class="text-4xl"><?=$product['title']?></p>
                <p class="text-2xl w-40 sm:w-2/3 h-auto"><?=$product['desc']?></p>
        </div>
        <a href="/updateimg?id=<?= $product['id'] ?>" class="mt-10 text-black bg-white p-5 rounded-lg">Update Image</a>
        <a href="/updateproduct?id=<?= $product['id'] ?>" class="mt-10 text-black bg-white p-5 rounded-lg">Update Product</a>

        <form method="POST" >
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?=$product['id']?>">
            <button type="submit" class="mt-10 text-black bg-white p-5 rounded-lg">Delete Product</button>
        </form>
        <a href="/products" class="mt-10 text-white">Go Back</a>
    </div>
</body>
</html>