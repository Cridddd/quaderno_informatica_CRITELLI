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

<a href="index.html">
<h3>home</h3>
</a>

<a href="slide1">
    <h3>selettore esercizio</h3>
</a>


</html>