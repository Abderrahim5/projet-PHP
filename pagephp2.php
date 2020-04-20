<?php
$text=$_POST["text"];
$dat1=date("d/m/Y");
$bdd=new PDO('mysql:host=localhost;dbname=phpprojet;charset=utf8','root','');

$pre=$bdd->prepare('INSERT INTO mmm(Message,Dt) VALUES(:Message,:Dt)');
$pre->execute(array(

    'Message'=>$text,
    'Dt'=>$dat1

));
echo " <h1> VOTRE MESSAGE EST BIEN ENVOIYER MERCI </h1>";



?>