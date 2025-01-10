<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "components/nav.php"; ?>
    <div class="w-full h-screen bg-slate-700 flex flex-col justify-center items-center ">
        <h1 class="text-4xl mt-40 mb-20 text-white border-b-2 border-b-white border-b-solid">Add Product</h1>
        <form method="POST" enctype="multipart/form-data" action="/controllers/addproduct.php" class="bg-slate-700 flex flex-col justify-center items-center w-5/6 space-y-10">
            <div class="flex flex-row w-72 space-x-10">
                <label for="title" class="text-white">Title</label>
                <input type="text" name="title" class="w-60">
                
            </div>
            <div class="flex flex-row w-72 space-x-10">
                <label for="desc" class="text-white">Description</label>
                <textarea name="desc" cols="30" rows="10" class="w-60"></textarea>
            </div>
            <div class="flex flex-row w-72 space-x-10">
                <label for="file" class="text-white">Upload Product Image</label>
                <input type="file" id="file" name="file">
            </div>
            <button type="submit" class="mt-10 text-black bg-white p-2 rounded-lg">Add Product</button>
        </form>
    </div>
</body>
</html>