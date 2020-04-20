<?php
session_start();


if(isset($_POST['user']) && isset($_POST['pass']))
    if($_POST['user']=="Abderrahim" && $_POST['pass']=="talbi@php") {
        $nom1 = $_POST['user'];
        $pass1 = $_POST['pass'];
        echo 'Bonjour ';
        echo $_POST['user'];
        $_SESSION['acces'] = "oui";
        $_SESSION['nom'] = $_POST['user'];


        echo "<br>";

            echo " <table border='5' bgcolor='yellow'>";
            echo "<tr>";
            echo "<td>ID </td>";
            echo "<td>Nom </td>";
            echo "<td>Telephon </td>";
            echo "<td>Ville </td>";
            echo "<td>Adresse </td>";
            echo "<td>Date</td>";
            echo "<td>PRIX (dh)</td>";
            echo "<td>Nom d'article </td>";
            echo "</tr>";
            $i = 0;
            $bdd = new PDO('mysql:host=localhost;dbname=phpprojet;charset=utf8', 'root', '');
            $rep = $bdd->query('SELECT ID,Nom,Telephone,Ville,Adresse,NomProduit,PrixProduit,Dato FROM client1');

            while ($do = $rep->fetch()) {
                $tab0[$i] = $do['ID'];
                $tab1[$i] = $do['Nom'];
                $tab3[$i] = $do['Telephone'];
                $tab4[$i] = $do['Ville'];
                $tab5[$i] = $do['Adresse'];
                $tab6[$i] = $do['Dato'];
                $tab7[$i] = $do['PrixProduit'];
                $tab8[$i] = $do['NomProduit'];
                $i++;
            }

            for ($j = 0; $j < count($tab1); $j++) {
                echo "<tr>";
                echo "<td>$tab0[$j] </td>   ";
                echo "<td>$tab1[$j] </td>   ";
                echo "<td>$tab3[$j] </td>   ";
                echo "<td>$tab4[$j] </td>   ";
                echo "<td>$tab5[$j] </td>   ";
                echo "<td>$tab6[$j] </td>   ";
                echo "<td>$tab7[$j] </td>   ";
                echo "<td>$tab8[$j] </td>   ";
                echo "</tr>";


        }
        echo "</table>";


        echo '
<html>
<head>

 <style> @import url(assets/css/filecss.css)</style>
    <script> @import url(assets/js/filejs.js)</script>
   <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/business-casual.min.css" rel="stylesheet">
</head>
<body>
<hr size="5" color="red">

<form action="add.php" method="post" style="background-color: #0f6674">

<h3>Modifier la table de Client</h3><br>

<input class="btn btn-primary" name="vider" type="radio" value="2" > Vidier la table.<br>
<input class="btn btn-primary" name="vider" type="radio" value="1" > supprimer <br>
<input name="id" type="text" placeholder="Entrer ID " size="6">
<input class="btn btn-primary"name="valider" type="submit" value="OK"><br>


</form>
<a href="liremessage.php"><input class="btn btn-primary"name="" type="button" value="Lire les messages" ></a>




<hr size="5" color="red">
<form action="ajoutphp.php" method="post" style="background-color:darksalmon">


    <h3> Ajouter les Nouvelles produits</h3>
    
    <table>
        <tr>
            <td> Image :</td>
            <td> Prix</td>
        </tr>
        <tr>
            <td><input type="file" name="img"> </td>
            <td><input type="text" name="prix"> </td>
        </tr>
        <tr>
            <td><input type="reset" value="Annuler"> </td>
            <td><input value="Valider" type="submit"> </td>
        </tr>
    </table>
</body>
</html>
';

    } else echo "Mot de passe invalide!!!";

?>