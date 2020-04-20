<?php
session_start();

$prix=$_POST['prixartecle'];
$nom=$_POST['nomartecle'];
header('location page2.php');

?>


<html>
<head>
    <title>contact</title>
    <title> www.siteweb.ma</title>
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
<body >
<center>
<form name="f2" method="post" action="pagephp.php">
    <fieldset id="fil">
        <h4 > Entrer votre information </h4>
        <table>
            <tr>
                <td> <label for="tex_nom"> nom : </label> </td>
                <td> <input type="text" name= "nom" id="tex_nom" placeholder="votre nom" > </td>
            </tr> <br>
            <br>
            <tr>
                <td> <label for="tele" > Téléphone:</label> </td>
                <td> <input type="number" name ="tele" id="tele" placeholder="votre nemuro de téléphone">  </td>
            </tr> <br>
            <tr>
                <td> <label for="ville"> Votre Ville</label> </td>
                <td>
                    <select name="ville" id="ville">
                        <option value="agadir" selected="selected"> Agadir </option>
                        <option value="tanger" > Tanger </option>
                        <option value="casa"> Casablanca </option>
                        <option value="fes"> Fés </option>
                        <option value="rabat"> Rabat </option>
                        <option value="autre"> Autre </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <label for="text_ville" >votre Adress:</label> </td>
                <td> <input type="text" name ="adresse" id="text_add" placeholder="_">  </td>
            </tr> <br>
            <tr>
                <td> Nom de produit </td>
                <td> <textarea name="nomm" readonly ><?php  echo $nom; ?> </textarea></td>
            </tr> <br>
            <tr>
                <td> Prix de produit </td>
                <td> <input type="text" name="prixx" readonly value=" <?php  echo $prix; ?>" ></td>
            </tr> <br>
            <tr>
                <td> <button class="btn btn-danger" type="reset">Annuler</button></td>
                <td> <button class="btn btn-warning" type="submet" >Envoiyer</button></td>
               
            </tr>


        </table>
    </fieldset>
</form>
</center>
</body>
</html>
