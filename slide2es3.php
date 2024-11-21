<html>


<form method = 'POST'>  <!-- passo i dati al server-->
<label for="numero">inserisci un numero:</label>  <!-- creo il selettore di numeri -->
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
<input name="submit" type= "submit" value="invia" />  <!-- tasto submit -->
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){ //recupero i dati inseriti

$numero = $_POST['numero'];  //assegno a una variabile il numero inserito 

echo "<h2>Tabella dei Quadrati e Cubi fino a $numero</h2>";
echo "<table border=1>";  //creo la tabella 
echo "<tr><td>Numero</td><td>Quadrato</td><td>Cubo</td></tr>";

for ($i = 1; $i <= $numero; $i++) {  //for per creare e riempire le celle
    $quadrato = $i * $i;
    $cubo = $i * $i * $i;
    echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
}
}
echo "</table>";
    ?>





<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>  

</html>