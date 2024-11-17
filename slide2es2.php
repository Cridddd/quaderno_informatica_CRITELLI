<html>
<body>


<h3>Accesso a pagina riservata</h3>

<form method = 'POST'>



<label for="username" ><b>Username</b></label>
<input type="text" name="username" placeholder="Inserisci il nome utente" /><br />


<label for="password"><b>Password</b></label>
<input type="password" name="password" placeholder="Inserisci la password" /><br />



<input name="submit" type= "submit" value="invia" />


</form>


</body>







<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Il form è stato inviato
$nome = $_POST['username'];
$password = $_POST['password'];
// Verifica se il nome e la password corrispondono a quelli presenti nel database
if ($nome=="admin" && $password=='123') {
// Le credenziali sono corrette, autentica l'utente
echo "<h4>Benvenuto $nome <br/>Nell'area riservata del sito!</h4>";
} else {
// Le credenziali sono errate, mostra un messaggio di errore
echo "<h4>Attenzione! Nome utente o password sbagliate</h4>";
}
}
?>

<h2>Spiegazione codice</h2>
<h3>Questo esercizio è praticamente uguale a quello precedente. 
L'unica cosa che cambia è che la verifica dei dati inserita viene fatta nello stesso file, tramite l'utilizzo del comando
if ($_SERVER['REQUEST_METHOD'] == 'POST')  
</h3>


<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>

</html>