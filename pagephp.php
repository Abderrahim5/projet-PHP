
<?php
session_start();
$nom1= $_SESSION['nom1'];
$nom2= $_SESSION['nom2'];
$nom3= $_SESSION['nom3'];
$nom4= $_SESSION['nom4'];
$nom5= $_SESSION['nom5'];
$prix1= $_SESSION['prix1'];
$prix2= $_SESSION['prix2'];
$prix3= $_SESSION['prix3'];
$prix4= $_SESSION['prix4'];
$prix5= $_SESSION['prix5'];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $tele=$_POST["tele"];
    $ville=$_POST["ville"];
    $adresse=$_POST["adresse"];
    $nom1=$_POST["nomm"];
    $prix=$_POST['prixx'];
$id=13;


$dat=date("d/m/Y");

$bdd=new PDO('mysql:host=localhost;dbname=phpprojet;charset=utf8','root','');

$pre=$bdd->prepare('INSERT INTO client1(Nom,Telephone,Ville,Adresse,NomProduit,PrixProduit,Dato) VALUES(:Nom,:Telephone,:Ville,:Adresse,:NomProduit,:PrixProduit,:Dato)');
$pre->execute(array(

  'Nom'=>$nom,
'Telephone'=>$tele,
    'Ville'=>$ville,
    'Adresse'=>$adresse,
    'NomProduit'=>$nom1,
    'PrixProduit'=>$prix,
    'Dato'=>$dat

));













    echo "<h1>votre demmande est bien enregestrer</h1>";


?>