<?php

class Nilai
{
    public string $mapel;
    public int $nilai;

    function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa
{
    public string $nrp;
    public string $nama;
    public $daftarNilai;

    function __construct($nrp, $nama, $mapel, $nilai)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = new Nilai($mapel, $nilai);
    }
}
echo "Siswa baru dengan mapel B. Ing 100 :" . PHP_EOL;
$siswa = new Siswa('120012', 'Satria', 'Inggris', 100);

print_r($siswa);
echo "----------------------------------";

$mapel = ['Inggirs', 'Indonesia', 'Jepang'];

for ($i=0; $i < 10; $i++) { 
    print_r(new Siswa(generateNrp(), generateName(), $mapel[array_rand($mapel)], rand(0, 100)));
}

function generateName()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function generateNrp()
{
    $characters = '0123456789';
    $randomString = '';

    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}