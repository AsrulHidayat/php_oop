<?php
//CLASS & OBJECT (MATERI 1)
    // memanggil class
    require "Model/Robot.php";
    // membuat objek
    $robot1 = new Robot();
        // ini adalah cara yang baik untuk mengisi object/nilai dalam property

        // cara 1
        // $robot1->name = "Optimus prime";
        // $robot1->color = "blue-white-red";
        // $robot1->size = "large";

        // cara 2
        $robot1->set_name("Optimus prime");
        $robot1->set_color("blue-white-red");
        $robot1->set_size("large");

    $robot2 = new Robot();
        // cara 1
        // $robot2->name = "Bumblebee";
        // $robot2->color = "yellow";
        // $robot2->size = "small";
        // cara 2
        $robot2->set_name("Bumblebee");
        $robot2->set_color("yellow");
        $robot2->set_size("small");

    // melihat objek di halaman
    var_dump($robot1);
    echo"<br>";
    var_dump($robot2);
?>