<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Daftar</title>
</head>
<body class="">
<div class="w-full h-screen fixed">
        <img src="./images/mg.png" alt="" class="w-full h-full object-cover">
</div>
<div class="fixed top-0 left-0 right-0 p-4">
    <div class="bg-[#7F5539] rounded-2xl p-4">
        <nav class="flex items-center justify-center">
            <!-- Navigation Links -->
            <div class="flex space-x-4 md:space-x-14">
                <a href="daftar.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">DAFTAR</a>
                <a href="informasi.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">INFORMASI</a>
                <a href="rundown.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">RUNDOWN</a>
                <a href="Data.php"
                class="font-jakarta font-bold  text-white hover:text-gray-700">DATA</a>
            </div>
        </nav>
    </div>
</div>



<form action="/view/src/daftar.php" method="post">
    <div class=" w-full h-screen flex items-center justify-center">
        <div class="w-full max-w-xs lg:max-w-sm absolute">

            <div class="bg-[#DDB892] border-2 shadow-md rounded-2xl px-8 pt-8 pb-8">
                <div class="mb-4">
                    <h1 class="text-center text-white text-3xl font-extrabold font-jakarta mb-8">ANDA SUDAH DAFTAR!</h1>

            </div>
        </div>
    </div>
</form>


</body>
</html>