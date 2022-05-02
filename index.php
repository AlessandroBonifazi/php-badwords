<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, assumenda!";

$textLenght = strlen($text);

$bannedWord = $_GET['soccia'];

$censoredText = str_replace($bannedWord, '***', $text);

$censoredTextLenght = strlen($censoredText);
?>

<h1>Original Text</h1>
<h3><?php echo($text) ?></h3>
<h4> <?php echo('Text lenght: ' . $textLenght) ?> </h4>

<h1>Censored Text</h1>
<h3><?php  ?></h3>