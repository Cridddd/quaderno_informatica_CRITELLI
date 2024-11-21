



<h3>Accesso a pagina riservata</h3>

<!-- creazione dei form per il login-->

<form action="login.php" method="post">

<!-- inizializzo il form dove andrà inserito l'username -->
<label for="username" ><b>Username</b></label>
<input type="text" name="username" placeholder="Inserisci il nome utente" /><br />

<!-- inizializzo il form dove andrà inserita la password-->
<label for="password"><b>Password</b></label>
<input type="password" name="password" placeholder="Inserisci la password" /><br />


<!-- bottone per inviare i dati -->
<input name="submit" type= "submit" value="invia" />

</form>






<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //recupero credenziali dal form

$nome = $_POST['username'];
$password = $_POST['password'];

if ($nome=="admin" && $password=='123') {  //controllo credenziali

echo "<h4>Benvenuto $nome Nell'area riservata del sito!</h4>";  //messaggio di benvenuto
} else {

echo "<h4>Attenzione! Nome utente o password sbagliate</h4>";  //messaggio di errore
}
}
?>


<h2>CREDENZIALI: username: admin password:123</h2>




<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>

</html>