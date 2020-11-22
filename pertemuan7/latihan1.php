<?php
// Variabel Scope / lingkup variabel
$x = 10;

function tampilx()
{
    global $x; //agar var x di luar funct dapat ditampilkan
    echo $x;
}

//tampilx();

// superglobal
// variabel global milik php
// merupakan array associative
//var_dump($_SERVER);
//echo $_SERVER["SERVER_NAME"];

$students = [
    [
        "nim" => "175090307111008",
        "nama" => "Muhammad Faliq Adlan",
        "email" => "faliq67@gmail.com",
        "jurusan" => "Fisika",
        "gambar" => "lat_1.jpg"
    ],
    [
        "nama" => "Muhammad Faliq Adlan_1",
        "nim" => "175090307111008_1",
        "email" => "faliq67@gmail.com_1",
        "jurusan" => "Fisika_1",
        "gambar" => "lat_2.jpg"
    ]
];

//$_GET
// $_GET["nama"] = "Muhammad Faliq Adlan";
// $_GET["nim"] = "175090307111008";
//var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li><img src="img/<?= $student["gambar"]; ?>"></li>
            <li><?= $student["nama"]; ?></li>
            <li><?= $student["nim"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>