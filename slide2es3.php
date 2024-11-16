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

echo'<table border="1">';
for($i=1; $i<=$numero; $i++){
    echo "<tr>$i";
    

        for ($j = 1; $j <= 1; $j++) {
             $m = $numero * $numero;
             echo "<td>$m</td>";
     
     for ($n = 1; $n <= 1; $n++) {
        $l = $numero * $numero * $numero;
        echo "<td>$l</td>";
    }
}
    }
    echo "</tr>";
}
    
    ?>


<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>  

</html>