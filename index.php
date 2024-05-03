<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandaci un messaggio</title>
</head>
<body>
    <main>
        <h1>Inserisci qui i tuoi dati:</h1>
        <form action="./server.php" method="post">
            <div>
                <label for="bad_word">Parolada censurare:</label>
                <input type="text" name="bad_word" id="bad_word" placeholder="Inserisci qui la parola">
            </div>
            <div>
                <label for="message">Messagio da filtrare:</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Inserisci qui il tuo messaggio..."></textarea>
            </div>
            <button>Invia</button>
        </form>
    </main>
</body>
</html>