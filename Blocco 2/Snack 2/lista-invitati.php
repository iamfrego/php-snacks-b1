<?php
#$risultato = $_GET['val1'] + $_GET['val2'];
#echo "$risultato"; 
$people = array(0 => 'Mario', 1 => 'Fabio', 2 => 'Luigi', 3 => 'Pierpaolo');

for ($i=0; $i < count($people) ; $i++) { 
    if( $people[$i] === $_GET['name']){
        echo "Benvenuto";
    }else{
        echo "Vattene";
    }
}

?>