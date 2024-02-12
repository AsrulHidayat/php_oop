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
        // [2] mengakses private visibility
        private $jenis = "Pencuci Mulut";
            // [2.1] Cara agar bisa diakses
                //  cara agar bisa diakses dengan menggunakan method yang harus memiliki tipe public : contohnya "public function".
        public function getJenis(){
                // return memiliki fungsi untuk mengembalikan nilai dalam hal ini di sini yaitu nilai dari "jenis"
            return $this->jenis;
        }
    }

    $makanan1 = new Makanan();
    echo $makanan1->nama;
    // [2] mengakses private visibility
        // Nah, dibagian ini akan mengalami eror berbeda dengan public code sebelum ditambahkan yang ini. Karena pada dasarnya private itu hanya bisa diakses oleh class tersebut. Kode di bawah sendiri adalah kode yang ada di luar class.
    echo "<br/>";
    // [2] mengakses private visibility
    // echo $makanan1->jenis;
        // [2.1] Cara agar bisa diakses
                // Nah, untuk mengaksesnya sendiri agar bisa berjalan kita tambahkan didepannya kata "get" untuk mendapatkan nilai dari properti jenis.
    echo $makanan1->getJenis();


    ?>