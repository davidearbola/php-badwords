<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM BADWORDS</title>
</head>
<body>
    <form action="elabora.php" method="get">
        <label for="name">Qual è il tuo nome?</label>
        <input type="text" id="name" name="nome" placeholder="Scrivi il tuo nome"><br>
        <label for="name">Qual è il tuo cognome?</label>
        <input type="text" id="surname" name="cognome" placeholder="Scrivi il tuo cognome"><br>
        <textarea name="messaggio" id="message"></textarea>
        <button type="submit">Invia</button>
    </form>
</body>
</html>