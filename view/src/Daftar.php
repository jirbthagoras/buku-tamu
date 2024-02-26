<?php

require_once "../../vendor/autoload.php";
require_once "../../helper/connection.php";
require_once "../../helper/setCookie.php";

session_start();

if (isset($_SESSION['login'])) {

    if($_COOKIE['login_state']) {

        header("Location:/view/src/afterDaftar.php");
        exit();

    }

}

$db = getConnection();

$userService = new \project\service\userService();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userService->submit($_POST["nama"], $_POST["kelas"], $_POST["password"], $db);

}


?>

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
                <a href="Daftar.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">DAFTAR</a>
                <a href="Informasi.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">INFORMASI</a>
                <a href="rundown.php"
                class="font-jakarta font-bold text-white hover:text-gray-700">RUNDOWN</a>
                <a href="Data.php"
                class="font-jakarta font-bold  text-white hover:text-gray-700">DATA</a>
            </div>
        </nav>
    </div>
</div>



<form action="/view/src/Daftar.php" method="post">
    <div class=" w-full h-screen flex items-center justify-center">
        <div class="w-full max-w-xs lg:max-w-sm absolute">
            
            <div class="bg-[#DDB892] border-2 shadow-md rounded-2xl px-8 pt-8 pb-8">
                <div class="mb-4">
                    <h1 class="text-center text-white text-3xl font-extrabold font-jakarta mb-8">DAFTAR</h1>

                    <!-- <label for="username" class="block appearance-none text-yellow-400 text-sm font-bold mb-2">username</label> -->


                    <input type="text" placeholder="Nama..." name="nama"
                    class="shadow border-2 bg-gray-100 focus:bg-white focus:border-[#fbbf80] rounded-2xl w-full mb-5 py-2 px-3 text-gray-700 leading-tight focus:outline-none">

                    <!-- <label for="username" class="block appearance-none text-yellow-400 text-sm font-bold mb-2">username</label> -->

                    <select type="" placeholder="Kelas..." name="kelas"
                    class="shadow border-2 bg-gray-100 focus:bg-white focus:border-[#fbbf80] rounded-2xl w-full mb-5 py-2 px-3 text-gray-700 leading-tight focus:outline-none">
                        <option value="X DKV 1">X DKV 1</option>
                        <option value="X DKV 2">X DKV 2</option>
                        <option value="X DKV 3">X DKV 3</option>
                        <option value="X TJKT 1">X TJKT 1</option>
                        <option value="X TJKT 2">X TJKT 2</option>
                    </select>

                    <!-- <label for="username" class="block appearance-none text-yellow-400 text-sm font-bold mb-2">username</label> -->

                    <input type="password" placeholder="Password..." name="password"
                    class="shadow border-2 bg-gray-100 focus:bg-white focus:border-[#fbbf80] rounded-2xl w-full mb-5 py-2 px-3 text-gray-700 leading-tight focus:outline-none">
                </div>
                <div class="flex items-center justify-center">
                    <input type="submit" placeholder="SUBMIT" class="w-full bg-green-600 rounded-2xl hover:bg-green-900 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                </div>

            </div>
        </div>
    </div>
</form>

<?php

$db = null;
?>


</body>
</html>
