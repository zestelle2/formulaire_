<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>user.php</title>
</head>
<body>
<?php

/* fonction pour la mise en page entre les exercices */
function saut_entre_exercice(){
    echo '<br/ >';
    echo '<br/ >';
    echo '<hr/ >';
};

/* METHODE GET */
// Si l'utilisateur rentre bien la case nom et prenom
if (isset ($_GET['nom']) && isset($_GET['prenom'])) {
    echo("bonjour tu t'appelle " . $_GET['nom'] . ' ' . $_GET['prenom']); 
}else{
    echo ("tu n'a rien mis pour la méthode get ou tu n'as pas validé le bon boutton");
}

saut_entre_exercice();

/* Methode POST */
if (isset($_POST['nom']) && isset($_POST['prenom'])){
    echo("bonjour tu t'appelle " . $_POST['nom'] . ' ' . $_POST['prenom']);
}else {
    echo ("tu n'a rien mis pour la méthode post ou tu  n'as pas validé le bon boutton ");
}

//Exercice 3
/*Avec le formulaire de l'exercice 1, afficher dans la page user.php 
les données du formulaire transmis.*/ 
// dejà FAIT !

//Exercice 4

/*Avec le formulaire de l'exercice 2, afficher dans la page user.php 
les données du formulaire transmises. */
//dejà fait 

//Exercice 5

/*Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode. */

//FAIT





?>

</body>
</html>