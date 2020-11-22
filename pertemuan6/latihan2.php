<?php
// $students = [
//     ["Muhammad Faliq Adlan", "175090307111008", "Fisika", "faliq_adlan@student.ub.ac.id"],
//     ["Muhammad Faliq Adlan_1", "175090307111008_1", "Fisika_1", "faliq_adlan_1@student.ub.ac.id"],
//     ["Muhammad Faliq Adlan_2", "175090307111008_2", "Fisika_2", "faliq67@gmail.com"]
// ];

// $details = ["Nama", "NIM", "Jurusan", "email"];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$students = [
    [
        "nim" => "175090307111008",
        "nama" => "Muhammad Faliq Adlan",
        "email" => "faliq67@gmail.com",
        "jurusan" => "Fisika",
        "gambar" => "lat.jpg"
    ],
    [
        "nama" => "Muhammad Faliq Adlan_1",
        "nim" => "175090307111008_1",
        "email" => "faliq67@gmail.com_1",
        "jurusan" => "Fisika_1",
        "gambar" => "lat.jpg"
        // "tugas" => [90, 80, 100]
    ]
];

// echo $students[1]["tugas"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>
                <img src="img/<?= $student["gambar"] ?>">
            </li>
            <li>Nama : <?= $student["nama"]; ?></li>
            <li>nim : <?= $student["nim"]; ?></li>
            <li>jurusan : <?= $student["jurusan"]; ?></li>
            <li>email : <?= $student["email"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>