<?php
    // VISIBILITY / Access Modifier (MATERI 4)
        // Ialah kemampuan untuk mengakses properti method di dalam suatu class. 
            // Jenis-jenis visibility
            // public, protected, private
            // public : bisa diakses oleh semua orang
            // protected : bisa diakses oleh orang yang memiliki class ini
            // private : bisa diakses oleh orang yang memiliki class ini yang sama dengan nama class ini (child class)
                






    // // INHERITANCE-PEWARISAN (MATERII 3)

    // // Contoh Inheritance pada manusia
    //     // Inhertiteance => pewarisan/warisan
    //     // Pewarisan => Sesuatu yang diturunkan oleh orang tua (parent) ke anaknya (children)
    //     // Apa saja contoh yang diwariskan?
    //     // Warna mata, Warna rambut, bentuk rambut, dll

    // // Contoh pada penerapannya di program PHP
    //     // Apa saja contoh yang diwariskan PADA CLASS
        
    //     // property dan method
    //     // jadi, child class bisa mempunyai property dan method yang dimiliki parentnya ditambah bisa juga punya property dan method sendiri.

    // // // [1] Membuat inherited class
    // // require "model/Guru.php";
    // // $guru1 = new Guru("Budi", 39);
    // // var_dump($guru1);

    // // [2] Mengakses properti dan method dari class children
    // require "model/Guru.php";
    // $guru1 = new Guru("Budi", 39);
    // // echo $guru1->nama;  // [2.1]
    // // $guru1->sayhello(); // [2.2]

    // // [3] Method di children class
    //     // children class bisa mempunya method sendiri
    // $guru1->aktifitasGuru(); 
    
    // // [4] Override Method
    //         // contoh sayhello yang dipanggil dari parentnya yaitu orang dan kita yang membuat childrennya maka saecara otomatis yang terbaca ialah yang ada di kelas guru atau childrennya.

    // echo "<br/>";
    // $guru1->sayhello(); 



    
    






    // // CONSTRUCTOR & DESTRUCTOR (MATERI 2)
    // require "Model/Robot.php";

    // // Constructor : Dijalankan ketika objek dibuat
    // // Perhatikan dengan materi 1, jauh berbeda dalam pemanggilannya. Yang mana ini lebih singkat
    // $robot1 = new Robot("Optimus Prime","blue-white-red", "large");
    // var_dump($robot1);

    // echo "<br><br>";
    // // unset : dihancurkan. 
    // // ketika memakai unset program akan  terpotong di bagian atas atau menghancurkan objek diatas sehingga destruct akan berjalan kemudian dilanjutkan dengan kode program di bawah penempatana unset.
    // unset($robot1);

    // echo "<br><br>";
    // echo "script sudah selesai";
    // echo "<br>";










// //CLASS & OBJECT (MATERI 1)
//     // memanggil class
//     require "Model/Robot.php";
//     // membuat objek
//     $robot1 = new Robot();
//         // ini adalah cara yang baik untuk mengisi object/nilai dalam property

//         // cara 1
//         // $robot1->name = "Optimus prime";
//         // $robot1->color = "blue-white-red";
//         // $robot1->size = "large";

//         // cara 2
//         $robot1->set_name("Optimus prime");
//         $robot1->set_color("blue-white-red");
//         $robot1->set_size("large");

//     $robot2 = new Robot();
//         // cara 1
//         // $robot2->name = "Bumblebee";
//         // $robot2->color = "yellow";
//         // $robot2->size = "small";
//         // cara 2
//         $robot2->set_name("Bumblebee");
//         $robot2->set_color("yellow");
//         $robot2->set_size("small");

//     // melihat objek di halaman
//     var_dump($robot1);
//     echo"<br>";
//     var_dump($robot2);



?>