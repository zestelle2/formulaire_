<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>Je suis un formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <style type="text/css">
    .methode{
        margin : 30px;
    }
    
    </style>
</head>
<body>

<?php
/* fonction pour la mise en page entre les exercices */
function saut_entre_exercice(){
    echo '<br/ >';
    echo '<br/ >';
    echo '<hr/ >';
};

// fonction qui vérifie le bon extension de ton fichier 

saut_entre_exercice();

//Exercice 1

/*Créer un formulaire demandant le nom et le prénom. 
Ce formulaire doit rediriger vers la page user.php avec la méthode GET */
?>
<section class="methode get">
<h2>méthode GET</h2>
    <form action="user.php" method="GET">
            <div>
                <label for="name">Nom :</label>
                <input type="text" name="nom" size="30" maxlength="10" />
            </div>
            <div>
                <label for="name">Prenom :</label>
                <input type="text" name="prenom" size="30" maxlength="10" />
            </div>
            <div class="button">
                <button type="submit" value="Valider" /> Envoyer le message</button>
            </div>
        </form>
</section>

<section class="methode post">
<h2>méthode POST</h2>
    <form action="user.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" name="nom" size="30" maxlength="10" />
            </div>
            <div>
                <label for="name">Prenom :</label>
                <input type="text" name="prenom" size="30" maxlength="10" />
            </div>
            <div class="button">
                <button type="submit" value="Valider" /> Envoyer le message</button>
            </div>
        </form>
</section>

<!--//Exercice 6

/*Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page. */
if (isset($_POST['nom']) && isset($_POST['prenom'])){
    echo("bonjour tu t'appelle " . $_POST['nom'] . ' ' . $_POST['prenom']);
}else {
    echo ("tu n'a rien mis pour la méthode post ou tu  n'as pas validé le bon boutton ");
} -->
<section class="methode liste_deroulante">
<h2>Exo 5 : Liste déroulante</h2>
 <?php


    if (isset($_POST['nom']) && $_POST['prenom'] && $_POST['civilite']  ) {

        echo "bonjour " .$_POST['civilite'] . " tu t'appelle " . $_POST['nom'] . " "  . $_POST['prenom'] . "." ."<br>" . " Ton fichier : " .$_POST['fichier'];
        
        $extension = pathinfo($_POST['fichier'], PATHINFO_EXTENSION);

        if($extension== "pdf"){
            echo " . <br>  tu as le bon type d'extension"; 
        } else {
            echo " . <br> ERREUR ce n'est pas le bon type de fichier";
        }
    }else   {
        echo "<form method='post' >
                <div>
                    <label for='name'>Nom :</label>
                    <input type='text' name='nom' size='30' maxlength='10' autofocus />
                </div>
                <div>
                    <label for='name'>Prenom :</label>
                    <input type='text' name='prenom' size='30' maxlength='10' />
                </div>
                <div>
                    <label for='name'>Envoi de fichier : </label>
                    <input type='file' name='fichier' />
                </div>
                
                <select name='civilite'>
                    <option> Mme </option>
                    <option> Mr </option>
                </select>

                <div class='button'>
                    <button type='submit' value='Valider' /> Envoyer le message</button>
                </div>
            </form>";
    }
?>
</section>


    
</body>
</html>
