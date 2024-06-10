<?php 
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $messaggio = $_GET["messaggio"];
    $nomecognome = $nome . " " . $cognome;
    $lenghtmessaggio = strlen($messaggio);

    $badwords = $_GET["badwords"];
    $messCensured = str_replace($badwords, "***", $messaggio);
    $lenghtCensMess = strlen($messCensured);
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
    <p>Messaggio inviato: <?php echo $messCensured ?></p>
    <p>Lunghezza messagio inviato: <?php echo $lenghtmessaggio ?> caratteri</p>
    <p>Lunghezza messaggio: <?php echo $lenghtCensMess ?> caratteri</p>
</body>
</html>