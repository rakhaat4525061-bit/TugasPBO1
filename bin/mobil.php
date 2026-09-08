<?php

class Mobil {
    public ?string $merk = null;
    public ?string $mesin = null;
    public ?string $rem = null;

    // Constructor untuk menginstansiasi objek valid
    public function __construct(string $merk) {
        $this->merk = $merk;
    }

    // Method Invarian 1: mesin tidak boleh null atau "rusak"
    public function kondisimesin(): void {
        if ($this->mesin === null || $this->mesin === "rusak") {
            throw new InvalidArgumentException("Objek Menolak: Mesin tidak valid/rusak!");
        } else {
            echo "Mesin Sehat\n";
        }
    }

    // Method Invarian 2: rem tidak boleh null atau "blong"
    public function mengerem(): void {
        if ($this->rem === null || $this->rem === "blong") {
            throw new InvalidArgumentException("Objek Menolak: Rem blong/tidak valid!");
        } else {
            echo "Kampas Rem Bagus\n";
        }
    }
}