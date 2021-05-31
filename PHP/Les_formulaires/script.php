<?php
$nom = $_POST['nom']; 
$prenom = $_POST['prenom'];  
$sexe = $_POST['sexe'];  
$ddn = $_POST['ddn'];  
$codepostal = $_POST['Codepostal'];   
$email = $_POST['email'];  
$adresse = $_POST['adresse'];



if (empty($_POST["nom"]))
{
    header("Location:contact.php?erreur=nom");
    exit;
} 
if (empty($_POST["prenom"]))
{       
    header("Location:contact.php?erreur=prenom");
    exit;
} 


if (empty($_POST["sexe"]))
{       
    header("Location:contact.php?erreur=sexe");
    exit;
} 

if (empty($_POST["ddn"])) 
{
    header("Location:contact.php?erreur=ddn");
    exit;
} 

if (empty($_POST["Codepostal"]))
{       
    header("Location:contact.php?erreur=Codepostal");
    exit;
} 

if (empty($_POST["email"])) 
{
    header("Location:contact.php?erreur=email");
    exit;
} 
if (empty($_POST["adresse"]))
{       
    header("Location:contact.php?erreur=adresse");
    exit;
} 
else 
{
    echo "Formulaire envoyé";
}

?>


    