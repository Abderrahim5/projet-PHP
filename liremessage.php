<?php

echo "<br> Liste des messages<br>";
    echo " <table border='5' bgcolor='#7fff00'>";
    echo "<tr>";
    echo "<td>ID </td>";
    echo "<td>message </td>";
    echo "<td>date </td>";
    echo "</tr>";
    $y = 0;

$bdd = new PDO('mysql:host=localhost;dbname=phpprojet;charset=utf8', 'root', '');
$rep = $bdd->query('SELECT ID,Message,Dt FROM mmm');

while ($do = $rep->fetch()) {
    $tab0[$y] = $do['ID'];
    $tab10[$y] = $do['Message'];
    $tab11[$y] = $do['Dt'];
    $y++;
}

    for ($j = 0; $j < count($tab10); $j++) {
        echo "<tr>";
        echo "<td>$tab0[$j] </td>   ";
        echo "<td>$tab10[$j] </td>   ";
        echo "<td>$tab11[$j] </td>   ";
        echo "</tr>";
    }
    echo "</table>";


?>
<html>
<head>

</head>
<body>
<form action="add.php" method="post" style="background-color: #0f6674">

    <h3>Modifier la table de Message</h3><br>

    <input class="btn btn-primary" name="vider" type="radio" value="4" > Vidier la table.<br>
    <input class="btn btn-primary" name="vider" type="radio" value="5" > supprimer <br>
    <input name="id" type="text" placeholder="Entrer ID " size="6">
    <input class="btn btn-primary"name="valider" type="submit" value="OK"><br>


</form>
</body>
</html>
