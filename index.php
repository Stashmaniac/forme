<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
</head>

<body>

<h1>Forme</h1>

<p>


<form>
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    <input type="submit" value="Pooper"><br>
</form>

<?php
echo("Ti si " . $_GET["ime"] . " " . $_GET["prezime"]);
?>



</p>


</body>
</html>
