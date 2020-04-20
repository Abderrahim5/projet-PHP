<?php
$id=$_POST['id'];
$ok=$_POST['vider'];
$bdd=new PDO('mysql:host=localhost;dbname=phpprojet;charset=utf8','root','');
$rep=$bdd->query('SELECT ID,Nom,Telephone,Ville,Adresse,NomProduit,PrixProduit,Dato FROM client1');

if ($ok==2) {
    $bdd->query('DELETE FROM `client1`  ');
    echo "la table est bien vider";
}else
if ($ok==1){
    $bdd->query('DELETE FROM `client1` WHERE `client1`.`ID` = '.$id.' ');
    echo "Bien supprimer";
}
$rep1=$bdd->query('SELECT ID,Message,Dt FROM mmm');

if ($ok==4) {
    $bdd->query('DELETE FROM `mmm`  ');

    echo "la table est bien vider";
}else
    if ($ok==5){
        $bdd->query('DELETE FROM `mmm` WHERE `mmm`.`ID` = '.$id.' ');
        echo "Bien supprimer";
    }

?>