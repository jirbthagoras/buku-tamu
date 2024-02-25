<?php

namespace project\repository;

use project\model\kode;

class kodeRepository
{

    public function query($password, $db)
    {

        $statement = $db->prepare("SELECT * FROM kode WHERE kode = ?");

        $statement->execute([$password]);

        $result = $statement->fetchAll();

        foreach ($result as $datas)
        {
            $result['kode'] = $datas['kode'];
            $result['usages'] = $datas['usages'];
        }

        return $result;

    }

    public function minus($password, $db): void
    {

        $statement = $db->prepare("UPDATE kode SET usages = usages - 1 WHERE kode = ?");

        $statement->execute([$password]);

    }

}