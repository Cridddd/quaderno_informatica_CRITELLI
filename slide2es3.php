<html>


<form method = 'POST'>
<label for="numero">inserisci un numero:</label>
<input type="number" id="numero" name="numero" list="numero-list">
<datalist id="numero-list">
<option value="1">
<option value="2">
<option value="3">
<option value="4">
<option value="5">
<option value="6">
<option value="7">

</datalist>
<input name="submit" type= "submit" value="invia" />
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$numero = $_POST['numero'];

echo "<h2>Tabella dei Quadrati e Cubi fino a $numero</h2>";
echo "<table border=1>";
echo "<tr><td>Numero</td><td>Quadrato</td><td>Cubo</td></tr>";

for ($i = 1; $i <= $numero; $i++) {
    $quadrato = $i * $i;
    $cubo = $i * $i * $i;
    echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
}
}
echo "</table>";
    ?>



<h2>spiegazione codice</h2>
<h3>Inizio il codice creando un form, contenente i numeri da 1 a 7
    poi utilizzando il metodo if($_SERVER['REQUEST_METHOD'] == 'POST'), recupero il nuero inserito dall'utente
    a quel punto creo la tabella. infine creo un ciclo for che mi permette di riempire le celle create dalla tabella con 
    cubi e quadrati fino al numero scelto dall'utente.
</h3>


<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>  

</html>