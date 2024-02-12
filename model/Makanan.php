<?php
    // VISIBILITY / Access Modifier (MATERI 4)
        // Ialah kemampuan untuk mengakses properti method di dalam suatu class. 
            // Jenis-jenis visibility
            // public, protected, private
            // public : bisa diakses oleh semua orang
            // protected : bisa diakses oleh orang yang memiliki class ini
            // private : bisa diakses oleh orang yang memiliki class ini yang sama dengan nama class ini (child class)

    // [1] mengakses public visibility
    // contoh :
    class Makanan {
        public $nama = "Semangka";
    }

    $makanan1 = new Makanan();
    echo $makanan1->nama;

    ?>