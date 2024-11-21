<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  //prelevo dal form i dati inseriti
 

    //assegno a delle variabili i dati inseriti 
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data_nascita = $_POST['data_nascita'];
    $codice_fiscale = $_POST['codice_fiscale'];
    $email = $_POST['email'];
    $cellulare =$_POST['cellulare'];
    $via = $_POST['via'];
    $cap = $_POST['cap'];
    $comune = $_POST['comune'];
    $provincia = $_POST['provincia'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

 //stampo i dati inseriti 
    echo "<h1>Dati inseriti:</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Cognome: $cognome</p>";
    echo "<p>Data di nascita: $data_nascita</p>";
    echo "<p>Codice Fiscale: $codice_fiscale</p>";
    echo "<p>Email:  $email</p>";
    echo "<p>Cellulare: $cellulare</p>";
    echo "<p>Indirizzo: $via, $cap, $comune, $provincia</p>";
    echo "<p>Nickname: $nickname</p>";
    echo "<p>Password: $password</p>";  
} else {
    echo "<p>Nessun dato inviato.</p>";
}
?>
