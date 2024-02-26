<?php

namespace project\service;

use project\repository\kodeRepository;
use project\repository\userRepository;

require_once "../../vendor/autoload.php";

class userService
{

    public function submit($nama, $kelas, $password, $db)
    {

        htmlspecialchars($nama);
        htmlspecialchars($kelas);
        htmlspecialchars($password);

        $kodeRepository = new kodeRepository();
        $result = $kodeRepository->query($password, $db);


        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            try {

                if (array_key_exists('kode', $result) && array_key_exists('usages', $result)) {
                    if ($password == $result['kode'] && $nama != "" && $kelas != "") {

                        $userRepository = new userRepository();
                        $userRepository->submit($nama, $kelas, $db);
                        $kodeRepository->minus($password, $db);

                        header("Location:/view/src/Data.php");

                        exit();

                    } elseif ($result['usages'] <= 0) {

                        echo "<script>alert('PASSWORD INVALID: PASSWORD SALAH ATAU MUNGKIN PASSWORD EXPIRED')</script>" . PHP_EOL;

                    } else {

                        echo "<script>alert('INPUT INVALID: INPUT INVALID')</script>" . PHP_EOL;

                    }
                } else {
                    echo "<script>alert('PASSWORD INVALID: PASSWORD SALAH ATAU MUNGKIN PASSWORD EXPIRED')</script>" . PHP_EOL;
                }


            } catch(\PDOException $exception) {

                echo "<script>alert('INPUT INVALID: NAMA SUDAH TERDAFTAR')</script>" . PHP_EOL;

            }


        }



    }

    public function display($result)
    {



    }

}