<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "components/nav.php"; ?>
    <div class="w-full h-screen bg-slate-700 flex flex-col justify-center items-center ">
        <h1 class="text-4xl mt-40 mb-20 text-white border-b-2 border-b-white border-b-solid">Update Product</h1>
        <form method="POST" action="updateimg?id=<?= $id ?>" enctype="multipart/form-data" class="bg-slate-700 flex flex-col justify-center items-center w-5/6 space-y-10">
            <div class="flex flex-row w-72 space-x-10">
                <label for="image" class="text-white">Upload an image</label>
                <input type="file" name="image" class="w-60">
                
            </div>
            <button type="submit" class="mt-10 text-black bg-white p-2 rounded-lg">Update Product</button>
        </form>
    </div>
</body>
</html>