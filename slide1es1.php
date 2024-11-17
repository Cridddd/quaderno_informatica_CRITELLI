<html>
<?php 
echo'<table border="1">';

for($i=1; $i<11; $i++){
    echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
             $m = $i * $j;
             echo "<td>$m</td>";
     }
    echo "</tr>";
}
echo"</table>";
?>


<h2>Spiegazione codice </h2>
<h3>in questo programma si crea una tavola pitagorica.
per farlo viene inizializzato un ciclo for, con al suo interno una riga di codice che permette di generare celle in colonna.
Questo ciclo for contiene al suo interno un'altro ciclo for che genera le celle della tabella in riga.
per effettuare il calcolo dei numeri viene moltiplicato al contatore del primo ciclo for, il contatore del secondo ciclo for.    
</h3>




<a href="index.html">
<h3>home</h3>
</a>

<a href="slide1.html">
    <h3>selettore esercizio</h3>
</a>


</html>