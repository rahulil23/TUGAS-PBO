<?php 

class Universitas
{
    private $prodi, $nama, $fakultas;//meber= ptodi admin =fakultas
    public function __construct(Fakultas $fakultas, $nama, Prodi $prodi)
    {
        $this->fakultas = $fakultas;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getUniversitas(){
        return $this->nama . ' dengan fakultas '. $this->fakultas->getNama() . ' beranggotakan '. $this->prodi->getNama();
    }
}

class Fakultas 
{
    private $nama, $anggota, $jumlah;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function setAnggota(prodi $anggota){
        $this->anggota = $anggota;
    }

    public function getAnggota(){
        return $this->anggota;
    }

    public function getFakultas(){
        return 'Fakultas ' . $this->nama . ' memiliki Prodi ' . $this->anggota->getNama();
    }

    public function getNama(){
        return $this->nama;
    }
    public function setJumlah(prodi $nama){
        $this->jumlah = $nama;
    }
    public function getJumlah(){
        return 'Fakultas '. $this->nama . ' memiliki '. $this->jumlah->getNama() . ', dan '.$this->jumlah->getJumlah();
    }
}

class Prodi
{
    private $nama, $jumlah;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
    public function setJumlah(Fakultas $nama){
        $this->jumlah = $nama;
    }
    public function getJumlah(){
        return 'Prodi  '.$this->nama.' merupaka bagian dari fakultas '. $this->jumlah->getNama();
    }
}


// Assosiasi Uni-Directional
echo"contoh Assosiasi Uni-Directional"."<br/>";
$Fakultas2 = new Fakultas('Teknik Informatika');
$prodi2 = new Prodi('Sistem Informasi');
$Fakultas2->setAnggota($prodi2);
echo $Fakultas2->getfakultas();
echo '<br>';
echo '<br>';

// Assosiasi Bi-Directional
echo"contoh Assosiasi Bi-Directional"."<br/>";
$fakultas3 = new Fakultas('Vokasi');
$prodi3 = new Prodi('D4 Manajemen Informatika');
$fakultas3->setAnggota($prodi3);
$fakultas3->setJumlah($prodi3);
$prodi3->setJumlah($fakultas3);
echo $fakultas3->getJumlah();













