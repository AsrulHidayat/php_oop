<?php

    // INHERITANCE-PEWARISAN (MATERII 3)

    // Contoh Inheritance pada manusia
        // Inhertiteance => pewarisan/warisan
        // Pewarisan => Sesuatu yang diturunkan oleh orang tua (parent) ke anaknya (children)
        // Apa saja contoh yang diwariskan?
        // Warna mata, Warna rambut, bentuk rambut, dll

    // Contoh pada penerapannya di program PHP
        // Apa saja contoh yang diwariskan PADA CLASS
        
        // property dan method
        // jadi, child class bisa mempunyai property dan method yang dimiliki parentnya ditambah bisa juga punya property dan method sendiri.

        // [1] Membuat inherited class
    // class Orang {
    //     // penulisan property
    //     public $nama, $umur;

    //     // setiap kalii menuliskan constructor atau intisiasi maka panggil kembali property yang ingin dipakai dalam tanda kurung
    //     public function __construct($nama, $umur){
    //         $this->nama = $nama;
    //         $this->umur = $umur;
            
    //     }

    // [2] Mengkases properti dan method dari class children
    class Orang {
        // penulisan property
        public $nama, $umur;

        // setiap kalii menuliskan constructor atau intisiasi maka panggil kembali property yang ingin dipakai dalam tanda kurung
        public function __construct($nama, $umur){
            $this->nama = $nama;
            $this->umur = $umur;
        }

        public function sayhello() {
            echo "halo, nama saya adalah {$this->nama} dan umur saya {$this->umur} tahun";
        }



    }

?>