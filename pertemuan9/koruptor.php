<?php
    include_once 'koruptorclass.php';
    /*
    //Cara Biasa
    $johnyplate = new koruptor();
    $setyanovanto = new koruptor();
    $anasurbaningrum = new koruptor();
    
    
    $anasurbaningrum -> masuk_nama('Anas Urbaningrum');
    $johnyplate -> masuk_nama('Johny G Plate');
    $setyanovanto -> masuk_nama('Setya Novanto');
    */
    
    // Constructor
    $johnyplate = new koruptor('Johny G Plate');
    $setyanovanto = new koruptor('Setya Novanto');
    $anasurbaningrum = new koruptor('Anas Urbaningrum');

    echo $johnyplate->ambil_nama();
    echo "<br>";
    echo $anasurbaningrum->ambil_nama();
    echo "<br>";
    echo $setyanovanto->ambil_nama();
?>