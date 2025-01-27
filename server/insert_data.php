<?php
// Connessione al database (modifica con i tuoi dati)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pubblicazioni"; // Sostituisci con il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variabili per gestire l'inserimento
$TITOLO = $NOME = $DATA = $CATEGORIA = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati tramite POST
    $TITOLO = $_POST['titolo'];
    $NOME = $_POST['nome'];
    $DATA = $_POST['data'];
    $CATEGORIA = $_POST['categoria'];

    // Query SQL preparata
    $stmt = $conn->prepare("INSERT INTO pubblicazioni (titolo, nome, `data`, categoria) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $TITOLO, $NOME, $DATA, $CATEGORIA);

    // Esegui la query
    if ($stmt->execute()) {
        echo "Nuova pubblicazione inserita con successo!";
    } else {
        echo "Errore: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci la pubblicazione</title>
</head>
<body>
    <h2>Inserisci una nuova pubblicazione </h2>
    <!-- Modulo per inserire i dati -->
    <form method="POST" action="">
        <label for="titolo">titolo:</label>
        <input type="text" id="titolo" name="titolo" required><br><br>

        <label for="nome">autore:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="data">data di pubblicazione:</label>
        <input type="number" id="data" name="data" required><br><br>

        <label for="categoria">categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <input type="submit" value="Inserisci pubblicazione ">
    </form>


    <p>Clicca sul link qui sotto per andare alla home page.</p>
<a href="index.php">Home</a>

</body>
</html>