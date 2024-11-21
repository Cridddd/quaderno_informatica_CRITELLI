
<h1>Stampa di triangoli con asterischi in php</h1>
<?php




// creazione triangolo 1
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

// creazione triangolo 2
for ($i = 7; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

//creazione triangolo 2 specchiato
for ($i = 7; $i >= 1; $i--) {
    for ($j = 1; $j <= 7- $i; $j++) {
        echo '&nbsp;&nbsp;';
    }
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

// creazione triangolo 1 specchiato
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= 7 - $i; $j++) {
        echo '&nbsp;&nbsp;';
    }
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}




?>





<a href="index.html">
<h3>home</h3>
</a>

<a href="slide1.html">
    <h3>selettore esercizio</h3>
</a>
