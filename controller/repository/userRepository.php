<?php

namespace project\repository;

require_once "../../helper/connection.php";

class userRepository {

    public function submit($nama, $kelas, $db): void
    {

        $statement = $db->prepare("INSERT INTO user(nama, kelas) value(?, ?)");

        $statement->execute([$nama, $kelas]);

    }

    public function query($db)
    {

        $number = 1;
        $statement = $db->prepare("SELECT * FROM user");
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;

    }

}