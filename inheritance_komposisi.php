<!-- Nama   : Muhammad Rahulil -->
<!-- NIM    : 20051397043 -->
<!-- Kelas  : 2020A -->
<!-- Prodi  : D4 Manajemen Informatika-->
<!-- inheritance komposisi -->
<?php
class orang
    {
     protected $nama;
     protected $umur;
 
    public function getNama()
    {
        return $this->nama;
    }
 
    public function setNama($nama)
    {
         $this->nama = $nama;
    }
 
    private function callToPrivateNamaAndumur()
    {
          return "{$this->nama} is {$this->umur} years old.";
     }
 
    protected function callToProtectedNamaAndumur()
    {
        return "{$this->nama} is {$this->umur} years old.";
    }
}
 
class karyawan extends orang
{
  private $pekerjaan;
  private $gaji;
 
    public function getUmur()
     {
         return $this->umur;
     }
 
    public function setUmur($umur)
     {
         $this->umur = $umur;
     }
 
    public function getPekerjaan()
    {
        return $this->pekerjaan;
    }
 
    public function setpekerjaan($pekerjaan)
    {
        $this->pekerjaan = $pekerjaan;
    }
 
     public function getGaji()
    {
        return $this->gaji;
    }
    
    public function setGaji($gaji)
    {
        $this->gaji = $gaji;
    }
 
    public function getNamaAndUmur()
    {
        return $this->callToProtectedNamaAndUmur();
    }
}
 
$karyawan = new karyawan();
 
$karyawan->setNama('Bob Smith');
$karyawan->setUmur('30');
$karyawan->setPekerjaan('Software Engineer');
$karyawan->setGaji('30K');

//menampilkan isi property
echo "Nama      :".$karyawan->getNama()."<br/>"; // prints 'Bob Smith'
echo "Umur      :".$karyawan->getUmur()."<br/>"; // prints '30'
echo "Pekerjaan :".$karyawan->getPekerjaan()."<br/>"; // prints 'Software Engineer'
echo "Gaji      :".$karyawan->getGaji()."<br/>"; // prints '30K'
echo $karyawan->getNamaAndUmur(); // prints 'Bob Smith is 30 years old.'
//echo $employee->callToPrivateNamaAndUmur(); // produces 'Fatal Error'
?>
