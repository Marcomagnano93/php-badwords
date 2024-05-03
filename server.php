<?php

// var_dump($_POST) 

$bad_word = $_POST['bad_word'];
$text = $_POST['message'];

$array_text = explode(' ', $text);

$array_length = count($array_text);

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
    </style>
</head>
<body>
    <main>
        <h1>La parola da censurare è: </h1>
        <h2><?php echo $bad_word; ?></h2>
        <p>
        <?php echo $text; ?>
        </p>
        <p>
            Il tuo testo è lungo <strong><?php echo $array_length; ?></strong> parole.
        </p>
    </main>
</body>
</html>