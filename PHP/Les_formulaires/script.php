<?php
$prenom = $_POST['prenom'];  
$nom = $_POST['nom'];  
$sexe = $_POST['sexe'];  
$ddn = $_POST['date de naissance'];  
$codepostal = $_POST['Codepostal'];   
$email = $_POST['email'];  
$adresse = $_POST['adresse'];


if (empty($_POST["prenom"]) 
{       
    header("Location:contact.php?erreur=prenom");
    exit;
} 

if (empty($_POST["nom"]) 
{
    header("Location:contact.php?erreur=nom");
    exit;
} 

if (empty($_POST["sexe"]) 
{       
    header("Location:contact.php?erreur=sexe");
    exit;
} 

if (empty($_POST["date de naissance"]) 
{
    header("Location:contact.php?erreur=date de naissance");
    exit;
} 

if (empty($_POST["codepostal"]) 
{       
    header("Location:contact.php?erreur=codepostal");
    exit;
} 

if (empty($_POST["email"]) 
{
    header("Location:contact.php?erreur=email");
    exit;
} 
if (empty($_POST["adresse"]) 
{       
    header("Location:contact.php?erreur=adresse");
    exit;
} 
else 
{
    echo "Formulaire envoyé";
}

?>


    