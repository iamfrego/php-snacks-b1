

<?php

$match = [
    [
    'casa' => 'Warriors',
    'trasferta' => 'Clippers',
    'pt_casa' => 95,
    'pt_trasferta' => 100,
    ],
    [
    'casa' => 'Lakers',
    'trasferta' => 'Bulls',
    'pt_casa' => 120,
    'pt_trasferta' => 100,
    ],
    [
    'casa' => 'Pelicans',
    'trasferta' => 'Celtics',
    'pt_casa' => 90,
    'pt_trasferta' => 98,
    ],
];

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <ul>
        <?php 
        for ($i=0; $i < count($match) ; $i++) { 
            echo '<li>' . 
            $match[$i]['casa'] . ' - ' . $match[$i]['trasferta']  
            . ' | ' .  
            $match[$i]['pt_casa']  . ' - ' .  $match[$i]['pt_trasferta'] .
            '</li>';
        }?>
    </ul>
</body>
</html>