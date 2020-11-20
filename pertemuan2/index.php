<?php
// ini komentar
// ini juga komentar (pada python sama kaya #)
/* 
ini komentar untuk banyak baris (pada python sama kaya ***)
ini juga komentar
*/

/*
block baris yang ingin di komentar lalu tekan crl + /
untuk mengomentari banyak baris 
*/

//  Pertemuan 2 - PHP Dasar
// Sintaks PHP

/*
- Standar Output
echo, print (mencetak rulisan, isi variabel dan lain sebagainya)
print_r (mencetak isi array)
var_dump (melihat isi dari variabel, dipakai saat debugging > mencari kesalahan dimana)
print_r dan var_dumphanya digunakan saat tahap development

*/

//echo "test"; bisa " atau '
//print "test 1";
// print_r("test 2");
//var_dump("test 3"); //string(6) "test 3" menampilkan type data
// dan ukurannya

//echo 123; //tidak perlu tan kutip untuk int
//echo "Jum'at" penggunaan " dan '

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
?>

<!--
Penulisan php di dalam html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, Selamat datang <?php //echo "test"; 
                                ?> </h1>
    <p><?php //echo "ini adalah paragraf"; 
        ?></p>
    // contoh penulisan php di dalam html
</body>

</html>
-->
<!-- 
Penulisan html di dalam php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php 
       // echo "<h1>Halo selamat Datang test</h1>"
        // penulisan html di dalam php
    ?>
</body>
</html>
-->
<!--
// Variabel dan tipe data
// variabel
// tidak boleh diawalu dengan angka, tapi boleh mengandung angka
$1nama -> tidak boleh
$nama1 -> boleh
-->
<?php 
$nama = "Denita";
$nama1 = "Elda"

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php //echo 
    //"nama saya $nama"; echo ' dan $nama1'
    //' -> untuk menampilkan variabel di dalamnya (interpolasi)
    ?>
    </h1>
</body>
</html>
-->


<?php 
//Operator
//aritmatika
//+-:*/%
// $x = 89;
// $y = 3;
// echo $x % $y;

// Penggabung string / concatenation / concat
// . 
// $nama_depan = "Denita";
// $nama_belakang = "Kusuma";
// echo $nama_depan ." " . $nama_belakang;

//Assignment (penugasan)
// =, +=, , -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;

$nama = "Denita";
$nama .= " ";
$nama .= "Kusuma";
echo $nama;


?>