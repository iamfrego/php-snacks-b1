<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
    <style>
        .d-flex{
            display: flex;
        }
        .teachers, .pm{
            margin: 1rem;
            padding:4rem;
            color: white;
        }
        .teachers{
            background-color: gray;
        }
        .pm{
            background-color: #26ff00;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="teachers">
            <ul>
                <?php for ($i=0; $i < count($db['teachers']); $i++) { ?>
                    <li><?php echo $db['teachers'][$i]['name'] . ' ' . $db['teachers'][$i]['lastname'] ?></li>
                <?php }; ?>
            </ul>
        </div>
        <div class="pm">
            <ul>
                <?php for ($i=0; $i < count($db['pm']); $i++) { ?>
                    <li><?php echo $db['pm'][$i]['name'] . ' ' . $db['pm'][$i]['lastname'] ?></li>
                <?php }; ?>
            </ul>
        </div>
    </div>
</body>
</html>