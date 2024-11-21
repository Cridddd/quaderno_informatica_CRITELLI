
<?php 
echo'<table border="1">'; //creo la tabbella e ci aggiungo un bordo 

for($i=1; $i<11; $i++){   //ciclo for che crea le celle 
    echo "<tr>";
        for ($j = 1; $j <= 10; $j++) { //ciclo for che aggiunge i valori nelle celle 
             $m = $i * $j;             
             echo "<td>$m</td>";  //inserisco i valori moltiplicati nelle celle 
     }
    echo "</tr>";
}
echo"</table>";
?>






<a href="index.html">
<h3>home</h3>
</a>

<a href="slide1.html">
    <h3>selettore esercizio</h3>
</a>


