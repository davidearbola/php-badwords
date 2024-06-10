<?php 
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $messaggio = $_GET["messaggio"];
    $nomecognome = $nome . " " . $cognome;
    $lenghtmessaggio = strlen($messaggio)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ELABORA BADWORDS</title>
</head>
<body>
    <h1>Utente: <?php echo $nomecognome ?></h1>
    <p>Messaggio inviato: <?php echo $messaggio ?></p>
    <p>Lunghezza messaggio: <?php echo $lenghtmessaggio ?> caratteri</p>
</body>
</html>