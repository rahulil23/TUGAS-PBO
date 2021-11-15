<!-- Nama   : Muhammad Rahulil -->
<!-- NIM    : 20051397043 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 5 -->

<?php

class Pegawai {
    public $nama, $gaji;

    public function __construct($nama, $gaji){
        $this->nama = $nama;
        $this->gaji = $gaji;
    }

    public function infoGaji(){
        return $this->gaji;
    }
}

class Manajer extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gaji, $tunjangan){
        $this->tunjangan = $tunjangan;
        parent::__construct($nama,$gaji);
    }

    public function infoGaji(){
        return parent::infoGaji();
    }

    public function infoTunjangan(){
        return $this->tunjangan;
    }
}

class Programmer extends Pegawai {
    private $bonus;

    public function __construct($nama, $gaji, $bonus){
        $this->bonus = $bonus;
        parent::__construct($nama, $gaji);
    }

    public function infoGaji(){
        return parent::infoGaji();
    }

    public function infoBonus(){
        return $this->bonus;
    }
}

$manajer = new Manajer('Megawati', 30000000, 7000000);
$programmer = new Programmer('widodo', 20000000, 4000000);