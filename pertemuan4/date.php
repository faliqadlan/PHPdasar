<?php 
    //  Date
    //  menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y"); //menampilkan hari saat progam dijalankan "l" harinya saja

    //Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    //echo time();

    //echo date("l, d-M-Y", time()+(60*60*24*50));// hari 50 hari ke depan
    
    // mktime
    // membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    //echo date("l d", mktime(0,0,0,7,8,1999));

    // strtotime
    echo date("l", strtotime("8 Jul 1999"))
?>