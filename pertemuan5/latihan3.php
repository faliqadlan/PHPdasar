<?php
$students = [
    ["Muhammad Faliq Adlan", "175090307111008", "Fisika", "faliq_adlan@student.ub.ac.id"],
    ["Muhammad Faliq Adlan_1", "175090307111008_1", "Fisika_1", "faliq_adlan_1@student.ub.ac.id"],
    ["Muhammad Faliq Adlan_2", "175090307111008_2", "Fisika_2", "faliq67@gmail.com"]
];

$details = ["Nama", "NIM", "Jurusan", "email"];

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

    <!-- <li>Muhammad Faliq Adlan</li>
        <li>175090307111008</li>
        <li>Fisika</li>
        <li>faliq_adlan@student.ub.ac.id</li> -->
    <?php foreach ($students as $student) : ?>
        <ul>

            <?php for ($i = 0; $i < count($details); $i++) : ?>
                <li>

                    <?= $details[$i] ?>
                    <?= ":" ?>
                    <?= $student[$i]; ?>

                </li>
            <?php endfor ?>

        </ul>
    <?php endforeach ?>

</body>

</html>