<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Titles</title>
</head>
<body>
    <?php require_once 'components/nav.php'; ?>
    <div class="w-full h-full lg:h-screen bg-slate-700 flex flex-col items-center m-0 p-10">
        <h1 class="font-bold text-slate-200 text-7xl sm:mt-40">Products</h1>
        <div class="flex flex-wrap justify-center gap-4 p-10 w-5/6 rounded-md mt-96 sm:mt-20">
            <?php if (empty($products)): ?>
                <p class="text-2xl text-red-500">No products found.</p>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <a href="/product?id=<?= $product['id']?>" class="flex flex-col items-center justify-center bg-slate-100 rounded-lg shadow-md p-4 text-xl font-semibold text-center w-96 h-96">
                        <img src="<?=$product['image_path']?>" alt="" class="rounded-md w-96 h-72">
                        <br>
                        <?= $product['title'] ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="w-full flex justify-center bg-slate-700 pb-20">
        <a href="/addproduct" class="text-black bg-white p-5 rounded-lg">Add Product</a>
    </div>
</body>
</html>
