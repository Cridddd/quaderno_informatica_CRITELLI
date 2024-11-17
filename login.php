<html>
<head>
</head>
<body>
<h3>Controllo credentiali</h3>
<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if ($usr != "admin" && $pwd != "passwd"){
?>
<h4>Attenzione! Nome utente o passwd sbagliate.</br>
Accesso negato </h >
<?php
} else {
echo "<h4>Benvenuto " . $usr . " </h4>";
}
?>
</body>

<a href="index.html">
<h3>home</h3>
</a>

<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>
</html>


