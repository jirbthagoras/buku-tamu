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
    <title>Data</title>
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
                <a href="daftar.php"
                   class="font-jakarta font-bold text-white hover:text-gray-700">DAFTAR</a>
                <a href="informasi.php"
                   class="font-jakarta font-bold text-white hover:text-gray-700">INFORMASI</a>
                <a href="rundown.php"
                   class="font-jakarta font-bold text-white hover:text-gray-700">RUNDOWN</a>
                <a href="data.php"
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

                <div style="overflow-x: auto">
                <table class="px-4 py-4 text-sm bg-[#7F5539] mr-5 ml-5">
                    <thead border="1" class="text-white px-3 py-3 text-2xl">
                    <th border="1" class="px-4 py-4">Nomor</th>
                    <th border="1" class="px-4 py-4">Nama</th>
                    <th border="1" class="px-4 py-4">Kelas</th>
                    <th border="1" class="px-4 py-4">Tanggal</th>
                    </thead>
                    <?php foreach($result as $set): ?>
                        <tbody>
                            <?php if ($number%2==0): ?>
                        <tr class="border-4 px-4 py-4 text-white justify-center items-center bg-[#B29F8E]">

                            <td class="border-2 px-4 py-4 justify-center items-center"><?php echo $number++ ?></td>
                            <td class="border-2 px-4 py-4"><?php echo $set["nama"];?></td>
                            <td class="border-2 px-4 py-4"><?php echo $set["kelas"];?></td>
                            <td class="border-2 px-4 py-4"><?php echo $set["tanggal"];?></td>
<!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
<!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
<!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
<!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
                        </tr>
                            <?php else:?>

                                <tr class="border-4 px-4 py-4 text-black justify-center items-center bg-[#DDB892]">

                                    <td class="border-2 px-4 py-4"><?php echo $number++ ?></td>
                                    <td class="border-2 px-4 py-4"><?php echo $set["nama"];?></td>
                                    <td class="border-2 px-4 py-4"><?php echo $set["kelas"];?></td>
                                    <td class="border-2 px-4 py-4"><?php echo $set["tanggal"];?></td>
                                    <!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
                                    <!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
                                    <!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
                                    <!--                            <td border="1" class="border-2 px-4 py-4">TEST</td>-->
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $db = null; ?>
</body>
</html>