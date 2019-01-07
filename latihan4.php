<?php 
    $nama = "Firdausa"; 
    $kelas = "XIRPL2";
    function tampil_nama() {  
        global $nama;  
        echo "Nama Saya : ".$nama; 
    } 
    function tampil_kelas(){
        global $kelas;  
        echo "<br>";
        echo "Kelas saya ".$kelas;
    }
    tampil_nama(); 
    tampil_kelas();
?> 