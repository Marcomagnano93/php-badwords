<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Inserisci qui i tuoi dati:</h1>
        <form action="./server.php" method="post">
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Inserisci qui il tuo nome">
            </div>
            <div>
                <label for="surname">Cognome:</label>
                <input type="text" name="surname" id="surname" placeholder="Inserisci qui il tuo cognome">
            </div>
            <div>
                <label for="message">Messagio:</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Inserisci qui il tuo messaggio..."></textarea>
            </div>
        </form>
    </main>
</body>
</html>