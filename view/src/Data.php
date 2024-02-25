<?php

require_once "../../vendor/autoload.php";
require_once "../../helper/connection.php";

$db = getConnection();

$userRepository = new \project\repository\userRepository();

$result = $userRepository->query($db);

$number = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="no-scrollbar">
<div class="w-full h-screen fixed">
    <img src="./images/mg.png" alt="" class="w-full h-full object-cover">
</div>
<div class="fixed top-0 left-0 right-0 p-4 z-10">
    <div class="bg-[#7F5539] rounded-2xl p-4 ">
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
<div class="  w-full h-screen flex items-center  justify-center">
    <div class="w-full  max-w-xs lg:max-w-3xl absolute">

        <div class="bg-[#DDB892]  border-2 shadow-md rounded-2xl px-9 pt-8 mt-60 lg:mt-36 mb-10 pb-8">
            <div class="mb-4 ">
                <h1 class="text-center  text-white text-3xl font-extrabold font-jakarta  mb-8">DISPLAY</h1>

                <table border = "1">
                    <thead>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    </thead>
<!--                    --><?php //foreach($result as $set): ?>
                        <tbody>
                        <tr>
<!--                            <td>--><?php //echo $number++ ?><!--</td>-->
<!--                            <td>--><?php //echo $set["nama"];?><!--</td>-->
<!--                            <td>--><?php //echo $set["kelas"];?><!--</td>-->
<!--                            <td>--><?php //echo $set["tanggal"];?><!--</td>-->
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                        </tr>
                        </tbody>
<!--                    --><?php //endforeach; ?>
                </table>

            </div>
        </div>
    </div>
</div>

<?php $db = null; ?>
</body>
</html>