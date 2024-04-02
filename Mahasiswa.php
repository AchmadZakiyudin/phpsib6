<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    // Constructor
    public function __construct($nim, $nama, $kuliah, $matakuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;

        $this->setGrade();
        $this->setPredikat();
        $this->setStatus();
    }

    function setGrade() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    function setPredikat() {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            case 'E':
                $this->predikat = 'Sangat Kurang';
                break;
        }
    }

    private function setStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}

?>