<?php

namespace project\model;

class kode {
    public function __construct(private int $id, private string $kode)
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getKode(): string
    {
        return $this->kode;
    }

    public function setKode(string $kode): void
    {
        $this->kode = $kode;
    }


}