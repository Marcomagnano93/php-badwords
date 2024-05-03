<?php

// var_dump($_POST) 

$bad_word = $_POST['bad_word'];
$text = $_POST['message'];

$array_text = explode(' ', $text); //words

$array_length = count($array_text); //number of words

$censured_message = str_replace($bad_word, '***', $text); //message with ***
$censured_message_words = array_diff($array_text, [$bad_word]); //censured words

// var_dump($censured_message_words);
$censured_array_length = count($censured_message_words);
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
            Il tuo testo è lungo <strong><?php echo $array_length; ?></strong> parole.
        </p>
        <p  class="text">
        <?php echo $censured_message; ?>
        </p>
        <p>
            Il tuo testo senza parole censurate è lungo <strong><?php echo $censured_array_length; ?></strong> parole.
        </p>
        
    </main>
</body>
</html>