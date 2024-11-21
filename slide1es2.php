

<?php
$nome="paolo";  //inizializzo la variabile nome 
$today = new DateTime("now", new DateTimeZone('Europe/Rome'));  //inizializzo la variabile today e le assegno l'ora attuale
echo $today->format('H:i:s');  //formato di come viene stampata l'orario
$ora = $today->format('H');  //creo la variabile ora

if ($ora >= 8 && $ora < 13) {  //3 if che danno il buongiorno, buonasera o buonanotte in base all'ora
    echo "\nBuongiorno $nome, sono le ore $ora";
} elseif ($ora >= 13 && $ora < 21) {
    echo "\nBuonasera $nome, sono le ore $ora";
} elseif ($ora >= 21 || $ora < 7) {
    echo "\nBuonanotte $nome, sono le ore $ora";
}

?>








<a href="index.html">
<h3>home</h3>
</a>

<a href="slide1.html">
    <h3>selettore esercizio</h3>
</a>
