<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(60deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    // echo $numbers[1][1];
    ?>

    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $number1) : ?>
            <!-- <div class="kotak">5</div> -->
            <div class="kotak"><?= $number1 ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>

</html>