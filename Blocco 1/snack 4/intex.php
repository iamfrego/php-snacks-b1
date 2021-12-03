<?php
$random_array = [];
while (count($random_array) < 15) {
    $random_number = rand(1, 100);
    if (!in_array($random_number, $random_array)) {
        $random_array[] = $random_number;
    }
}
var_dump($random_array);
?>