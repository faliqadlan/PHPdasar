<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for ($i = 0; $i < 5; $i++) {
//     echo "$i Hello world! <br>"; //
// }

// $i = 0;
// while ($i < 5) {
//     echo "$i Hello world! <br>";
// $i++;
// }
// $a = 0 ;
// do {
//     # code...
//     echo " $a Hello World! <br>";
//     $a+=2;
// } while ($a <= 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
<table border="1" cellpadding = "10" cellspacing="0">

    <?php 
    /*
        for ($i=1; $i <= 3 ; $i++) { 
            echo "<tr>"; // <tr> untuk baris
            for ($j=1; $j <=5 ; $j++) { 
               echo "<td>$i,$j</td>"; //<td> untuk kolom
            }
            echo "<tr>";
        }
        */
    ?>
    <?php for( $i =1; $i <= 3; $i++) : ?>
    <tr> 
        <?php for ($j=1; $j <=5 ; $j++) : ?>
            <td><?="$i,$j" ?></td>
        <?php endfor ?>
    </tr>
    <?php endfor ?>
</table>

</body>
</html>