<?php

// var_dump($_POST) 

$bad_word = $_POST['bad_word'];
$text = $_POST['message'];

$array_text = explode(' ', $text); //words

$censured_message = str_replace($bad_word, '***', $text); //message with ***
$censured_message_words = array_diff($array_text, [$bad_word]); //censured words

$bad_word_counter = 0;

for ($i = 0; $i <= count($array_text); $i++) {
    if ($array_text[$i] === $bad_word){
        $bad_word_counter++;
    };
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censured</title>
    <style>
        h2{
            color: red;
            font-size: 40px;
        }
        .text{
            color: blue;
        }
    </style>
</head>
<body>
    <main>
        <h1>La parola da censurare è: </h1>
        <h2><?php echo $bad_word; ?></h2>
        <p  class="text">
        <?php echo $text; ?>
        </p>
        <p>
            Il tuo testo è lungo <strong><?php echo count($array_text); ?></strong> parole.
        </p>
        <h3>Ecco il tuo testo censurato: </h3>
        <p  class="text">
        <?php echo $censured_message; ?>
        </p>
        <p>
            Il tuo testo senza parole censurate è lungo <strong><?php echo count($censured_message_words); ?></strong> parole.
        </p>

        <p>
            Nel tuo testo sono avvenute <strong><?php echo $bad_word_counter ?></strong> sostituzioni.
        </p>
    </main>
</body>
</html>