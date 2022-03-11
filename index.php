<?php
$googleFaq = [
    "Domanda1" => [
        "domanda1" => "risposta1"
    ],
    "Domanda2" => [
        "domanda2" => "risposta2"
    ],
    "Domanda3" => [
        "domanda3" => "risposta3"
    ],
    "Domanda4" => [
        "domanda4" => "risposta4"
    ],
    "Domanda5" => [
        "domanda5" => "risposta5"
    ]
];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione PHP Google Faq</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Privacy e Termini</h1>
        <ul>
            <li>Introduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li>Domande frequenti</li>
        </ul>
    </header>

    <main>
        <div class="container">
            <ul>
                <?php
                    foreach ($googleFaq as $key => $value) {
                        foreach ($value as $key => $item) {
                            echo ("<li>$key</li>");
                            echo ("<li>$item</li>");
                        }
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>