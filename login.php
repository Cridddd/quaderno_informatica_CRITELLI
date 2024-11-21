
<h3>Controllo credentiali</h3>
<?php
$usr=$_POST["username"]; //recupero delle credenziali inserite dall'utente 
$pwd=$_POST["password"];
if ($usr != "admin" && $pwd != "passwd"){        //controllo se user e password corrispondono 
?>
<h4>Attenzione! Nome utente o passwd sbagliate.</br>   <!-- Messaggio di errore nel caso non corrispondono-->
Accesso negato </h >
<?php
} else {
echo "<h4>Benvenuto " . $usr . " </h4>";   //se corrispondo permetto l'accesso al'area riservata 
}
?>
</body>

<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>



