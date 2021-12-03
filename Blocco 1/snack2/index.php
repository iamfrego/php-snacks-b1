<!-- Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 

GET 
FORM
IF
&&
strlen
strpos
is_numeric

-->


<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$eta = $_GET['eta'];

if (strlen($nome) > 3 && is_numeric($eta)) {
    if (strpos($email, '@') && strpos($email, '.')) {
        $result = 'Accesso riuscito';
    } else {
        $result = 'Accesso negato';
    }
} else {
    $result = 'Accesso negato';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks2</title>
</head>
<body>
    <form action="./index.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="eta">Età</label>
        <input type="text" name="eta" id="età">
        <input type="submit" value="Login">
    </form>

    <h1>Risultato: <?php echo $result; ?></h1>
</body>
</html>