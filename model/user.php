<?php

namespace project\model;

class user {
    public function __construct(private int $id, private string $nama, private int $absen, private string $kelas, private string $tanggal)
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

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getAbsen(): int
    {
        return $this->absen;
    }

    public function setAbsen(int $absen): void
    {
        $this->absen = $absen;
    }

    public function getKelas(): string
    {
        return $this->kelas;
    }

    public function setKelas(string $kelas): void
    {
        $this->kelas = $kelas;
    }

    public function getTanggal(): string
    {
        return $this->tanggal;
    }

    public function setTanggal(string $tanggal): void
    {
        $this->tanggal = $tanggal;
    }


}