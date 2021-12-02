
<?php
$paragraph =
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequuntur voluptas ducimus, enim natus ipsam ea hic impedit ipsa, ratione similique rerum, neque eaque illum repellendus mollitia maiores iure minima. Optio quaerat corporis vero! Magnam provident illo corrupti fugit accusamus consequatur ipsum pariatur architecto minus ex! Inventore eius voluptas aspernatur magni, laboriosam officia excepturi magnam aut ducimus iste atque voluptatem. Numquam ut, soluta saepe ab aut expedita earum pariatur in vel assumenda iste minima eveniet atque esse, cumque tempora iusto beatae. Perspiciatis eaque numquam sapiente laudantium dolorem ipsum cumque quasi. At velit aliquam quia tempore. Cum eaque mollitia praesentium odio.';

$explode_paragraphs = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <h1>Original Paragraph:</h1>
    <p>
        <?= $paragraph ?>
    </p>

    <h1>New Paragraphs:</h1>
    <p>
        <?php for ($i = 0; $i < count($explode_paragraphs); $i++) {
            $element = $explode_paragraphs[$i]; ?>
           <p> <?= $element ?></p>
    <?php
        } ?>
    </p>
</body>
</html>

