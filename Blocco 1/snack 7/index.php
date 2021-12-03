<?php
$students = [
    [
        'name' => 'Arrigo',
        'lastname' => 'Leontina',
        'grades' => [12, 23, 23, 30, 20],
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Antoni',
        'grades' => [12, 30, 23, 18, 20],
    ],
    [
        'name' => 'Osvaldo',
        'lastname' => 'Luigia',
        'grades' => [12, 29, 23, 30, 19],
    ],
    [
        'name' => 'Francesco',
        'lastname' => 'Gianpiero',
        'grades' => [12, 20, 23, 30, 30],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>

<body>
    <h1>Classe:</h1>
    <?php for ($i = 0; $i < count($students); $i++) { ?>
    <h3>
        <?= $students[$i]['name'] . ' ' . $students[$i]['lastname'] ?>
    </h3>
    <p>Media voti
        <strong>
            <?= round(array_sum($students[$i]['grades']) /
                    count($students[$i]['grades']), 2) ?>
        </strong>
    </p>
    <br>
    <?php }; ?>
</body>

</html>