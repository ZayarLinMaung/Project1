<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Titles</title>
</head>
<body>
    <?php require_once 'components/nav.php'; ?>
    <div class="w-full min-h-screen bg-slate-700 flex flex-col items-center md:mt-0 pt-32 mt-96 sm:mt-36">
        <h1 class="font-bold text-slate-200 text-7xl sm:mt-20">Products</h1>
        <?php if (empty($products)): ?>
            <p class="text-2xl text-red-500 text-center mt-20">No products found.</p>
        <?php else: ?>
            <div class="flex flex-wrap justify-center gap-4 p-10 w-full h-auto rounded-md sm:mt-10">
                <?php foreach ($products as $product): ?>
                    <a href="/product?id=<?= $product['id']?>" class="flex flex-col items-center justify-between bg-slate-100 rounded-lg shadow-md p-4 text-xl font-semibold text-center w-full sm:w-1/2 lg:w-1/4 h-auto">
                        <img src="<?= $product['image_path']?>"
                             class="rounded-md w-96 h-3/4">
                        <div class="mt-4 mb-4"><?= $product['title'] ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="w-full flex justify-center bg-slate-700 pb-20">
        <a href="/addproduct" class="text-black bg-white p-5 rounded-lg">Add Product</a>
    </div>
</body>
</html>
