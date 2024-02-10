<?php
// CLASS & OBJECT (MATERI 1)
// Format penggunaan class dibiasakan memiliki nama folder dengan awalan huruf Kapital
    // membuat class
    class Robot {
        // membuat property
            // public $name = "Optimus prime";
            // public $color = "blue-white-red";
            // public $size = "large";
        // cara diatas kurang cocok untuk digunakan karena semua object di dalam property memiliki nilai yang sama

            public $name;
            public $color;
            public $size;

            //cara 2
            //fyi : function disini termasuk dalam public. beberapa tipe lain yaitu, public, private, dan protected
            function set_name($name) {
                $this->name = $name;
            }
            function set_color($color) {
                $this->color = $color;
            }
            function set_size($size) {
                $this->size = $size;
            }

    }
?>