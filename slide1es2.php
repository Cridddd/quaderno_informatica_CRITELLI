<html>

<?php
$nome="paolo";
$today = new DateTime("now", new DateTimeZone('Europe/Rome'));
echo $today->format('H:i:s');
$ora = $today->format('H');

if ($ora >= 8 && $ora < 13) {
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

<a href="slide1">
    <h3>selettore esercizio</h3>
</a>
</html>