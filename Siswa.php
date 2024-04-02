<?php
class Siswa{
//member 1 - valriabel
    public $nama;
    public $nilai;
    public $pelajaran;

//member 2 (spesial method) - constructor
public function __construct($nama, $nilai, $pelajaran){
    $this->nama = $nama;
    $this->nilai = $nilai;
    $this->pelajaran = $pelajaran;
}


//member 3 (method) - function return
    public function gethasil(){
        if ($this->nilai > 55) return "Lulus";
        else return "Tidak Lulus";
    }
}



?>