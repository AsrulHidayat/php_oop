<?php
    // CONSTRUCTOR & DESTRUCTOR (MATERI 2)
    // Constructor : Dijalankan ketika objek dibuat
    class Robot {
        public $name;
        public $color;
        public $size;

        // // [1] Testing 
        // // function __construct : otomatis file function __construct dijalankan terlebih dahulu ketika objek dibuat
        // function __construct() {
        //     echo "fungsi construct sedang dijalankan";
        // }
        // function test() {
        //     echo "ini adalah function test";
        // }

        // Property diisi ke dalam construct, dengan kata lain ketika objek dibuat otomatis property akan terbuat sendiri, sehingga kita tak harus memanggil lagi nama objek di dalam property tersebut berulang kali.
        function __construct($name, $color, $size) {
            $this->name = $name;
            $this->color = $color;
            $this->size = $size;
        }

    // Destructor : Dijalankan ketika objek telah selesai dikerjakan semua 
        function __destruct() {
            echo "ini adalah isi dari function destruct";
        }
    }






// // CLASS & OBJECT (MATERI 1)
// // Format penggunaan class dibiasakan memiliki nama folder dengan awalan huruf Kapital
//     // membuat class
//     class Robot {
//         // membuat property
//             // public $name = "Optimus prime";
//             // public $color = "blue-white-red";
//             // public $size = "large";
//         // cara diatas kurang cocok untuk digunakan karena semua object di dalam property memiliki nilai yang sama

//             public $name;
//             public $color;
//             public $size;

//             //cara 2
//             //fyi : function disini termasuk dalam public. beberapa tipe lain yaitu, public, private, dan protected
//             function set_name($name) {
//                 $this->name = $name;
//             }
//             function set_color($color) {
//                 $this->color = $color;
//             }
//             function set_size($size) {
//                 $this->size = $size;
//             }
//     }

?>