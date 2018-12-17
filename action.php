<?php
require_once("connexion.php");
// je crée mon objet connexion
$appliDB = new Connexion();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $statut_couple = $_POST['statut'];
    $url_photo = $_POST['url'];
    $date_naissance = date('Y-m-d', strtotime($_POST['datedenaissance']));
    echo "afficher la date de naissance : $date_naissance ";
    $style = $_POST['genreMusical'];
    $hobby = $_POST['Hobbies'];
    $relation = $_POST['relation'];

    if ($date_naissance) {
      $new_date = date('Y-m-d', $date_naissance);
      echo $new_date;
    } else {
       echo 'Invalid Date: ' . $_POST['datedenaissance'];
      // fix it.
    }

// Le tableau $_POST['genreMuscial'] contient les valeurs des checkbox cochées
foreach($_POST['genreMusical'] as $style)
{
   echo "La checkbox $style a été cochée<br>";
}

/*
Si l'utilisateur coche des styles musicaux, 
cet exemple va afficher:
La checkbox HipHop a été cochée
La checkbox Rock a été cochée
*/

if(!$_POST['genreMusical']){
    echo "Aucune checkbox n'a été cochée";
 }

 /*
Si l'utilisateur ne coche rien, 
cet exemple va afficher:
Aucune checkbox n'a été cochée
*/

// Le tableau $_POST['Hobbies'] contient les valeurs des checkbox cochées
foreach($_POST['Hobbies'] as $hobby)
{
   echo "La checkbox $hobby a été cochée<br>";
}

/*
Si l'utilisateur coche des hobbies, 
cet exemple va afficher:
La checkbox ami a été cochée
La checkbox famille a été cochée
*/

if(!$_POST['Hobbies']){
    echo "Aucune checkbox n'a été cochée";
 }

 /*
Si l'utilisateur ne coche rien, 
cet exemple va afficher:
Aucune checkbox n'a été cochée
*/

// Le tableau $_POST['relation'] contient les valeurs des checkbox cochées
foreach($_POST['relation'] as $relation)
{
   echo "La checkbox $relation a été cochée<br>";
}

/*
Si l'utilisateur coche des relation, 
cet exemple va afficher:
La checkbox relation amis a été cochée
La checkbox relation famille a été cochée
*/

if(!$_POST['relation']){
    echo "Aucune checkbox n'a été cochée";
 }

 /*
Si l'utilisateur ne coche rien, 
cet exemple va afficher:
Aucune checkbox n'a été cochée
*/

    $appliDB->insertPersonne($nom,$prenom,$statut_couple,$url_photo,$date_naissance,$style,$hobby,$relation);

?>  