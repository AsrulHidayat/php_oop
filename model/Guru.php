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
    
        // require yaitu menghubungkan atau memanggil class orang ke dalam class ini  
    require "model/Orang.php";

        // Membuat children agar bisa di inheritance
        // untuk di inheritance caranya adalah dengan menambahkan keyword "extends" dan nama class yang dituju 
    class Guru extends Orang {

        // [3] Method di children class
            // children class bisa mempunyai method sendiri
        public function aktifitasGuru() {
            echo "Saya mengajar TIK";
        }
        
        // [4] Override Method
            // contoh sayhello yang dipanggil dari parentnya yaitu orang dan kita yang membuat childrennya maka saecara otomatis yang terbaca ialah yang ada di kelas guru atau childrennya.
        public function sayhello() {
            echo "Ini adalah fungsi override dari class children, bukan class parent.";
        }

        
    }
?>
