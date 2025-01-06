<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Titles</title>
</head>
<body>
    <?php require_once 'components/nav.php'; ?>
    <div class="w-full h-full lg:h-auto bg-slate-700 flex flex-col items-center m-0 p-10">
        <h1 class="font-bold text-slate-200 text-7xl sm:mt-40">Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-10 w-5/6 rounded-md   mt-96 sm:mt-20">
            <?php if (empty($products)): ?>
                <p class="text-2xl text-red-500">No products found.</p>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <a href="/product?id=<?= $product['id']?>" class="flex items-center justify-center h-40 bg-slate-100 rounded-lg shadow-md p-4 text-xl font-semibold text-center">
                        <?= $product['title'] ?></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a href="/addproduct" class="mt-10 text-black bg-white p-5 rounded-lg">Add Product</a>
    </div>
    
</body>
</html>