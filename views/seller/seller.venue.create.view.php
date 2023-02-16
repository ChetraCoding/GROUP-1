<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>
<main class="main-register m-auto w-5/12 ">
    <div class="bg-white w-full sm:rounded-lg">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8 shadow mt-10">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Create show venues  
            </h1><br>
            <form class="w-full space-y-4 " method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your venue name</label>
                    <input type="name" name="name" id="name" value="<?= isset($_POST['name'])? $_POST['name'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Your name venue">
                    <span class="text-red-600"><?= isset($errors['name'])? $errors['name'] : ""; ?></span>              
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your venue address</label>
                    <textarea id="address" name="address"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your address here..."><?= isset($_POST['address'])? $_POST['address'] : ""?></textarea>
                    <span class="text-red-600"><?= isset($errors['address'])? $errors['address'] : ""; ?></span>              
                </div>
                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none dark:focus:ring-green-800 w-full">Add here</button>
            </form>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.seller.php'; ?>