<?php
    if(isset($_POST['ok'])){
       
        //var_dump($_POST);
     
        $nom = $_POST['nom'];
        $prénom = $_POST['prénom'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $pass = $_POST['pass'];
       
       
        $filename = 'utilisateurs.txt';
        if(file_exists($filename)) {
        // Lire le contenu du fichier dans un tableau
        $utilisateurs = file($filename, FILE_IGNORE_NEW_LINES);
        
        // Vérifier si le pseudo ou l'e-mail existe déjà dans le fichier
        foreach($utilisateurs as $utilisateur) {
            list(, , $existingEmail, $existingPseudo) = explode(',', $utilisateur);
            if($existingPseudo == $pseudo) {
                echo "Ce pseudo est déjà utilisé. Veuillez en choisir un autre.";
                exit; // Arrêter le script
            }
            if($existingEmail == $email) {
                echo "Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
                exit; // Arrêter le script
            }
        }
    }


// Création d'une chaîne de données à enregistrer dans le fichier
$data = $nom . ',' . $prénom . ',' . $email . ',' . $pseudo . ',' . $pass . ',' . PHP_EOL;

// Ajout des données au fichier
file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

echo "Inscription réussie. Redirection vers la page de connexion...";
// Redirection vers la page de connexion
header("Location: connexion.html");
       
    }
?>
